<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of music_data_missing_exception
 *
 * @author Forrest
 */
class MusicDataMissingException extends Exception {
    public function getDetails() {
        return "Fatal Error: All fields required.";
    }
}
?>
