<?php
/*
 * Author: Sarah Kurt
 * Date: 04/15/14
 * Name: index_view.class.php
 * Description: the parent class for all view classes. The two functions display page header and footer.
 */

class IndexView {

    //this method displays the page header
    protected function displayHeader($title) {
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <title> <?php echo $title ?> </title>
            </head>
            <body>
                <a href="<?= base_url ?>/index.php" style="text-decoration: none" title="Music Library"></a>

                <?php
            }

            //this method displays the page footer
            protected function displayFooter() {
                ?> 
        </body>
        </html>
        <?php
    }


}
