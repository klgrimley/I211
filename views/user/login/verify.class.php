<?php

class User_Verify extends IndexView {
    
    public function display() {
        //display header
        parent::displayHeader("Login Success");
        ?>
<h1>You are now logged in.</h1>

<?php
header("Location:". base_url);
        echo $_SESSION['firstname'] ." ". $_SESSION['lastname'];
        parent::displayFooter();
    }
}

?>
