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
                        $query_row['album_title'], $query_row['artist'], $query_row['release_date'], $query_row['image'], $query_row['genre'], $query_row['description']);

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
        $sql = "SELECT * FROM albums a, songs s WHERE a.album_id = $id AND a.album_id = s.album";

        //execute the query
        $query = $this->dbConnection->query($sql);

        if ($query && $query->num_rows > 0) {
            $musics = array();

            while ($query_row = $query->fetch_assoc()) {
                $musics[] = $query_row;
            }

            return $musics;
        }

        return false;
    }

    //edit an existing album in the database.
    public function update_movie($id) {
        //retrieve album details

        $album_title = isset($_POST['album_title']) && ($_POST['album_title'] != "") ? $_POST['album_title'] : null;
        $artist = isset($_POST['artist']) && ($_POST['artist'] != "") ? $_POST['artist'] : null;
        $release_date = isset($_POST['release_date']) && ($_POST['release_date'] != "") ? $_POST['release_date'] : null;
        $genre = isset($_POST['genre']) && ($_POST['genre'] != "") ? $_POST['genre'] : null;
        $image = isset($_POST['image']) && ($_POST['image'] != "") ? $_POST['image'] : null;
        $description = isset($_POST['description']) ? $_POST['description'] : null;

        //make sure none are null
        if ($album_title && $artist && $release_date && $genre && $image) {
            //query string for update 
            $sql = "UPDATE " . $this->db->getMovieTable() .
                    " SET album_title='$album_title', artist='$artist', release_date='$release_date', genre='$genre', image='$image', description='$description' WHERE id='$id'";

            //execute the query
            return $this->dbConnection->query($sql);
        }
        return false;
    }

}