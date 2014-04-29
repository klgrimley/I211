<?php

/**
 * Description of database
 *
 * @author Kevin Grimley
 */

class Database {

    //define database parameters
    private $param = array(
        'host' => 'localhost',
        'login' => 'phpuser',
        'password' => 'phpuser',
        'database' => 'musictime',
        'tblSongs' => 'songs',
        'tblAlbums' => 'albums',
        'tblUsers' => 'users'
    );
    //define the database connection object
    private $objDBConnection = NULL;
    static private $_instance = NULL;

    //constructor
    private function __construct() {
 try {
            $this->objDBConnection = @new mysqli(
                            $this->param['host'],
                            $this->param['login'],
                            $this->param['password'],
                            $this->param['database']
            );
            if (mysqli_connect_errno() != 0) {
                $errmsg = "Connecting database failed: " . mysqli_connect_error();
                throw new DatabaseException($errmsg);
            }
        } catch (DatabaseException $e) {
            $error = new Album_Error();
            $error->display($e->getMessage());
            exit;
        }
    }
    
    //static method to ensure there is just one Database instance
    static public function getInstance() {
        if (self::$_instance == NULL)
            self::$_instance = new Database();
        return self::$_instance;
    }

    //this function returns the database connection object
    public function getConnection() {
        try{
        return $this->objDBConnection;
        if (mysqli_connect_errno() != 0) {
                $errmsg = "Connecting database failed: " . mysqli_connect_error();
                throw new DatabaseException($errmsg);
            }
        } catch (DatabaseException $e) {
            $error = new Error();
            $error->display($e->getMessage());
            exit;
        }
    }
    
    //returns the name of the table that stores albums
    public function getAlbumsTable() {
        return $this->param['tblAlbums'];
    }

    //returns the name of the table that stores music
    public function getSongsTable() {
        return $this->param['tblSongs'];
    }

    //returns the name of the table that stores users
    public function getUsersTable() {
        return $this->param['tblUsers'];
    }

    

}

?>
