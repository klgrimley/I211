<?php

/**
 * Description of music_controller
 *
 * @author Forrest
 */
class AlbumModel {

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
     * the list_albums method retrieves all albums from the database and
     * returns an array of Album objects if successful or false if failed.
     */

    public function list_albums() {
        //Construct the MySQL select statement.
        $sql = "SELECT * FROM " . $this->db->getAlbumsTable();

        //execute the query
        $query = $this->dbConnection->query($sql);

        //handle the result
        if ($query && $query->num_rows > 0) {
            //create an array to store all returned albums
            $albums = array();

            //loop through all rows in the returned recordsets
            while ($query_row = $query->fetch_assoc()) {

                //create a Music object
                $album = new Album(
                        $query_row['album_title'], $query_row['artist'], $query_row['image'], $query_row['genre']);


                //set the id for the album
                $album->setId($query_row["album_id"]);
                //add the album into the array
                $albums[] = $album;
            }
            return $albums;
        }

        return false;
    }

    public function view_album($id) {
        //the select ssql statement
        $sql = "SELECT *
FROM albums a, songs s
WHERE a.album_id = $id
AND a.album_id = s.album";

        //execute the query
        $query = $this->dbConnection->query($sql);

        if ($query && $query->num_rows > 0) {



            $musics = array();

            while ($query_row = $query->fetch_assoc()) {
                $musics[] = $query_row;
            }
//                $song = array[];
//            //create a music object
//            $music =  Album($query_row['song_name'],
//                                $query_row['album'],
//                                $query_row['artist'],
//                                $query_row['release_date'],
//                                $query_row['genre'],
//                                $query_row['image'],
//                                $query_row['description'],
//                                $query_row['audio']);
//            $musics[] = $music;
//            //set the id for the movie
//            //$song->setId($query_row["id"]);
//            }
            return $musics;
        }

        return false;
    }

}