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
        
        $username = isset($_POST['username']) && ($_POST['username'] != "") ? $_POST['username'] : null;
        $password = isset($_POST['password']) && ($_POST['password'] != "") ? $_POST['password'] : null;
        
        $returningUser = $this->user_model->verify_user($username, $password);
        
        if($returningUser) {
            $view = new User_Verify();
            $view->display();
            @session_start();
            $_SESSION['role'] = $returningUser->getRole();
            $_SESSION['firstname'] = $returningUser->getFirstName();
            $_SESSION['lastname'] = $returningUser->getLastName();
        }else{
            $message = "Login failed. Please try again";
            $this->error($message);
        }
    }
    
    public function register() {
        
        if($this->user_model->register_user()) {
           $view = new User_Register();
           $view->display();
        }else{
            $message = "Registering failed. Please try again later.";
            $this->error($message);
        }
        
    }
    
    public function logout() {
        session_start();
        session_destroy();
        
        $view = new User_Logout();
        $view->display();
    }
 
}

?>