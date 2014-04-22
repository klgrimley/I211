<?php

/**
 * Description of music_controller
 *
 * @author Forrest
 */

class MusicModel {

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

    /*
     * the list_music method retrieves all songs from the database and
     * returns an array of Music objects if successful or false if failed.
     */

    public function list_music() {
        //Construct the MySQL select statement.
        $sql = "SELECT * FROM " . $this->db->getSongsTable();

        //execute the query
        $query = $this->dbConnection->query($sql);
        
        //handle the result
        if ($query && $query->num_rows > 0) {
            //create an array to store all returned information
            $songs = array();

            //loop through all rows in the returned recordsets
            while ($query_row = $query->fetch_assoc()) {

                //create a Music object
                $song = new Music($query_row['song_name'],
                                $query_row['album'],
                                $query_row['artist'],
                                $query_row['release_date'],
                                $query_row['genre'],
                                $query_row['image'],
                                $query_row['description'],
                                $query_row['audio']);
                

                //set the id for the song
                $song->setId($query_row["id"]);
                //add the movie into the array
                $songs[] = $song;
            }
            return $songs;
        }

        return false;
    }

    /*
     * the view_music method needs serious work
     */

    public function view_music($id) {
        //the select ssql statement
        $sql = "SELECT * FROM " . $this->db->getSongsTable() . " WHERE album='$id'";

        //execute the query
        $query = $this->dbConnection->query($sql);

        if ($query && $query->num_rows > 0) {
            
            $songs = array();
            
            while ($query_row = $query->fetch_assoc()) {

            //create a music object
            $song = new Music($query_row['song_name'],
                                $query_row['album'],
                                //$query_row['artist'],
                                //$query_row['release_date'],
                                //$query_row['genre'],
                                //$query_row['image'],
                                //$query_row['description'],
                                $query_row['audio']);
            $songs[] = $song;
            //set the id for the movie
            //$song->setId($query_row["id"]);
            }
            return $songs;
        }

        return false;
    }

}