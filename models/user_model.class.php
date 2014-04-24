<?php

/**
 * Description of music_controller
 *
 * @author Forrest
 */

class UserModel {
    
    //private data members
    private $db;
    private $dbConnection;

    //the constructor. It initializes two data members.
    public function __construct() {
        $this->db = Database::getInstance();
        $this->dbConnection = $this->db->getConnection();

        //Escapes special characters in a string for use in an SQL statement. This stops SQL inject in POST vars. 
        foreach ($_POST as $key => $value) {
            $_POST[$key] = $this->dbConnection->real_escape_string($value);
        }

        //Escapes special characters in a string for use in an SQL statement. This stops SQL Injection in GET vars 
        foreach ($_GET as $key => $value) {
            $_GET[$key] = $this->dbConnection->real_escape_string($value);
        }
    }
    
    public function user_login(){
        $login = new Login_User();
        
        $login->display();
    }
    
    public function validate_user_login($username, $password) {
        $sql = "SELECT * FROM ". $this->db->getUsersTable() . " WHERE username = $username AND password = $password";
    }

}