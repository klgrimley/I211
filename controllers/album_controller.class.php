<?php

/**
 * Description of welcom_controller
 *
 * @author Forrest
 */
class AlbumController {
    
    private $album_model;
    
    public function __construct() {
        //create an instance of the MusicModel class
        $this->album_model = new AlbumModel();
    }
    
    
    public function index() {
        $album = $this->album_model->list_albums();

        //disply all movies
        if ($album) {
            $view = new Album_Index();
            $view->display($album);
        } else {
            //display an error
            $message = "There was a problem displaying music.";
            $this->error($message);
        }
    }
    
    public function search() {
        
    }
    
    //show details of a album
    public function detail($id) {
        //retrieve the specific album
        $musics = $this->album_model->view_album($id);
        
        //display movie details
        if ($musics) {
            //display movie details
            $view = new Album_Detail();
            $view->display($musics);
        } else {
            //display an error
            $message = "There was a problem displaying the music. The music id '" . $id . "' does not exist in the database.";
            $this->error($message);
        }
    }
    
    //handle an error
    public function error($message) {
        //create an object of the Error class
        $error = new Album_Error();

        //display the error page
        $error->display($message);
    }
    
    public function edit($id) {
        //retrieve the specific album
        $album = $this->album_model->view_album($id);
        //display album details in a form to be modified
        if ($album) {
            $view = new Album_Edit();
            $view->display($album);
        } else {
            //display an error
            $message = "We couldn't get this album because there is no album with the id of '" . $id . ".";
            $this->error($message);
        }
    }
    
    //update an album in the database
    public function update($id) {
        //call the updateAlbum method to update the movie
        if ($this->album_model->update_album($id)) {
            //display the update details
            $view = new Album_Update();
            $view->display($id);
        } else {
            //display an error
            $message = "There was a problem updating the album. The album id '" . $id . "' assoctiated with the album does not exist in the database.";
            $this->error($message);
        }
    }
    
    
}

?>