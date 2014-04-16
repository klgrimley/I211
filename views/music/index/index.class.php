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

 
        <!-- display the table header -->
        <table cellspacing='0' cellpadding='3' border='0' width="100%" id="list">
            <tr>
                <th width="300" class="hilite1">Song Name</th>
                <th width="80" class="hilite1">Artist</th>
                <th width="100" class="hilite1">Album</th>
                <th width="" class="hilite1">More Information</th>
            </tr>

            <?php
            //insert one row into the table for each movie
            foreach ($music as $count => $music) {
                $song_name = $music->getSongName();
                $artist = $music->getArtist();
                $album = $music->getAlbum();
                $details = $music->getDetails();
                
                //apply the class 'alt_background' for alternate rows
                if($count%2 == 1)
                    echo "<tr class='alt_background'>";
                else
                    echo "<tr>";
                echo "<td>$song_name</td>";
                echo "<td>$artist</td>";
                echo "<td>$album</td>";
                echo "<td><a href='" . base_url . "/music/detail/$id'>More about<i> $song_name</i></a></td>";
                echo "</tr>";
            }
            ?>
            <!-- the end of the table -->
        </table>
        <?php
        parent::displayFooter();
        

    }
//end of display method
}