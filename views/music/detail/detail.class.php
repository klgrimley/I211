<?php
/*
 * Author: Kevin Grimley
 * Date: April 5, 2014
 * Name: view_movie.class.php
 * Description: This class defines a method "display".
 *              The method accepts a Movie object and displays the details of the movie in a table.
 */

class Music_Detail extends IndexView {

    public function display($song) {
        //display page header
        parent::displayHeader("Album Details");

        //retrieve album details by calling get methods
        
        ?>

        <div id="main_header">Album Details</div>

        <!-- display album details -->
        Songs:
        <div class='song_list'>
        <ul>
        <?php
        foreach ($song as $count => $song) {
                //$id = $id->getId();
                $song_title = $song->getSongName();
                $audio = $song->getAudio();
                
                echo "<li><a href='". ABSOLUTE_PATH ."'/includes/audio/$audio>$song_title</a></li>";
            }
        ?>
        </ul>
        </div>
        <a href="<?= base_url ?>/album/index">Back to album list</a>
        <?php
        //display page footer
        parent::displayFooter();
    }

//end of display method
}