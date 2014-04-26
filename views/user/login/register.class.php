<?php

class User_Register extends IndexView {
    
    public function display() {
        //display header
        parent::displayHeader("Login Success");
        ?>
<h1>You have successfully created an account.</h1>
<?php
        parent::displayFooter();
    }
}

?>
