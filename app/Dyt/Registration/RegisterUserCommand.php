<?php namespace Dyt\Registration;

class RegisterUserCommand {
	public $username;
	public $email;
	public $password;
    private $nivel_usuario;

    function __construct($username, $email, $password, $nivel_usuario) {

		$this->username = $username;
		$this->email = $email;
		$this->password = $password;
        $this->nivel_usuario = $nivel_usuario;
    }
}