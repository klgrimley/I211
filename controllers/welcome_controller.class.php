<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of welcome_controller
 *
 * @author Forrest
 */
class welcomeController {
    
    public function index() {
        $view = new Welcome_Index();
        $view->display();
    }
    
}

?>
