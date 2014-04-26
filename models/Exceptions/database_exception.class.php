<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of database_exception
 *
 * @author Forrest
 */
class DatabaseException extends Exception {
    public function getDetails() {
        return "Fatal Error: Database didn't connect.";
    }
}
?>
