<?php
/*
 * Author: Sarah Kurt
 * Date: 04/15/14
 * Name: edit.class.php
 * Description: Allows admins to edit the site
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
                        <a href="<?= base_url ?>/index"><img src="<?= base_url ?>/includes/images/title.gif" width="204" height="68" /></a>
                    </div>
                   <!--create the search bar -->
                    <div id="searchbar">
                        <form method="get" action="<?= base_url ?>/album/search">
                            Search album by title: <input name="album" id="album" onkeyup="handleKeyUp(event)" />
                            <input type="submit" value="Go" />
                        </form>
                        <div id="login_div"><a href="#"><h3 id="login_button">Login</h3></a></div>
                        <div id="suggestionDiv"></div>
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
