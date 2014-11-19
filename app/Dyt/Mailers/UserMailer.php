<?php namespace Dyt;

use Dyt\Users\User;

class UserMailer extends Mailer {
    public function sendWelcomeMessageTo(User $user)
    {
        $subject = 'Welcome to Larabopok';
        $view = 'emails.registration.confirm';


       return $this->sendTo($user, $subject, $view);
    }
} 