<?php
/*
 * Author: Kevin Grimley
 * Date: April 5, 2014
 * File: error.class.php
 * Description:
 *
 */

class User_Error extends IndexView {

    public function display($message) {

        //display page header
        parent::displayHeader("Error");
        ?>
        <div class="content_wraper">
            <!-- - - - - - - - - - - - - - - - - - - - - - - - - 
            
            - - - - - Error Image May Go Here - - - - - - - - - -
            
            - - - - - - - - - - - - - - - - - - - - - - - - - -->
            <div style="text-align: left; vertical-align: top;">
                <h3> We're sorry, but an error has occurred.</h3>
                <div style="color: red; height: 200px;">
                    <!-- <?= str_replace('%20', ' ', $message) ?> -->
                    <?= urldecode($message) ?>
                </div>
            </div>
            <div style="margin-bottom: 50px;">
                <a class="common_button" href="<?= base_url ?>/index">Album List</a>
            </div>
        </div>
        <?php
        //display page footer
        parent::displayFooter();
    }

}