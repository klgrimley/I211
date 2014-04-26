<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class User_Login extends IndexView {

    public function display() {
        //display page header
        parent::displayHeader("Login Page");
        ?>
<div class="content_wraper">
    <div class="left_column">
        <h3>Login</h3>
        <form action='<?= base_url . "/user/verify/" ?>' method="post">
            <label for="username">Username:</label>
            <input name="username" id="username">
            <label for="password">Password:</label>
            <input name="password" id="password">
            <input class="login_button" type="submit" value="Submit" />
            <input class="login_button" type="reset" value="Reset" name="reset" />
        </form>
    </div>
    <div class="right_column">
        <h3>Register</h3>
        <form action='<?= base_url . "/user/register" ?>' method="post">
            <label for="firstname">Firstname:</label>
            <input name="firstname" id="firstname">
            <label for="lastname">Lastname:</label>
            <input name="lastname" id="lastname">
            <label for="username">Username:</label>
            <input name="username" id="username">
            <label for="email">Email:</label>
            <input name="email" id="email">
            <label for="password">Password:</label>
            <input name="password" id="password">
            <label for="confirm_password">Confirm Password:</label>
            <input name="confirm_password" id="confirm_password">
            <input class="login_button" type="submit" value="Submit" />
            <input class="login_button" type="reset" value="Reset" name="reset" />
        </form>
    </div>
</div>
        <?php

        //display page footer
        parent::displayFooter();
    }

//end of display method
}

