<?php
/*
 * Author: Kevin Grimley
 * Date: April 5, 2014
 * File: error.class.php
 * Description:
 *
 */

class Album_Error extends IndexView {

    public function display($message) {

        //display page header
        parent::displayHeader("Error");
        ?>
 
                <!-- - - - - - - - - - - - - - - - - - - - - - - - - 
                
                - - - - - Error Image May Go Here - - - - - - - - - -
                
                - - - - - - - - - - - - - - - - - - - - - - - - - -->
                <div style="text-align: left; vertical-align: top;">
                    <h3> We're sorry, but an error has occurred.</h3>
                    <div style="color: red">
                        <!-- <?= str_replace('%20', ' ', $message) ?> -->
                        <?= urldecode($message) ?>
                    </div>
                </div>
            
        <hr>
        <a href="<?= base_url ?>/album/index">Back to album list</a>
        <?php
        //display page footer
        parent::displayFooter();
    }

}