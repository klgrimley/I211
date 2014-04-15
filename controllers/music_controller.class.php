<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of music_controller
 *
 * @author Forrest
 */
class MusicController {
    //put your code here
private $music_model;

    //default constructor
    public function __construct() {
        //create an instance of the MovieModel class
        $this->music_model = new MusicModel();
    }

    //index action that displays all songs
    public function index() {
        //retrieve all songs and store them in an array
        $musics = $this->music_model->list_music();

        //disply all songs
        if ($musics) {
            $view = new Music_Index();
            $view->display($musics);
        } else {
            //display an error
            $message = "There was a problem displaying your songs.";
            $this->error($message);
        }
    }

    //show details of a song
    public function detail($id) {
        //retrieve the user specified song
        $music = $this->music_model->view_music($id);
        
        //display song details
        if ($music) {
            //display song details
            $view = new Music_Detail();
            $view->display($music);
        } else {
            //display an error
            $message = "There was a problem displaying your requested music. The song id '" . $id . "' does not exist in our database.";
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

    
    //diplay a song in a form for editing
    public function edit($id) {
        //retrieve the moderator specified music
        $music = $this->music_model->view_music($id);
        
        //display song details in a form
        if ($music) {
            $view = new Music_Edit();
            $view->display($music);
        } else {
            //display an error
            $message = "There was a problem editing the selected music. The song id '" . $id . "' does not exist in our database.";
            $this->error($message);
        }
    }

    //update song in the database
    public function update($id) {
        //call the updateMusic method to update
        if ($this->music_model->update_music($id)) {
            //display the update details
            $view = new Music_Update();
            $view->display($id);
        } else {
            //display an error
            $message = "There was a problem updating the selected music. The song id '" . $id . "' does not exist in our database.";
            $this->error($message);
        }
    }
    
    
    //search song database
    public function search($song_name) {
        //retrieve song name from text
        if (isset($_GET['song_name']))
            $song_name = trim($_GET['song_name']);

        //retrieve all songs and store them in an array
        if (($query = $this->music_model->search_music($song_name)) >= 0) {
            //search succeeded, now display
            $view = new Music_Search();
            $view->display($query);
        } else {
            //return value is false. seach failed.
            $message = "There was a problem searching the database.";
            $this->error($message);
        }
    }

    //autosuggestion
    public function suggest($song_name) {
        //search the database for matched songs.
        $musics = $this->music_model->search_music($song_name);

        // Set the XML header
        header('Content-Type: text/xml');
        echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';

        // create the <song_names> element
        $output = '<song_names>';

        // if there are songs returned, loop through them and add them to the output
        if ($musics) {
            foreach ($musics as $music)
                $output .= '<song_name>' . $music->getSongName() . '</song_name>';
        }

        $output .= '</aong_name>';

        echo $output;
    }

    //handle calling inaccessible methods
    public function __call($name, $arguments) {
        //$message = "Route does not exist.";
        // Note: value of $name is case sensitive.
        $message = "Calling method '$name' caused errors. Route does not exist.";

        $this->error($message);
    }
}
?>
