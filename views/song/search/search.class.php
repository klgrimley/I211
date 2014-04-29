<?php


class Song_Search extends IndexView {

    public function display($query) {
        //display page header
        parent::displayHeader("List of Found Songs");
        ?>
<div class="content_wraper"</div>
        <div id="main_header"><h3>Songs that we have that match your search</h3></div>

        <!-- display the table header -->
        
            <?php
            if ($query == 0) {
                echo "<h3>No songs were found.</h3>";
            } else {
                //insert one row into the table for each movie
                foreach ($query as $song) {
                    $song_name = $song->getSongName();
                    $album_id = $song->getAlbum();
                    echo "<div class='song_bounce'";
                    echo "<p>$song_name</p>";
                    echo "<p><a href='" . base_url . "/album/detail/$album_id'>Take me to the Album!</a></p>";
                    echo '</div>';
                }
            }
            ?> 
        <br><br><br>
        <a class="common_button" href="<?= base_url ?>/index">Album List</a>
        <br><br><br><br>
</div>
        <?php
        //display page footer
        parent::displayFooter();
    }
}