<?php
/*
 * Author: Kevin Grimley
 * Date: April 5, 2014
 * Name: view_movie.class.php
 * Description: This class defines a method "display".
 *              The method accepts a Movie object and displays the details of the movie in a table.
 */

class Album_Detail extends IndexView {

    public function display($musics) {
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
        foreach ($musics as $count => $music) {
                //$id = $id->getId();
                $song_title = $music['song_name'];
                $audio = $music['audio'];
                
                echo "<li><a href='". ABSOLUTE_PATH ."'/includes/audio/$audio>$song_title</a></li>";
            }
            $image = $musics[0]['image'];
            $album_title = $musics[0]['album_title'];
            
            echo "$image";
            echo $album_title;
        ?>
        </ul>
        </div>
        <a href="<?= base_url ?>/index">Back to album list</a>
        <?php
        //display page footer
        parent::displayFooter();
    }

//end of display method
}