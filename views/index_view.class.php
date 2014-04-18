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
                <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
                <link rel='shortcut icon' href='<?= base_url ?> ' type='image/x-icon'>
                <link type='text/css' rel='stylesheet' href='<?= base_url ?>/includes/style.css'>
            </head>
            <body>
               <div id="header">
                    <div id="logo">
                        <img src="<?= base_url ?>/includes/images/title.gif" width="204" height="68" />
                    </div>
                </div>

                <?php
            }//End of Common Header

            //this method displays the page footer
            protected function displayFooter() {
                ?> 
               <!------------------------------------------------------------ 
               
               
               ------------ Code for the Common Footer goes here ------------
               
               
               ------------------------------------------------------------->
        </body>
        </html>
        <?php
    }//End of Common Footer


}
