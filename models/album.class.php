<?php

class Album {
//private data members
    private $id, $album, $artist, $genre, $image;

    public function __construct($album, $artist, $image, $genre) {
        $this->album = $album;
        $this->artist = $artist;
        $this->genre = $genre;
        $this->image = $image;
    }
    
    //getter methods
    public function getId() {
        return $this->id;
    }

    public function getAlbum() {
        return $this->album;
    }

    public function getArtist() {
        return $this->artist;
    }

    public function getGenre() {
        return  $this->genre;
    }

    public function getImage() {
        return $this->image;
    }

    //set album id
    public function setId($id) {
        $this->id = $id;
    }
    }
    
?>
