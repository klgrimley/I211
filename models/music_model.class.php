<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of music_model
 *
 * @author Forrest
 */
class MusicModel {
    //put your code here
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
     public function list_music() {
        //Construct the MySQL select statement.
        $sql = "SELECT * FROM " . $this->db->getMusicTable();

        //execute the query
        $query = $this->dbConnection->query($sql);
        
        //handle the result
        if ($query && $query->num_rows > 0) {
            //create an array to store all returned movies
            $musics = array();

            //loop through all rows in the returned recordsets
            while ($query_row = $query->fetch_assoc()) {

                //create a Music object
                $music = new Music($query_row['song_name'],
                                $query_row['album'],
                                $query_row['artist'],
                                $query_row['release_date'],
                                $query_row['genre'],
                                $query_row['image'],
                                $query_row['description'],
                                $query_row['audio']);

                //set the id for music
                $music->setId($query_row["id"]);
                //add the songs into the array
                $musics[] = $music;
            }
            return $musics;
        }

        return false;
    }

    public function view_music($id) {
        //the select sql statement
        $sql = "SELECT * FROM " . $this->db->getMusicTable() . " WHERE id='$id'";

        //execute the query
        $query = $this->dbConnection->query($sql);

        if ($query && $query->num_rows > 0) {
            $query_row = $query->fetch_assoc();

            $music = new Music($query_row['song_name'],
                                $query_row['album'],
                                $query_row['artist'],
                                $query_row['release_date'],
                                $query_row['genre'],
                                $query_row['image'],
                                $query_row['description'],
                                $query_row['audio']);

            $music->setId($query_row["id"]);

            return $music;
        }

        return false;
    }

    public function search_music($song_name) {
        //select statement
        $sql = "SELECT * FROM " . $this->db->getMusicTable() . " WHERE song_name LIKE '%" . $song_name . "%'";

        //execute the query
        $query = $this->dbConnection->query($sql);

        // the search failed, return false. 
        if (!$query)
            return false;

        //search succeeded, but no movie was found.
        if ($query->num_rows == 0)
            return 0;

        //create an array to store all the returned music
        $musics = array();

        //loop through all rows
        while ($query_row = $query->fetch_assoc()) {

            $music = new Music($query_row['song_name'],
                                $query_row['album'],
                                $query_row['artist'],
                                $query_row['release_date'],
                                $query_row['genre'],
                                $query_row['image'],
                                $query_row['description'],
                                $query_row['audio']);

            //set the id for the song
            $music->setId($query_row["id"]);
            //add the song into the array
            $musics[] = $music;
        }
        return $musics;
    }
    
    //update a music in the database
    public function update_music($id) {
        //retrieve song details

        $song_name = isset($_POST['song_name']) && ($_POST['song_name'] != "") ? $_POST['song_name'] : null;
        $album = isset($_POST['album']) && ($_POST['album'] != "") ? $_POST['album'] : null;
        $artist = isset($_POST['artist']) && ($_POST['artist'] != "") ? $_POST['artist'] : null;
        $release_date = isset($_POST['release_date']) && ($_POST['release_date'] != "") ? $_POST['release_date'] : null;
        $genre = isset($_POST['genre']) && ($_POST['genre'] != "") ? $_POST['genre'] : null;
        $image = isset($_POST['image']) && ($_POST['image'] != "") ? $_POST['image'] : null;
        $description = isset($_POST['description']) ? $_POST['description'] : null;
        $audio = isset($_POST['audio']) ? $_POST['audio'] : null;

        
        if ($song_name && $album && $artist && $release_date && $genre && $image && $audio) {
            //query string for update 
            $sql = "UPDATE " . $this->db->getMusicTable() .
                    " SET song_name='$song_name', album='$album', artist='$artist', release_date='$release_date', genre='$genre', image='$image', description='$description', audio='$audio' WHERE id='$id'";

            //execute the query
            return $this->dbConnection->query($sql);
        }
        return false;
    }
}

?>
