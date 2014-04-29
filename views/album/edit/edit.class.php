<?php

class Album_Edit extends IndexView {

    public function display($albums) {
        //display page header
        parent::displayHeader("Listen UP | Edit Album");

        //retrieve movie details by calling get methods
        $id = $albums[0]['album_id'];
            $artist = $albums[0]['artist'];
            $description = $albums[0]['description'];
            $album_title = $albums[0]['album_title'];
            $image = $albums[0]['image'];
            $release_date = $albums[0]['release_date'];
            $genre = $albums[0]['genre'];
        ?>
<div class="content_wraper">
        <div id="main_header">Edit Movie Details</div>
        
<img src="<?= base_url ?>/includes/album_art/<?= $image ?>" />

        <!-- display album details in a form -->
        <form action='<?= base_url . "/album/update/" . $id ?>' method="post">
            <div class="left_column">
                <label for="album_title">Title:</label>
                <input name="album_title" id="album_title" value="<?= $album_title ?>">
                <label for="artist">Artist:</label>
                <input name="artist" id="artist" value="<?= $artist ?>">
                <label for="release_date">Release Date:</label>
                <input name="release_date" id="release_date" value="<?= $release_date ?>">
                <label for="genre">Genre:</label>
                <input name="genre" id="genre" value="<?= $genre ?>">
                <label for="image">Image:</label>
                <input name="image" id="image" value="<?= $image ?>">
                <label for="description">Description:</label>
                <textarea name="description" id="description" rows="6" cols="60"><?= $description ?></textarea>
                <input class="admin_button" type="submit" value="Submit" />
                <input class="admin_button" type="button" value="Cancel" onclick='window.location.href = "<?= base_url . "/album/detail/" . $id ?>"' />
            </div>
<!--            <div class="right_column">
                
                        <?php
                        foreach ($albums as $count => $album) {
                            $song_title = $album['song_name'];
                            echo "<label for='$count'>Song Name:</label>";
                            echo "<input name='$count' id='$count' value='$song_title'>";
                            $audio_file = $album['audio'];
                            echo "<label for='$count'>Audio File:</label>";
                            echo "<input name='$count' id='$count' value='$audio_file'><br>";
                        }
                        ?>
            </div>-->
            
           
            </div>
        </form>
        <?php
        //display page footer
        parent::displayFooter();
    }

//end of display method
}

