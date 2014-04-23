<?php

class SongController {
    
    private $song_model;
    
    public function __construct() {
        $this->song_model = new SongModel();
    }
    
     //search movies
    public function search($song_name) {
        //retrieve title from a textbox named "song"
        if (isset($_GET['song']))
            $song_name = trim($_GET['song']);

        //retrieve all movies and store them in an array
        if (($query = $this->song_model->search_songs($song_name)) >= 0) {
            //search succeeded, display movies found
            $view = new Song_Search();
            $view->display($query);
        } else {
            //return value is false. seach failed.
            $message = "There was a problem searching the database.";
            $this->error($message);
        }
    }

    //autosuggestion
    public function suggest($song_name) {
        //search the database for matched movies.
        $songs = $this->song_model->search_songs($song_name);

        // Set the XML header
        header('Content-Type: text/xml');
        echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';

        // create the <titles> element
        $output = '<titles>';

        // if there are movies returned, loop through them and add them to the output
        if ($songs) {
            foreach ($songs as $song)
                $output .= '<title>' . $song->getSongName() . '</title>';
        }

        $output .= '</titles>';

        echo $output;
    }

//    //handle an error
//    public function error($message) {
//        //create an object of the Error class
//        $error = new Movie_Error();
//
//        //display the error page
//        $error->display($message);
//    }
//    
//    //handle calling inaccessible methods
//    public function __call($name, $arguments) {
//        //$message = "Route does not exist.";
//        // Note: value of $name is case sensitive.
//        $message = "Calling method '$name' caused errors. Route does not exist.";
//
//        $this->error($message);
//    }
}
?>
