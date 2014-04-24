<?php

class Album {
//private data members
    private $id, $album, $artist, $release_date, $genre, $image, $description;

    public function __construct($album, $artist, $release_date, $image, $genre, $description) {
        $this->album = $album;
        $this->artist = $artist;
        $this->release_date = $release_date;
        $this->genre = $genre;
        $this->image = $image;
        $this->description = $description;
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
    
    public function getRelease_date() {
        return $this->release_date;
    }

    public function getDescription() {
        return $this->description;
    }
    
    //set album id
    public function setId($id) {
        $this->id = $id;
    }
    }
    
?>
