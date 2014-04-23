<?php

/**
 * Description of music_controller
 *
 * @author Forrest
 */

class Music {

    //private data members
    private $id, $song_name, $album, $audio;

    public function __construct($song_name, $album, $audio) {
        $this->song_name = $song_name;
        $this->album = $album;
        $this->audio = $audio;
    }
    
    //getter methods
    public function getId() {
        return $this->id;
    }
    
    public function getSongName() {
        return $this->song_name;
    }

    public function getAlbum() {
        return $this->album;
    }

    public function getAudio() {
        return $this->audio;
    }


    //set book id
    public function setId($id) {
        $this->id = $id;
    }
    

}