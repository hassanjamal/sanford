<?php namespace Authority\Repo\User;

use Cartalyst\Sentry\Users\LoginRequiredException;
use Cartalyst\Sentry\Users\UserAlreadyActivatedException;
use Cartalyst\Sentry\Users\UserExistsException;
use Cartalyst\Sentry\Users\UserNotFoundException;
use Exception;
use Mail;
use User;
use Cartalyst\Sentry\Sentry;
use Authority\Repo\RepoAbstract;

class SentryUser extends RepoAbstract implements UserInterface {

    protected $sentry;

    /**
     * Construct a new SentryUser Object
     * @param Sentry $sentry
     */
    public function __construct(Sentry $sentry)
    {
        $this->sentry = $sentry;

        // Get the Throttle Provider
        $this->throttleProvider = $this->sentry->getThrottleProvider();

        // Enable the Throttling Feature
        $this->throttleProvider->enable();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param $data
     * @return Response
     */
    public function store($data)
    {
        $result = array();
        try
        {
            //Attempt to register the user.
            $user = $this->sentry->register(array(
                'login_id'         => e($data['login_id']),
                'email'            => e($data['email']),
                'password'         => e($data['password']),
                'first_name'       => e($data['first_name']),
                'last_name'        => e($data['last_name']),
                'mother_name'      => e($data['mother_name']),
                'father_name'      => e($data['father_name']),
                'date_of_birth'    => e($data['date_of_birth']),
                'nationality'      => e($data['nationality']),
                'profession'       => e($data['profession']),
                'address'          => e($data['address']),
                'city'             => e($data['city']),
                'state'            => e($data['state']),
                'pincode'          => e($data['pincode']),
                'std_code'         => e($data['std_code']),
                'landline'         => e($data['landline']),
                'mobile'           => e($data['mobile']),
                'pan'              => e($data['pan']),
                'bank_name'        => e($data['bank_name']),
                'bank_branch'      => e($data['bank_branch']),
                'bank_ifs_code'    => e($data['bank_ifs_code']),
                'account_no'       => e($data['account_no']),
                'nominee_name'     => e($data['nominee_name']),
                'nominee_dob'      => e($data['nominee_dob']),
                'nominee_relation' => e($data['nominee_relation']),
                'activated'        => 1
            ));

            //success!
            $result['success']                    = true;
            $result['message']                    = trans('users.created');
            $result['user_id']                    = $user->getId();
            $result['mailData']['activationCode'] = $user->GetActivationCode();
            $result['mailData']['userId']         = $user->getId();
            $result['mailData']['login_id']       = e($data['login_id']);
            $result['mailData']['email']          = e($data['email']);

        } catch (LoginRequiredException $e)
        {
            $result['success'] = false;
            $result['message'] = trans('users.loginreq');
        } catch (UserExistsException $e)
        {
            $result['success'] = false;
            $result['message'] = trans('users.exists');
        } catch (Exception $e)
        {
            $result['success'] = 'false';
            $result['message'] = "Oops !! something went wrong";
        }

        return $result;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  array $data
     * @param $userModel
     * @return Response
     */
    public function update($data, $userModel)
    {
        $result = array();
        try
        {
            // Find the user using the user id
            $user = $this->sentry->findUserById($userModel->id);

            // Update the user details
            $user->first_name = e($data['first_name']);
            $user->last_name  = e($data['last_name']);

            // Only Admins should be able to change group memberships.
            $operator = $this->sentry->getUser();
            if ($operator->hasAccess('admin'))
            {
                // Update group memberships
                $allGroups = $this->sentry->getGroupProvider()->findAll();
                foreach ($allGroups as $group)
                {
                    if (isset($data['groups'][$group->id]))
                    {
                        //The user should be added to this group
                        $user->addGroup($group);
                    } else
                    {
                        // The user should be removed from this group
                        $user->removeGroup($group);
                    }
                }
            }

            // Update the user
            if ($user->save())
            {
                // User information was updated
                $result['success'] = true;
                $result['message'] = trans('users.updated');
            } else
            {
                // User information was not updated
                $result['success'] = false;
                $result['message'] = trans('users.notupdated');
            }
        } catch (UserExistsException $e)
        {
            $result['success'] = false;
            $result['message'] = trans('users.exists');
        } catch (UserNotFoundException $e)
        {
            $result['success'] = false;
            $result['message'] = trans('users.notfound');
        }

        return $result;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        try
        {
            // Find the user using the user id
            $user = $this->sentry->findUserById($id);

            // Delete the user
            $user->delete();
        } catch (UserNotFoundException $e)
        {
            return false;
        }

        return true;
    }

    /**
     * Force Activation by Admin
     * @param $userModel
     * @return array
     */
    public function adminActivation($userModel)
    {
        $result = [];
        try
        {
            $user           = $this->sentry->findUserByCredentials([
                'user_id' => $userModel->user_id,
                'email'   => $userModel->email
            ]);
            $activationCode = $user->getActivationCode();
            if ($user->attemptActivation($activationCode))
            {
                // User activation passed
                $result['success'] = true;
                $result['message'] = trans('users.activated');
            } else
            {
                // User activation failed
                $result['success'] = false;
                $result['message'] = trans('users.notactivated');
            }
        } catch (UserAlreadyActivatedException $e)
        {
            $result['success'] = false;
            $result['message'] = trans('users.alreadyactive');
        } catch (UserExistsException $e)
        {
            $result['success'] = false;
            $result['message'] = trans('users.exists');
        } catch (UserNotFoundException $e)
        {
            $result['success'] = false;
            $result['message'] = trans('users.notfound');
        }

        return $result;
    }

    /**
     * Attempt activation for the specified user
     * @param  int $id
     * @param  string $code
     * @return bool
     */
    public function activate($id, $code)
    {
        $result = array();
        try
        {
            // Find the user using the user id
            $user = $this->sentry->findUserById($id);

            // Attempt to activate the user
            if ($user->attemptActivation($code))
            {
                // User activation passed
                $result['success'] = true;
                $url               = route('login');
                $result['message'] = trans('users.activated', array('url' => $url));
            } else
            {
                // User activation failed
                $result['success'] = false;
                $result['message'] = trans('users.notactivated');
            }
        } catch (UserAlreadyActivatedException $e)
        {
            $result['success'] = false;
            $result['message'] = trans('users.alreadyactive');
        } catch (UserExistsException $e)
        {
            $result['success'] = false;
            $result['message'] = trans('users.exists');
        } catch (UserNotFoundException $e)
        {
            $result['success'] = false;
            $result['message'] = trans('users.notfound');
        }

        return $result;
    }

    /**
     * Resend the activation email to the specified email address
     * @param  Array $data
     * @return Response
     */
    public function resend($data)
    {
        $result = array();
        try
        {
            //Attempt to find the user. 
            $user = $this->sentry->getUserProvider()->findByLogin(e($data['email']));

            if ( ! $user->isActivated())
            {
                //success!
                $result['success']                    = true;
                $result['message']                    = trans('users.emailconfirm');
                $result['mailData']['activationCode'] = $user->GetActivationCode();
                $result['mailData']['userId']         = $user->getId();
                $result['mailData']['email']          = e($data['email']);
            } else
            {
                $result['success'] = false;
                $result['message'] = trans('users.alreadyactive');
            }

        } catch (UserAlreadyActivatedException $e)
        {
            $result['success'] = false;
            $result['message'] = trans('users.alreadyactive');
        } catch (UserExistsException $e)
        {
            $result['success'] = false;
            $result['message'] = trans('users.exists');
        } catch (UserNotFoundException $e)
        {
            $result['success'] = false;
            $result['message'] = trans('users.notfound');
        }

        return $result;
    }

    /**
     * Handle a password reset rewuest
     * @param  Array $data
     * @return Bool
     */
    public function forgotPassword($data)
    {
        $result = array();
        try
        {
            $user = $this->sentry->getUserProvider()->findByLogin(e($data['email']));

            $result['success']               = true;
            $result['message']               = trans('users.emailinfo');
            $result['mailData']['resetCode'] = $user->getResetPasswordCode();
            $result['mailData']['userId']    = $user->getId();
            $result['mailData']['email']     = e($data['email']);
        } catch (UserNotFoundException $e)
        {
            $result['success'] = false;
            $result['message'] = trans('users.notfound');
        }

        return $result;
    }

    /**
     * Process the password reset request
     * @param  int $id
     * @param  string $code
     * @return Array
     */
    public function resetPassword($id, $code)
    {
        $result = array();
        try
        {
            // Find the user
            $user        = $this->sentry->getUserProvider()->findById($id);
            $newPassword = $this->_generatePassword(8, 8);

            // Attempt to reset the user password
            if ($user->attemptResetPassword($code, $newPassword))
            {
                // Email the reset code to the user
                $result['success']                 = true;
                $result['message']                 = trans('users.emailpassword');
                $result['mailData']['newPassword'] = $newPassword;
                $result['mailData']['email']       = $user->getLogin();
            } else
            {
                // Password reset failed
                $result['success'] = false;
                $result['message'] = trans('users.problem');
            }
        } catch (UserNotFoundException $e)
        {
            $result['success'] = false;
            $result['message'] = trans('users.notfound');
        }

        return $result;
    }

    /**
     * Process a change password request.
     * @return Array $data
     */
    public function changePassword($data)
    {
        $result = array();
        try
        {
            $user = $this->sentry->getUserProvider()->findById($data['id']);

//            if ($user->checkHash(e($data['oldPassword']), $user->getPassword()))
//            {
//                //The oldPassword matches the current password in the DB. Proceed.
            $user->password = e($data['password']);

            if ($user->save())
            {
                // User saved
                $result['success'] = true;
                $result['message'] = trans('users.passwordchg');
            } else
            {
                // User not saved
                $result['success'] = false;
                $result['message'] = trans('users.passwordprob');
            }
//            } else
//            {
//                // Password mismatch. Abort.
//                $result['success'] = false;
//                $result['message'] = trans('users.oldpassword');
//            }
        } catch (LoginRequiredException $e)
        {
            $result['success'] = false;
            $result['message'] = 'Login field required.';
        } catch (UserExistsException $e)
        {
            $result['success'] = false;
            $result['message'] = trans('users.exists');
        } catch (UserNotFoundException $e)
        {
            $result['success'] = false;
            $result['message'] = trans('users.notfound');
        }

        return $result;
    }

    /**
     * Suspend a user
     * @param  int $id
     * @param  int $minutes
     * @return Array
     */
    public function suspend($id, $minutes)
    {
        $result = array();
        try
        {
            // Find the user using the user id
            $throttle = $this->sentry->findThrottlerByUserId($id);

            //Set suspension time
            $throttle->setSuspensionTime($minutes);

            // Suspend the user
            $throttle->suspend();

            $result['success'] = true;
            $result['message'] = trans('users.suspended', array('minutes' => $minutes));
        } catch (UserNotFoundException $e)
        {
            $result['success'] = false;
            $result['message'] = trans('users.notfound');
        }

        return $result;
    }

    /**
     * Remove a users' suspension.
     * @param $id
     * @internal param $ [type] $id [description]
     * @return array [type]     [description]
     */
    public function unSuspend($id)
    {
        $result = array();
        try
        {
            // Find the user using the user id
            $throttle = $this->sentry->findThrottlerByUserId($id);

            // Unsuspend the user
            $throttle->unsuspend();

            $result['success'] = true;
            $result['message'] = trans('users.unsuspended');
        } catch (UserNotFoundException $e)
        {
            $result['success'] = false;
            $result['message'] = trans('users.notfound');
        }

        return $result;
    }

    /**
     * Ban a user
     * @param  int $id
     * @return Array
     */
    public function ban($id)
    {
        $result = array();
        try
        {
            // Find the user using the user id
            $throttle = $this->sentry->findThrottlerByUserId($id);

            // Ban the user
            $throttle->ban();

            $result['success'] = true;
            $result['message'] = trans('users.banned');
        } catch (UserNotFoundException $e)
        {
            $result['success'] = false;
            $result['message'] = trans('users.notfound');
        }

        return $result;
    }

    /**
     * Remove a users' ban
     * @param  int $id
     * @return Array
     */
    public function unBan($id)
    {
        $result = array();
        try
        {
            // Find the user using the user id
            $throttle = $this->sentry->findThrottlerByUserId($id);

            // Unban the user
            $throttle->unBan();

            $result['success'] = true;
            $result['message'] = trans('users.unbanned');
        } catch (UserNotFoundException $e)
        {
            $result['success'] = false;
            $result['message'] = trans('users.notfound');
        }

        return $result;
    }

    /**
     * Return a specific user from the given id
     *
     * @param  integer $id
     * @return User
     */
    public function byId($id)
    {
        try
        {
            $user = $this->sentry->findUserById($id);
        } catch (UserNotFoundException $e)
        {
            return false;
        }

        return $user;
    }

    /**
     * Return all the registered users
     *
     * @return stdObject Collection of users
     */
    public function all()
    {
        $users = $this->sentry->findAllUsers();

        foreach ($users as $user)
        {
            if ($user->isActivated())
            {
                $user->status = "Active";
            } else
            {
                $user->status = "Not Active";
            }

            //Pull Suspension & Ban info for this user
            $throttle = $this->throttleProvider->findByUserId($user->id);

            //Check for suspension
            if ($throttle->isSuspended())
            {
                // User is Suspended
                $user->status = "Suspended";
            }

            //Check for ban
            if ($throttle->isBanned())
            {
                // User is Banned
                $user->status = "Banned";
            }
        }

        return $users;
    }


    /**
     * return all user with pagination
     *
     * @param $limit
     * @return \Illuminate\Pagination\Paginator
     */
    public function allPaginated($limit)
    {
        $users = User::paginate($limit);
//        $users = $this->sentry->findAllUsers();
//        dd($users);

//        foreach ($users as $user) {
//            if ($user->isActivated())
//            {
//                $user->status = "Active";
//            }
//            else
//            {
//                $user->status = "Not Active";
//            }
//
//            //Pull Suspension & Ban info for this user
//            $throttle = $this->throttleProvider->findByUserId($user->id);
//
//            //Check for suspension
//            if($throttle->isSuspended())
//            {
//                // User is Suspended
//                $user->status = "Suspended";
//            }
//
//            //Check for ban
//            if($throttle->isBanned())
//            {
//                // User is Banned
//                $user->status = "Banned";
//            }
//        }

        return $users;
    }

    /**
     * Generate password - helper function
     * From http://www.phpscribble.com/i4xzZu/Generate-random-passwords-of-given-length-and-strength
     *
     */
    private function _generatePassword($length = 9, $strength = 4)
    {
        $vowels     = 'aeiouy';
        $consonants = 'bcdfghjklmnpqrstvwxz';
        if ($strength & 1)
        {
            $consonants .= 'BCDFGHJKLMNPQRSTVWXZ';
        }
        if ($strength & 2)
        {
            $vowels .= "AEIOUY";
        }
        if ($strength & 4)
        {
            $consonants .= '23456789';
        }
        if ($strength & 8)
        {
            $consonants .= '@#$%';
        }

        $password = '';
        $alt      = time() % 2;
        for ($i = 0 ; $i < $length ; $i ++)
        {
            if ($alt == 1)
            {
                $password .= $consonants[(rand() % strlen($consonants))];
                $alt = 0;
            } else
            {
                $password .= $vowels[(rand() % strlen($vowels))];
                $alt = 1;
            }
        }

        return $password;
    }
}
