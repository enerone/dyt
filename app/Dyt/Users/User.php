<?php namespace Dyt\Users;

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;
use Eloquent,Hash;
use Dyt\Registration\Events\UserRegistered;
use Laracasts\Commander\Events\EventGenerator;
use Laracasts\Presenter\PresentableTrait;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait, EventGenerator, PresentableTrait, FollowableTrait;
	//use EventGenerator;

	protected $fillable = ['username', 'email', 'password', 'nivel_usuario'];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

    /**
     * Path to presenter for a user
     * @var string
     */
    protected $presenter = 'Dyt\Users\UserPresenter';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function setPasswordAttribute($password) {
		$this->attributes['password'] = Hash::make($password);
	}

	public function statuses(){
		return $this->hasMany('Dyt\Statuses\Status')->latest();
	}

	/**
	 * Register a new user
	 * @param  $username
	 * @param  $email
	 * @param  $password
	 * @return static
	 */
	public static function register($username, $email, $password, $nivel_usuario)
    {
		$user = new static (compact('username', 'email', 'password', 'nivel_usuario'));

		$user->raise(new UserRegistered($user));
		return $user;
	}

    /**
     * Verifies current user
     * @param $user
     */
    public function is($user)
    {
        if(is_null($user)) return false;
        return $this->username == $user->username;
    }


    public function comments()
    {
        return $this->hasMany('Dyt\Statuses\Comment');
    }


}
