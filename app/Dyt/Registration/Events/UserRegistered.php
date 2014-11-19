<?php namespace Dyt\Registration\Events;

use Dyt\Users\User;

class UserRegistered {

	public $user;

	function __construct(User $user) {
		$this->user = $user;
	}

}