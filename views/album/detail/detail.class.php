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
            $artist = $musics[0]['artist'];
            $description = $musics[0]['description'];
            $album_title = $musics[0]['album_title'];
            $image = $musics[0]['image'];
            echo "<h3>$artist</h3>";
            ?>
            <div class='song_list' style='float: right;'>
                <h4><?= $album_title ?></h4>
                <h5>Track Listing:</h5>
                <ol>
                    <?php
                    foreach ($musics as $count => $music) {
                        //$id = $id->getId();
                        $song_title = $music['song_name'];
                        $audio = $music['audio'];

                        echo "<li><a href='" . ABSOLUTE_PATH . "'/includes/audio/$audio>$song_title</a></li>";
                    }
                    ?>
                </ol>
            </div>
            <img class="album_cover" src="<?= base_url ?>/includes/album_art/<?= $image ?>" style="float: right;" />
            <div class='detail_information'>
                <h4>About the Band:</h4>
                <p><?= $description ?></p>
            </div>

            <!-- display album details -->


            <a href="<?= base_url ?>/index">Back to album list</a>
        </div>
        <?php
        //display page footer
        parent::displayFooter();
    }

//end of display method
}