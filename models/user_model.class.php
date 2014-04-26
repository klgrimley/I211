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
    
    
    public function verify_user() {

        $username = isset($_POST['username']) && ($_POST['username'] != "") ? $_POST['username'] : null;
        $password = isset($_POST['password']) && ($_POST['password'] != "") ? $_POST['password'] : null;

        if ($username && $password) {
            $sql = "SELECT * FROM " . $this->db->getUsersTable() . " WHERE username = $username AND password = $password";

            //excute query
            $result = @$conn->query($sql);
            if ($result->num_rows) {
                //valid user store user in session variables
                session_start();
                $_SESSION['login'] = $username;
                $result_row = $result->fetch_assoc();
                $_SESSION['role'] = $result_row['role'];
                $_SESSION['name'] = $result_row['first_name'] . " " . $result_row['last_name'];
                //update status
                $login_status = 1;
                return $this->dbConnection->query($sql);
            } else {
                return false;
            }
        }
    }

    public function register_user() {
        
        $firstname = isset($_POST['firstname']) && ($_POST['firstname'] != "") ? $_POST['firstname'] : null;
        $lastname = isset($_POST['lastname']) && ($_POST['lastname'] != "") ? $_POST['lastname'] : null;
        $username = isset($_POST['username']) && ($_POST['username'] != "") ? $_POST['username'] : null;
        $email = isset($_POST['$email']) && ($_POST['$email'] != "") ? $_POST['$email'] : null;
        $password = isset($_POST['password']) && ($_POST['password'] != "") ? $_POST['password'] : null;

        if ($firstname && $lastname && $username && $email && $password) {
            $sql = "INSERT INTO " . $this->db->getUsersTable() . "  VALUES (NULL '$username', '$firstname', '$lastname', '$email', '$password' '')";

            return $this->dbConnection->query($sql);
        } else {
            return false;
        }
    }

}