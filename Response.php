<?php
//example class for response
class Response{
    public $success;
    public $message;
    
    public function __construct($errorCode, $success=false){
        $this->success = $success;
        if($errorCode == 404){
            $this->message = "no data";
        }
        if($errorCode == 200){
            $this->message = "all good";
        }
    }
}