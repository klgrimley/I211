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
        <div class="detail_wraper">
            <?php
            $id = $musics[0]['album_id'];
            $artist = $musics[0]['artist'];
            $description = $musics[0]['description'];
            $album_title = $musics[0]['album_title'];
            $image = $musics[0]['image'];
            echo "<h3>$artist</h3>";
            ?>
            <div class='detail_information' style='float: right;'>
                <h4>About the Band:</h4>
                <p><?= $description ?></p>
            </div>
            <img class="album_cover" src="<?= base_url ?>/includes/album_art/<?= $image ?>" style="float: right;" />

            <div class='song_list'>
                <h4><?= $album_title ?></h4>
                <h5>Track Listing:</h5>
                
                    <ol class="song_titles">
                        <?php
                        foreach ($musics as $count => $music) {

                            $song_title = $music['song_name'];
                            $audio = $music['audio'];

                            echo "<li>$song_title</li><br><audio src='" . ABSOLUTE_PATH . "/includes/audio/$audio' type='audio/mpeg' preload='auto' controls></audio><br><br>";
                        }
                        ?>
                    </ol>
                




                <a class="common_button" href="<?= base_url . "/album/edit/" . $id ?>">Edit Album</a>
                <a class="common_button" href="<?= base_url ?>/index">Album List</a>
            </div> 
        </div>
        <?php
        //display page footer
        parent::displayFooter();
    }

//end of display method
}