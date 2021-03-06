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
            <div class='song_list inline'>
                <h4><?= $album_title ?></h4>
                <h5>Track Listing:</h5>

                <ol class="song_titles">
                    <?php
                    foreach ($musics as $count => $music) {
                        $song_title = $music['song_name'];
                        echo "<li>$song_title</li>";
                    }
                    ?>
                </ol>
                <a class="common_button" href="<?= base_url ?>/index">Album List</a>
                <?php if($_SESSION['role'] == 2){?>
                <a class="common_button" href="<?= base_url . "/album/edit/" . $id ?>">Edit Album</a>
                <?php } ?>
                
            </div> 
            <div class='detail_information inline'>
                <h4>About the Band:</h4>
                <p><?= $description ?></p>
            </div>
            <div class="middle inline" >
                <img class="album_cover" src="<?= base_url ?>/includes/album_art/<?= $image ?>" />
                
                <div class="player">
                    <div class="pl"></div>
                    <div class="title"></div>
                    <div class="artist"></div>
                    <div class="cover"></div>
                    <div class="controls">
                        <div class="play"></div>
                        <div class="pause"></div>
                        <div class="rew"></div>
                        <div class="fwd"></div>
                    </div>
                    <div class="volume"></div>
                    <div class="tracker"></div>
                </div>
                <ul class="playlist hidden">
                    <?php
                    foreach ($musics as $count => $music) {
                        $song_title = $music['song_name'];
                        $audio = $music['audio'];

                        echo "<li audiourl='" . ABSOLUTE_PATH . "/includes/audio/$audio' artist='$artist'>$song_title</li>";
                    }
                    ?>
                </ul>

            </div>
            
             
            
        </div>
        <?php
        //display page footer
        parent::displayFooter();
    }

//end of display method
}