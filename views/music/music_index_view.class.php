<?php
/*
 * Author: Sarah Kurt
 * Date: 04/15/14
 * Name: index.class.php
 */

class MusicIndexView extends IndexView {

    protected function displayHeader($title) {
        parent::displayHeader($title)
        ?>
        <!--create the search bar -->
        <!--<div id="searchbar">
            <form method="get" action="<?= base_url ?>/music/search">
                Search album by title: <input name="album" id="album" onkeyup="handleKeyUp(event)"  disabled="disabled"/>
                <input type="submit" value="Go"  disabled="disabled" />
            </form>
            <div id="suggestionDiv"></div>
        </div>-->
        <?php
    }
    
    protected function displayFooter() {
        parent::displayFooter();
    }
}
?>
