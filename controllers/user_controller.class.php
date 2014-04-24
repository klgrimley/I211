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
    
    public function login() {
        $user = $this->user_model->user_login();

        //display login page
        if ($user) {
            $view = new Login_User();
            $view->display();
        } else {
            //display an error
            $message = "There was a problem displaying the Login Page.";
            $this->error($message);
        }
    }

 
}

?>