<?php

class Album_Update extends IndexView {

    public function display($id) {
        //display header
        parent::displayHeader("Edit Confirmation");
        ?>
        <div class="content_wraper">
            <h3>Album Successfully Edited</h3>
            <p>The album was edited.</p>
            <a class="common_button" href="<?= base_url . "/album/detail/" . $id ?>">Edit Album</a>
        </div>

        <?php
        //display footer
        parent::displayFooter();
    }

}
?>
