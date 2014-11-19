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
    //protected $presenter = 'Dyt\Users\UserPresenter';


    /**
     * @param $nombre_sede
     * @param $localidad
     * @param $provincia
     * @param $responsable_sede
     * @param $email_responsable_sede
     * @param $telefono_responsable_sede
     * @return static
     */
    public static function register($nombre_sede, $localidad, $provincia, $responsable_sede, $email_responsable_sede, $telefono_responsable_sede)
    {
        $sede = new static (compact('nombre_sede', 'localidad', 'provincia', 'responsable_sede', 'email_responsable_sede','telefono_responsable_sede'));

        //$user->raise(new UserRegistered($user));
        return $sede;
    }








}
