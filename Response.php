<?php
//example class for response
class Response{
    public $success;
    public $message;
    
    public function __construct($message, $success=false){
        $this->message = $message;
        $this->success = $success;
    }
}