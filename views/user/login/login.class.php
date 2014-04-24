<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Login_User extends IndexView {

    public function display() {
        //display page header
        parent::displayHeader("Login Page");
        ?>
This is the login page
        <?php

        //display page footer
        parent::displayFooter();
    }

//end of display method
}

