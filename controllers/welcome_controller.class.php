<?php

/**
 * Description of welcom_controller
 *
 * @author Forrest
 */
class WelcomeController {
    //put your code here
    public function index() {
        $view = new Welcome_Index();
        $view->display();
    }
}

?>