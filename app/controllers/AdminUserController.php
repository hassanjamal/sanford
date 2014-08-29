<?php

use Authority\Repo\User\UserInterface;
use Authority\Repo\Group\GroupInterface;
use Authority\Service\Form\Register\RegisterForm;
use Authority\Service\Form\User\UserForm;
use Authority\Service\Form\ResendActivation\ResendActivationForm;
use Authority\Service\Form\ForgotPassword\ForgotPasswordForm;
use Authority\Service\Form\ChangePassword\ChangePasswordForm;
use Authority\Service\Form\SuspendUser\SuspendUserForm;

class AdminUserController extends BaseController {

    protected $user;
    protected $group;
    protected $registerForm;
    protected $userForm;
    protected $resendActivationForm;
    protected $forgotPasswordForm;
    protected $changePasswordForm;
    protected $suspendUserForm;

    /**
     * Instantiate a new UserController
     * @param UserInterface $user
     * @param GroupInterface $group
     * @param RegisterForm $registerForm
     * @param UserForm $userForm
     * @param ResendActivationForm $resendActivationForm
     * @param ForgotPasswordForm $forgotPasswordForm
     * @param ChangePasswordForm $changePasswordForm
     * @param SuspendUserForm $suspendUserForm
     */
    public function __construct(
        UserInterface $user,
        GroupInterface $group,
        RegisterForm $registerForm,
        UserForm $userForm,
        ResendActivationForm $resendActivationForm,
        ForgotPasswordForm $forgotPasswordForm,
        ChangePasswordForm $changePasswordForm,
        SuspendUserForm $suspendUserForm)
    {
        $this->user                 = $user;
        $this->group                = $group;
        $this->registerForm         = $registerForm;
        $this->userForm             = $userForm;
        $this->resendActivationForm = $resendActivationForm;
        $this->forgotPasswordForm   = $forgotPasswordForm;
        $this->changePasswordForm   = $changePasswordForm;
        $this->suspendUserForm      = $suspendUserForm;

        //Check CSRF token on POST
        $this->beforeFilter('csrf', array('on' => 'post'));

        // Set up Auth Filters
        $this->beforeFilter('auth', array('only' => array('change')));
        $this->beforeFilter('inGroup:Admins', array('only' => array('show', 'index', 'destroy', 'suspend', 'unsuspend', 'ban', 'unban', 'edit', 'update')));
        //array('except' => array('create', 'store', 'activate', 'resend', 'forgot', 'reset')));
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::where('login_id', '!=', 'Admin')->paginate(10);

        return View::make('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new user.
     *
     * @return Response
     */
    public function create()
    {
        $rootExist = false;
        $package   = Package::lists('description', 'id');
        if (UsersTree::count() > 0)
        {
            $rootExist = true;
        }
        $login_id = 100000000000 + User::count();

        return View::make('admin.users.create', compact('rootExist', 'login_id', 'package'));
    }

    /**
     * Store a newly created user.
     *
     * @return Response
     */
    public function store()
    {
//        dd(Input::all());
        $result = $this->registerForm->save(Input::all());
        if ($result['success'])
        {

            // if there is no node create root first
            if ( ! Input::get('rootExist'))
            {
                $root = UsersTree::create([
                    'user_id'        => $result['user_id'],
                    'package_id'     => Input::get('package_id'),
                    'amount'         => Input::get('amount'),
                    'dd_no'          => Input::get('dd_no'),
                    'dd_date'        => Input::get('dd_date'),
                    'dd_drawn_date'  => Input::get('dd_drawn_date'),
                    'insured_person' => Input::get('insured_person'),
                ]);
            } else
            {
                $newNode = UsersTree::create([
                    'user_id'        => $result['user_id'],
                    'package_id'     => Input::get('package_id'),
                    'amount'         => Input::get('amount'),
                    'dd_no'          => Input::get('dd_no'),
                    'dd_date'        => Input::get('dd_date'),
                    'dd_drawn_date'  => Input::get('dd_drawn_date'),
                    'insured_person' => Input::get('insured_person'),
                    'sponsor_id'     => Input::get('to_sponsor_id'),
                ]);

                $currentRoot = UsersTree::where('user_id', (int) Input::get('to_parent_id'))->take(1)->first();
                $newNode->makeChildOf($currentRoot);
            }

            Session::flash('success', $result['message']);

            return Redirect::route('admin.user.index');

        } else
        {
            Session::flash('error', $result['message']);

            return Redirect::route('admin.user.create')
                ->withInput()
                ->withErrors($this->registerForm->errors());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param $user
     * @return Response
     */
    public function show($user)
    {
        // $user = $this->user->byId($id);

        if ($user == null)
        {
            // @codeCoverageIgnoreStart
            return \App::abort(404);
            // @codeCoverageIgnoreEnd
        }

        $currentRoot = UsersTree::where('user_id', $user->id)->take(1)->first();

        // $treeData = $currentRoot->getDescendantsAndSelf()->toHierarchy();

        // dd($treeData);

        $childNode = [];
        foreach (UsersTree::where('parent_id', $user->id)->get() as $child)
        {
            $node        = UsersTree::findOrFail($child->id);
            $leftValue   = $node->lft;
            $rightValue  = $node->rgt;
            $totalNodes  = (($rightValue - $leftValue - 1) / 2) + 1;
            $childNode[] = $totalNodes;
        }

        $payments = User::with('payments')->has('payments')->find($user->id);

        return View::make('admin.users.show', compact('user', 'childNode', 'payments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $userModel
     * @internal param $user
     * @internal param int $id
     * @return Response
     */
    public function edit($userModel)
    {
//        $user = Sentry::findUserByCredentials([
//            'user_id'=> $userModel->user_id,
//            'email' => $userModel->email
//        ]);
//        dd($user->getActivationCode());
//        $user = $this->user->byId($userModel->id);

//        if ($user == null)
//        {
        // @codeCoverageIgnoreStart
//            return \App::abort(404);
        // @codeCoverageIgnoreEnd
//        }

//        $currentGroups = $user->getGroups()->toArray();
//        $userGroups    = array();
//        foreach ($currentGroups as $group)
//        {
//            array_push($userGroups, $group['name']);
//        }
//        $allGroups = $this->group->all();
//
//        return View::make('admin.users.edit')
//            ->with('user', $user)
//            ->with('userGroups', $userGroups)
//            ->with('allGroups', $allGroups);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $userModel
     * @internal param int $id
     * @return Response
     */
    public function update($userModel)
    {
//        if ( ! $userModel)
//        {
//             @codeCoverageIgnoreStart
//            return \App::abort(404);
//             @codeCoverageIgnoreEnd
//        }
//
//         Form Processing
//        $result = $this->userForm->update(Input::all(), $userModel);
//
//        if ($result['success'])
//        {
//             Success!
//            Session::flash('success', $result['message']);
//
//            return Redirect::route('admin.user.index');
//
//        } else
//        {
//            Session::flash('error', $result['message']);
//
//            return Redirect::route('admin.user.edit', $userModel->id)
//                ->withInput()
//                ->withErrors($this->userForm->errors());
//        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
//        if ( ! is_numeric($id))
//        {
        // @codeCoverageIgnoreStart
//            return \App::abort(404);
        // @codeCoverageIgnoreEnd
//        }
//
//        if ($this->user->destroy($id))
//        {
//            Session::flash('success', 'User Deleted');
//
//            return Redirect::to('/users');
//        } else
//        {
//            Session::flash('error', 'Unable to Delete User');
//
//            return Redirect::to('/users');
//        }
    }

    /**
     * Activate a new user by Admin
     * @param $userModel
     * @internal param int $id
     * @internal param string $code
     * @return Response
     */
    public function activate($userModel)
    {
//        if ( ! $userModel)
//        {
//            // @codeCoverageIgnoreStart
//            return \App::abort(404);
//            // @codeCoverageIgnoreEnd
//        }
//
//        $result = $this->user->adminActivation($userModel);
//
//        if ($result['success'])
//        {
//            // Success!
//            Session::flash('success', $result['message']);
//
//            return Redirect::route('admin.user.index');
//
//        } else
//        {
//            Session::flash('error', $result['message']);
//
//            return Redirect::route('admin.user.index');
//        }
    }

    /**
     * Process resend activation request
     * @return Response
     */
    public function resend()
    {
//        // Form Processing
//        $result = $this->resendActivationForm->resend(Input::all());
//
//        if ($result['success'])
//        {
//            Event::fire('user.resend', array(
//                'email'          => $result['mailData']['email'],
//                'userId'         => $result['mailData']['userId'],
//                'activationCode' => $result['mailData']['activationCode']
//            ));
//
//            // Success!
//            Session::flash('success', $result['message']);
//
//            return Redirect::route('home');
//        } else
//        {
//            Session::flash('error', $result['message']);
//
//            return Redirect::route('profile')
//                ->withInput()
//                ->withErrors($this->resendActivationForm->errors());
//        }
    }

    /**
     * Process Forgot Password request
     * @return Response
     */
    public function forgot()
    {
//        // Form Processing
//        $result = $this->forgotPasswordForm->forgot(Input::all());
//
//        if ($result['success'])
//        {
//            Event::fire('user.forgot', array(
//                'email'     => $result['mailData']['email'],
//                'userId'    => $result['mailData']['userId'],
//                'resetCode' => $result['mailData']['resetCode']
//            ));
//
//            // Success!
//            Session::flash('success', $result['message']);
//
//            return Redirect::route('home');
//        } else
//        {
//            Session::flash('error', $result['message']);
//
//            return Redirect::route('forgotPasswordForm')
//                ->withInput()
//                ->withErrors($this->forgotPasswordForm->errors());
//        }
    }

    /**
     * Process a password reset request link
     * @param $id
     * @param $code
     * @internal param $ [type] $id   [description]
     * @internal param $ [type] $code [description]
     * @return \Illuminate\Http\RedirectResponse [type]       [description]
     */
    public function reset($id, $code)
    {
//        if ( ! is_numeric($id))
//        {
//            // @codeCoverageIgnoreStart
//            return \App::abort(404);
//            // @codeCoverageIgnoreEnd
//        }
//
//        $result = $this->user->resetPassword($id, $code);
//
//        if ($result['success'])
//        {
//            Event::fire('user.newpassword', array(
//                'email'       => $result['mailData']['email'],
//                'newPassword' => $result['mailData']['newPassword']
//            ));
//
//            // Success!
//            Session::flash('success', $result['message']);
//
//            return Redirect::route('home');
//
//        } else
//        {
//            Session::flash('error', $result['message']);
//
//            return Redirect::route('home');
//        }
    }

    /**
     * Process a password change request
     * @param $userModel
     * @internal param int $id
     * @return redirect
     */
    public function changePassword($userModel)
    {
//        if ( ! $userModel)
//        {
//            // @codeCoverageIgnoreStart
//            return \App::abort(404);
//            // @codeCoverageIgnoreEnd
//        }
//
//        $data       = Input::all();
//        $data['id'] = $userModel->id;
//
//        // Form Processing
//        $result = $this->changePasswordForm->change($data);
//
//        if ($result['success'])
//        {
//            // Success!
//            Session::flash('success', $result['message']);
//
//            return Redirect::route('admin.user.edit', $userModel->id);
//        } else
//        {
//            Session::flash('error', $result['message']);
//
//            return Redirect::route('admin.user.edit', $userModel->id)
//                ->withInput()
//                ->withErrors($this->changePasswordForm->errors());
//        }
    }

    /**
     * Process a suspend user request
     * @param  int $id
     * @return Redirect
     */
    public function suspend($id)
    {
//        if ( ! is_numeric($id))
//        {
//            // @codeCoverageIgnoreStart
//            return \App::abort(404);
//            // @codeCoverageIgnoreEnd
//        }
//
//        // Form Processing
//        $result = $this->suspendUserForm->suspend(Input::all());
//
//        if ($result['success'])
//        {
//            // Success!
//            Session::flash('success', $result['message']);
//
//            return Redirect::to('users');
//
//        } else
//        {
//            Session::flash('error', $result['message']);
//
//            return Redirect::action('UserController@suspend', array($id))
//                ->withInput()
//                ->withErrors($this->suspendUserForm->errors());
//        }
    }

    /**
     * Unsuspend user
     * @param  int $id
     * @return Redirect
     */
    public function unsuspend($id)
    {
//        if ( ! is_numeric($id))
//        {
//            // @codeCoverageIgnoreStart
//            return \App::abort(404);
//            // @codeCoverageIgnoreEnd
//        }
//
//        $result = $this->user->unSuspend($id);
//
//        if ($result['success'])
//        {
//            // Success!
//            Session::flash('success', $result['message']);
//
//            return Redirect::to('users');
//
//        } else
//        {
//            Session::flash('error', $result['message']);
//
//            return Redirect::to('users');
//        }
    }

    /**
     * Ban a user
     * @param  int $id
     * @return Redirect
     */
    public function ban($id)
    {
//        if ( ! is_numeric($id))
//        {
//            // @codeCoverageIgnoreStart
//            return \App::abort(404);
//            // @codeCoverageIgnoreEnd
//        }
//
//        $result = $this->user->ban($id);
//
//        if ($result['success'])
//        {
//            // Success!
//            Session::flash('success', $result['message']);
//
//            return Redirect::to('users');
//
//        } else
//        {
//            Session::flash('error', $result['message']);
//
//            return Redirect::to('users');
//        }
    }

    public function unban($id)
    {
//        if ( ! is_numeric($id))
//        {
//            // @codeCoverageIgnoreStart
//            return \App::abort(404);
//            // @codeCoverageIgnoreEnd
//        }
//
//        $result = $this->user->unBan($id);
//
//        if ($result['success'])
//        {
//            // Success!
//            Session::flash('success', $result['message']);
//
//            return Redirect::to('users');
//
//        } else
//        {
//            Session::flash('error', $result['message']);
//
//            return Redirect::to('users');
//        }
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getParent()
    {
        $term   = Input::get('term');
        $parent = array();
        $search = DB::select(
            "
            SELECT id , login_id AS VALUE ,CONCAT(first_name ,' ', last_name ,'  :: Login Id :: ',login_id) as label
            FROM users
            WHERE MATCH (first_name,last_name, login_id  )
            against ('+{$term}*' IN BOOLEAN MODE)
            AND login_id != 'Admin'
            AND id IN ( SELECT user_id  FROM users_trees
                        WHERE (rgt-lft-1)/2 = 1
                        UNION
                        SELECT ut1.user_id
                        FROM users_trees AS ut1 LEFT JOIN users_trees ut2
                        ON ut1.id = ut2.parent_id
                        WHERE ut2.id IS NULL )
            "
        );

        foreach ($search as $result)
        {
            $parent[] = $result;
        }

        return json_encode($parent);
    }

    /**
     * Post Method for Parent Id Validation
     * @return string
     */
    public function postParent()
    {
        $term   = Input::get('parent_id');
        $search = DB::select(
            "
            select login_id
            from users
            where login_id = $term
            and login_id != 'Admin'
            "
        );

        if ($search)
        {
            return json_encode(array('valid' => true));
        } else
        {
            return json_encode(array('valid' => false));
        }

    }


    public function getSponsor()
    {

        $term    = Input::get('term');
        $sponsor = array();
        $search  = DB::select(
            "
            select id , login_id as value ,CONCAT(first_name ,' ', last_name ,'  :: Login Id :: ',login_id) as label
            from users
            where match (first_name,last_name, login_id  )
            against ('+{$term}*' IN BOOLEAN MODE)
            and  login_id != 'Admin'
            "
        );

        foreach ($search as $result)
        {
            $sponsor[] = $result;
        }

        return json_encode($sponsor);
    }


    public function getReceipt($user)
    {

        if ($user->id)
        {
            $packageId  = User::find($user->id)->usertree()->take(1)->pluck('package_id');
            $allPackage = Package::with('packageitems')->find($packageId);
            $package    = $allPackage->packageitems;
            $pdf        = App::make('dompdf');
            $pdf->loadView('admin/users/receipt', compact('user', 'allPackage'));

            return $pdf->stream();
        } else
        {
            return Redirect::to('admin/user')->with('error', "User Does Not Exists");
        }
    }

    public function getWelcome($user)
    {

        if ($user->id)
        {
            $packageId  = User::find($user->id)->usertree()->take(1)->pluck('package_id');
            $allPackage = Package::with('packageitems')->find($packageId);
            $package    = $allPackage->packageitems;
            $pdf        = App::make('dompdf');
            $pdf->loadView('admin/users/welcome', compact('user', 'allPackage'));

            return $pdf->stream();
        } else
        {
            return Redirect::to('admin/user')->with('error', "User Does Not Exists");
        }
    }


}


