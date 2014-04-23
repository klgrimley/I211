<?php
/*
 * Author: Sarah Kurt
 * Date: 04/15/14
 * Name: index.class.php
 */

class Album_Index extends IndexView {

     // display accepts an array of music objects and displays them in a table.
    

    public function display($album) {
        parent::displayHeader("Listen UP | Home");
   

        ?>
<div class="content_wraper">
        <h2 id="main_header">Albums That Are Current Available</h2>

 
        <!-- 
        
            Some kind of fun introduction 
        
        -->
       

            <?php
            //insert a new song for each record
            foreach ($album as $count => $album) {
                $id = $album->getId();
                $artist = $album->getArtist();
                $album_title = $album->getAlbum();
                $album_art = $album->getImage();
                $genre = $album->getGenre();
                
                echo "<div class='album'>";
                echo "<p><a href='" . base_url . "/album/detail/$id'><img src='" . base_url . "/includes/album_art/$album_art' /></a></p>";
                echo "<h3 class='albums_page'>Band Name:</h3>$artist";
                echo "<h3 class='albums_page'>Album:</h3>$album_title";
                echo "<h3 class='albums_page'>Genre:</h3>$genre";
                echo "</div>";
            }
            ?>
</div>
           <?php
        parent::displayFooter();
        

    }
//end of display method
}
?>