<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of music
 *
 * @author Forrest
 */
class Music {
    //put your code here
        //private data members
            private $id, $song_name, $album, $artist, $release_date, $genre, $image, $description, $audio;

    //the constructor
    public function __construct($song_name, $album, $artist, $release_date, $genre, $image, $description, $audio) {
        $this->song_name = $title;
        $this->album = $album;
        $this->artist = $artist;
        $this->release_date = $release_date;
        $this->genre = $genre;
        $this->image = $image;
        $this->description = $description;
        $this->audio = $audio;
    }

    //return the id of a song
    public function getId() {
        return $this->id;
    }

    //return the song name
    public function getSongName() {
        return $this->song_name;
    }

    //return the album of the song
    public function getAlbum() {
        return $this->rating;
    }
    
    //return the artist of the song
    public function getArtist() {
        return $this->artist;
    }

    //return the release date of a song
    public function getRelease_date() {
        return $this->release_date;
    }

    //return the genre of a song
    public function getGenre() {
        return $this->genre;
    }

   //return the image file name of a song/album 
    public function getImage() {
        return $this->image;
    }

    //return the description of a song
    public function getDescription() {
        return $this->description;
    }
    
    //return the audio of a song
    public function getAudio() {
        return $this->audio;
    }

    //set song id
    public function setId($id) {
        $this->id = $id;
    }
}

?>
