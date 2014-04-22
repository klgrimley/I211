<?php

/**
 * Description of music_controller
 *
 * @author Forrest
 */

class User {

    //private data members
    private $id, $song_name, $album, $artist, $release_date, $genre, $image, $description, $audio;

    public function __construct($song_name, $album, $artist, $release_date, $genre, $image, $description, $audio) {
        $this->song_name = $song_name;
        $this->album = $album;
        $this->artist = $artist;
        $this->release_date = $release_date;
        $this->genre = $genre;
        $this->image = $image;
        $this->description = $description;
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

    public function getArtist() {
        return $this->artist;
    }

    public function getReleaseDate() {
        return $this->release_date;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function getImage() {
        return $this->image;
    }

    public function getDescription() {
        return $this->description;
    }
    
    public function getAudio() {
        return $this->audio;
    }


    //set book id
    public function setId($id) {
        $this->id = $id;
    }
    

}