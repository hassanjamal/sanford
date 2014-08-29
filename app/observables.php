<?php

// User Login event
Event::listen('user.login', function($userId, $email)
{
    Session::put('userId', $userId);
    Session::put('user_id', $user_id);
});

// User logout event
Event::listen('user.logout', function()
{
	Session::flush();
});

// Subscribe to User Mailer events
// Event::subscribe('Authority\Mailers\UserMailer');