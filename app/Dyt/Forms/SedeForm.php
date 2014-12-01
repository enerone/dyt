<?php namespace Dyt\Forms;

use Laracasts\Validation\FormValidator;

class SedeForm extends FormValidator{
    /**
     * validation rules for registration form
     * @var arr
     */
    protected $rules = [
        'nombre_sede' => 'required|unique:sedes'


    ];
}