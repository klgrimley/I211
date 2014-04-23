<?php

/**
 * Description of music_controller
 *
 * @author Forrest
 */

class MusicController {

    private $music_model;

    //default constructor
    public function __construct() {
        //create an instance of the MusicModel class
        $this->music_model = new MusicModel();
    }

    //index action that displays all songs
    public function index() {
        //retrieve all songs and store them in an array
        $music = $this->music_model->list_music();

        //disply all movies
        if ($music) {
            $view = new Music_Index();
            $view->display($music);
        } else {
            //display an error
            $message = "There was a problem displaying music.";
            $this->error($message);
        }
    }

    //show details of a album
    public function detail($id) {
        //retrieve the specific album
        $musics = $this->music_model->view_music($id);
        
        //display movie details
        if ($musics) {
            //display movie details
            $view = new Music_Detail();
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
        $error = new Music_Error();

        //display the error page
        $error->display($message);
    }

    //handle calling inaccessible methods
    public function __call($name, $arguments) {
        //$message = "Route does not exist.";
        // Note: value of $name is case sensitive.
        $message = "Calling method '$name' caused errors. Route does not exist.";

        $this->error($message);
    }

}