<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of music_index_view
 *
 * @author Forrest
 */
class MusicIndexView extends IndexView {

    protected function displayHeader($title) {
        parent::displayHeader($title);
        ?>
        <script>
            var suggest_url = "<?= base_url ?>/music/suggest/"; 
        </script>
        <!--create the search bar -->
        <div id="searchbar">
            <form method="get" action="<?= base_url ?>/movie/search">
                Search movie by title: <input name="title" id="title" onkeyup="handleKeyUp(event)" />
                <input type="submit" value="Go" />
            </form>
            <div id="suggestionDiv"></div>
        </div>
        <?php
    }

    protected function displayFooter() {
        parent::displayFooter();
    }

}

?>
