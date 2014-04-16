<?php
/*
 * Author: Sarah Kurt
 * Date: 04//201
 * Name: detail.class.php
 * Description: This class defines a method "display".
 */

class Music_Detail extends MusicIndexView {

    public function display($music) {
        displayHeader("Display Music Details");
       


        //retrieve music details by calling get methods
        $id = $music->getId();
        $song_name = $music->getSongName();
        $album = $music->getAlbum();
        $artist = $movie->getRelease_date();
        $release_date = $music->getReleaseDate();
        $genre = $music->getGenre();
        $image = $music->getImage();
        $description = $music->getDescription();
        $audio = $music->getAudio();
        
        //description, audio
        
        ?>

        <div id="main_header">Music Details</div>

        <!-- display music details -->
        <div id="detail">
            <? // <div class="image"><img src="<?= base_url ?>/www/<?= $image ?>" alt="<?= $song_name ?>" title="<?= $title ?>"></div>
            <table>
                <tr>
                    <td class="heading"><strong>Song Name:</strong></td>
                    <td><?= $song_name ?></td>
                </tr>
                <tr>
                    <td><strong>Album:</strong></td>
                    <td><?= $album ?></td>
                </tr>
                <tr>
                    <td><strong>Artist:</strong></td>
                    <td><?= $artist ?></td>
                </tr>
                <tr>
                    <td><strong>Release Date:</strong></td>
                    <td><?= $release_date ?></td>
                </tr>
                <tr>
                    <td><strong>Genre: </strong></td>
                    <td><?= $genre ?></td>
                </tr>
            </table>
            <div class="buttons">
                <input type="button" value="  Edit   " onclick='window.location.href = "<?= base_url . "/music/edit/" . $id ?>"' />&nbsp;
                <input type="button" value="Delete" onclick='window.location.href = "<?= base_url . "/music/delete/" . $id ?>"' />
            </div>
        </div>
        <a href="<?= base_url ?>/music/index">Back to music list</a>

        <?php
        parent::displayFooter();
       

    }

//end of display method
}