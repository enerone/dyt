<?php namespace Dyt\Forms;

use Laracasts\Validation\FormValidator;

class SignInForm extends FormValidator {
	/**
	 * validation rules for registration form
	 * @var arr
	 */
	protected $rules = [
		'email' => 'required',
		'password' => 'required'

	];
}