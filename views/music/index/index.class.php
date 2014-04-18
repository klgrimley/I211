<?php
/*
 * Author: Sarah Kurt
 * Date: 04/15/14
 * Name: index.class.php
 */

class Music_Index extends MusicIndexView {

     // display accepts an array of music objects and displays them in a table.
    

    public function display($music) {
        parent::displayHeader("List All Music");
   

        ?>
        <h2 id="main_header">Fun Stuff To Listen To</h2>

 
        <!-- 
        
            Some kind of fun introduction 
        
        -->
       

            <?php
            //insert one row into the table for each movie
            foreach ($music as $count => $music) {
                //$id = $id->getId();
                $artist = $music->getArtist();
                $album = $music->getAlbum();
                $album_art = $music->getImage();
                $song = $music->getSongName();
                
                //apply the class 'alt_background' for alternate rows
                echo "<div class='album'>";
                echo "<p><img src='" . base_url . "/includes/album_art/$album_art' /></p>";
                echo "<p>Band Name: $artist</p>";
                echo "<p>Album: $album</p>";
                echo "<p>Track Title: $song</p>";
                echo "</div>";
            }
            
        parent::displayFooter();
        

    }
//end of display method
}
?>