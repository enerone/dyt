<?php namespace Dyt\Statuses;

class PublishStatusCommand {
    public $body;
    public $userId;

   

    function __construct($body, $userId) {

        $this->body = $body;
        $this->userId = $userId;
        
    }
}