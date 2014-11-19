<?php namespace Dyt\Forms;
use Laracasts\Validation\FormValidator;
class PublishStatusForm extends FormValidator {
    protected $rules = array(
        'body' => 'required'
    );
}