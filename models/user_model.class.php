<?php

/**
 * Description of 
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
    
    public function view_user($id) {
        $sql = "SELECT * FROM ". $this->db->getUsersTable() ." WHERE id = $id";
        
        $query = $this->dbConnection->query($sql);
        
        if ($query && $query->num_rows > 0){
            $query_row = $query->fetch_assoc();
            $user = new User($query_row['username'], $query_row['first_name'], $query_row['last_name'], $query_row['email'], $query_row['password'], $query_row['role']);
        
            $user->setId($query_row['id']);
            
            return $user;
        }
        return false;
    }
    
    public function verify_user($username, $password) {

        if ($username && $password) {
            $sql = "SELECT id FROM " . $this->db->getUsersTable() . " WHERE username = '$username' AND password = '$password'";

            $query = $this->dbConnection->query($sql);
            
            if ($query && $query->num_rows > 0) {
                $query_row = $query->fetch_assoc();
                return $this->view_user($query_row['id']);
            } else {
                return false;
            }
        }
    }

    public function register_user() {
        
        $firstname = isset($_POST['firstname']) && ($_POST['firstname'] != "") ? $_POST['firstname'] : null;
        $lastname = isset($_POST['lastname']) && ($_POST['lastname'] != "") ? $_POST['lastname'] : null;
        $username = isset($_POST['username']) && ($_POST['username'] != "") ? $_POST['username'] : null;
        $email = isset($_POST['email']) && ($_POST['email'] != "") ? $_POST['email'] : null;
        $password = isset($_POST['password']) && ($_POST['password'] != "") ? $_POST['password'] : null;

        if ($firstname && $lastname && $username && $email && $password) {
            //$sql = "INSERT INTO " . $this->db->getUsersTable() . " (id, username, first_name, last_name, email, password, role) VALUES (NULL, '$username', '$firstname', '$lastname', '$email', '$password');";
         $sql = "INSERT INTO " . $this->db->getUsersTable() . " (id, username, first_name, last_name, email, password, role) VALUES (NULL, '$username', '$firstname', '$lastname', '$email', '$password', ' ');";
            return $this->dbConnection->query($sql);
        } else {
            return false;
        }
    }

}