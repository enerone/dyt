<?php namespace Dyt\Statuses;



use Dyt\Statuses\Events\StatusWasPublished;
use Laracasts\Commander\Events\EventGenerator;
use Laracasts\Presenter\PresentableTrait;

class Status extends \Eloquent {

    use EventGenerator, PresentableTrait;

    protected $fillable=['body'];
    protected $presenter = 'Dyt\Statuses\StatusPresenter';

    public function user(){
        return $this->belongsTo('Dyt\Users\User');
    }
    
    /**
     * publish a new status
     * 
     * @param  $body 
     * @return static
     */
    public static function publish($body)
    {
            $status = new static(compact('body'));
            $status->raise(new StatusWasPublished($body));

            return $status;
    }

    public function comments()
    {
        return $this->hasMany('Dyt\Statuses\Comment');
    }
}