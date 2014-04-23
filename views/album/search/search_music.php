<?php

 /*
 * Name: Sarah Kurt
 */
class SearchMusic extends IndexView {
     /*
     * Searches music and displays results in a table
     */
    private $search;
    private $suggest;


    public function getSearch() {
   
        //retrieve name from the querystring variable
if(isset($_GET['name'])) {
    $name = $_GET['name'];
    
    //search the database for music
   // $movie_manager = new MovieManager();
    //$movies = $movie_manager->search_movie($title);
    
    //display matched music
    $search = new SearchMusic();
    $search->display($musics);
}
    }
    
    public function getSuggest() {
    $name = $_GET['name'];

//$movie_manager = new MovieManager();
//$movies = $movie_manager->search_movie($title);

echo '<?xml version="1.0" encoding="UTF-8"?>';

$output = '<names>';

if($musics) {
    foreach ($musics as $music)
        $output .= '<title' . $music->getName() . '</title>';
}

$output .= '</titles>';

echo $output;
}
}
        ?>


        <div id="main_header">Music in My Library</div>
        <table cellspacing='0' cellpadding='3' border='0' width="100%" id="list">
            <tr>
                <th width="300">Name</th>
                <th width="80">| Artist</th>
                <th width="100">| Album</th>
                <th width="">| More Info</th>
            </tr>
            <?php
            if (!$music) {
                echo "<tr><td colspan='4' style='height: 200px; vertical-align: top'>No music was found.</td></tr>";
              
            } else {
                //insert one row into the table for each music
                foreach ($musics as $music) {
                    $id = $music->getId();
                    $name = $music->getName();
                    $artist = $music->getArtist();
                    $album = $music->getAlbum();

                    echo "<tr>";
                    echo "<td>$name</td>";
                    echo "<td>$artist</td>";
                    echo "<td>$album</td>";
                    echo "</tr>";
                }
            }
            ?> 
        </table> <!-- the end of the table -->

        <a href="index.php">Back to music library</a>
        
