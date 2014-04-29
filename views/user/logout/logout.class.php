<?php

class User_Logout extends IndexView {
    
    public function display() {
        //display header
        parent::displayHeader("Login Success");
        ?>
<h1>You are now logged out.</h1>
<?php
        
        parent::displayFooter();
    }
}

?>
