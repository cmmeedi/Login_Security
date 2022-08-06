<?php
class security_Service{
    
    private $password = "";
    private $username = "";
    
    function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;
    }
    
    public function authenticate(){
        if($this->username == "" || $this->password == ""){
            return false;
        }
        if($this->password == 'password' && $this->username == 'username'){
            return true;
        }
        else{
            return false;
        }
    }
}