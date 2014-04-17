<?php
/*
 * Author: Sarah Kurt
 * Date: 04/15/14
 * Name: index.class.php
 */

class Music_Index extends MusicIndexView {

     // display accepts an array of music objects and displays them in a table.
    

    public function display($music) {
        displayHeader("List All Music");
   

        ?>
        <div id="main_header">Music in My Library</div>

 
        <!-- 
        
            Some kind of fun introduction 
        
        -->
       

            <?php
            //insert one row into the table for each movie
            foreach ($music as $count => $music) {
                $id = $id->getId();
                $artist = $music->getArtist();
                $album = $music->getAlbum();
                $album_art = $music->getAlbumArt();
                
                //apply the class 'alt_background' for alternate rows
                echo "<div class='album'>";
                echo "<p><a href='" . base_url . "/music/detail/$id'>$album_art</a></p>";
                echo "<p>$artist</p>";
                echo "<p>$album</p>";
                echo "</div>";
            }
            
        parent::displayFooter();
        

    }
//end of display method
}