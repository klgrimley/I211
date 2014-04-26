<?php

/*
 * 
 *
 */

class UserController {
    
    private $user_model;
    
    public function __construct() {
        $this->user_model = new UserModel();
    }
    
    
    public function login(){
        $login = new User_Login();
        
        $login->display();
    }
    
    public function error($message) {
        //create an object of the Error class
        $error = new User_Error();

        //display the error page
        $error->display($message);
    }
    
    public function  verify() {
        
        $returningUser = $this->user_model->verify_user();
        
        if($returningUser) {
            $view = new User_Verify();
            $view->display();
        }else{
            $message = "Login failed. Please try again";
            $this->error($message);
        }
    }
    
    public function register() {
        
        $newUser = $this->user_model->register_user();
        
        if($newUser) {
            $view = new User_Register();
            $view->display();
        }else{
            $message = "Registering failed. Please try again later.";
            $this->error($message);
        }
        
    }
 
}

?>