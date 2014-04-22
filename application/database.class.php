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
        'tblUser' => 'users'
    );
    //define the database connection object
    private $objDBConnection = NULL;
    static private $_instance = NULL;

    //constructor
    private function __construct() {
        $this->objDBConnection = @new mysqli(
                        $this->param['host'],
                        $this->param['login'],
                        $this->param['password'],
                        $this->param['database']
        );
        if (mysqli_connect_errno() != 0) {
            $errno = mysqli_connect_errno();
            $errmsg = mysqli_connect_error();
            die("Connecting database failed: ($errno) $errmsg <br/>\n");
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
        return $this->objDBConnection;
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
    public function getUserTable() {
        return $this->param['tblUser'];
    }

    

}

?>
