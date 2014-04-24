<?php

class Album_Edit extends IndexView {

    public function display($album) {
        //display page header
        parent::displayHeader("Listen UP | Edit Album");

        //retrieve movie details by calling get methods
        $id = $album->getId();
        $album_title = $album->getAlbum();
        $artist = $album->getArtist();
        $release_date = $album->getRelease_date();
        $genre = $album->getGenre();
        $image = $album->getImage();
        $description = $album->getDescription();
        ?>

        <div id="main_header">Edit Movie Details</div>

        <!-- display album details in a form -->
        <form action='<?= base_url . "/movie/update/" . $id ?>' method="post">
            <img src="<?= base_url ?>/includes/images/<?= $image ?>" alt="<?= $album_title ?>" title="<?= $album_title ?>" width="220" />
            <label class="form_label" for="title">Title:</label>
            <input class="form_input" name="title" size="40" value="<?= $album_title ?>">
            <label class="form_label" for="artist">Artist:</label>
            <input class="form_input" name="artist" size="40" value="<?= $artist ?>">
            <label class="form_label" for="release_date">Release Date:</label>
            <input class="form_input" name="release_date" value="<?= $release_date ?>">
            <label class="form_label" for="genre">Genre:</label>
            <input class="form_input" name="genre" value="<?= $genre ?>">
            <label class="form_label" for="image">Image:</label>
            <input class="form_input" name="image" value="<?= $image ?>">
            <label class="form_label" for="description">Description:</label> 
            <textarea name="description" rows="6" cols="60"><?= $description ?></textarea>
            <input class="form_button" type="submit" value="Submit" />
            <input class="form_button" type="button" value="Cancel" onclick='window.location.href = "<?= base_url . "/album/detail/" . $id ?>"' />
            <a href="<?= base_url ?>/album/index">Turn me into a button</a>
        </form>
        <?php
        //display page footer
        parent::displayFooter();
    }

//end of display method
}

