<?php

use Authority\Repo\Session\SessionInterface;
use Authority\Service\Form\Login\LoginForm;

class SessionController extends BaseController {

    /**
     * Member Vars
     */
    protected $session;
    protected $loginForm;

    /**
     * Constructor
     * @param SessionInterface $session
     * @param LoginForm $loginForm
     */
    public function __construct(SessionInterface $session, LoginForm $loginForm)
    {
        $this->session   = $session;
        $this->loginForm = $loginForm;
    }

    /**
     * Show the login form
     */
    public function create()
    {
        return View::make('site.account.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        // Form Processing
        $result = $this->loginForm->save(Input::all());

        if ($result['success'])
        {
            Event::fire('user.login', array(
                'userId'  => $result['sessionData']['userId'],
                'user_id' => $result['sessionData']['login_id']
            ));

            return Sentry::getUser()->hasAccess('admin') ? Redirect::route('adminDashboard') : Redirect::route('dashboard');

        } else
        {
            Session::flash('error', $result['message']);

            return Redirect::to('login')
                ->withInput()
                ->withErrors($this->loginForm->errors());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @internal param int $id
     * @return Response
     */
    public function destroy()
    {
        $this->session->destroy();
        Event::fire('user.logout');

        return Redirect::to('/');
    }

}
