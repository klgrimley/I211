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
    
    
}

?>