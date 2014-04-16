<?php
 /*
 * Author: Sarah Kurt
 * Date: 04/15/14
 * Name: search.class.php
 */

class Music_Search extends MusicIndexView {
  
    public function display($query) {
        //display page header
        displayHeader("List All Music");
        ?>
        <div id="main_header">Music in My Library</div>

        <!-- display the table header -->
        <table cellspacing='0' cellpadding='3' border='0' width="100%" id="list">
            <tr>
                <th>Song Name</th>
                <th>| Artist</th>
                <th>| Album</th>
                <th>| More Information</th>
            </tr>
            <?php
            if ($query == 0) {
                echo "<tr><td colspan='4' style='height: 200px; vertical-align: top'>No music was found.</td></tr>";
            } else {
                //insert one row into the table 
                foreach ($query as $music) {
                    $id = $music->getId();
                    $song_name = $music->getSongName();
                    $artist = $music->getArtist();
                    $album = $music->getAlbum();

                    echo "<tr>";
                    echo "<td>$song_name</td>";
                    echo "<td>$artist</td>";
                    echo "<td>$album</td>";
                    echo "<td><a href='" . base_url . "/music/detail/$id'>More about<i> $song_name</i></a></td>";
                    echo "</tr>";
                }
            }
            ?> 
        </table> <!-- the end of the table -->

      <?//  <a href="<?= base_url ?>/music/index">Back to music list</a>
        <?php
        //display page footer
        parent::displayFooter();
    }

//end of display method
}