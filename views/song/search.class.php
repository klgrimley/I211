<?php


class Song_Search extends IndexView {

    public function display($query) {
        //display page header
        parent::displayHeader("List of Found Songs");
        ?>
        <div id="main_header">Songs that we have</div>

        <!-- display the table header -->
        
            <?php
            if ($query == 0) {
                echo "<h3>No songs were found.</h3>";
            } else {
                //insert one row into the table for each movie
                foreach ($query as $song) {
                    $id = $song->getId();
                    $song_name = $song->getSongName();
                    $album_id = $song->getAlbum();
                    $audio = $song->getAudio();

                    
                    echo "<p>$song_name</p>";
                    echo "<p>$id</p>";
                    echo "<p>$audio</p>";
                    echo "<p><a href='" . base_url . "/album/detail/$album_id'>More about<i> $album_id</i></a></p>";
                   
                }
            }
            ?> 
        </table> <!-- the end of the table -->

        <a href="<?= base_url ?>/index">This needs to be a button</a>
        <?php
        //display page footer
        parent::displayFooter();
    }
}