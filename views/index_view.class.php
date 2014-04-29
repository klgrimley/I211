<?php
class IndexView {
    //this method displays the page header
    protected function displayHeader($title) {
        @session_start();
        if(!isset($_SESSION['role']))
            $_SESSION['role'] = 1;
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <title> <?php echo $title ?> </title>
                <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
                <link rel='shortcut icon' href='<?= base_url ?>' type='image/x-icon'>
                <link type='text/css' rel='stylesheet' href='<?= base_url ?>/includes/style.css'>
                <link href="<?= base_url ?>/includes/styles.css" rel="stylesheet" type="text/css" />
                <script src="<?= base_url ?>/includes/js/ajax_autosuggestion.js"></script>
                <script type="text/javascript" src="<?= base_url ?>/includes/js/jquery-1.7.2.min.js"></script>
                <script type="text/javascript" src="<?= base_url ?>/includes/js/jquery-ui-1.8.21.custom.min.js"></script>
                <script type="text/javascript" src="<?= base_url ?>/includes/js/main.js"></script>
                <script type="text/javascript">
                    var base_url = '<?= base_url ?>';
                    var suggest_url = base_url + '/song/suggest/';
                </script>
               
                
            </head>
            <body>
                <div id="header">
                    <div id="logo">
                        <a href="<?= base_url ?>/index"><img src="<?= base_url ?>/includes/images/title.gif" width="204" height="68" /></a>
                    </div>
                    <?php
                    if($_SESSION['role'] == 2){?>
                    <div id="login_div"><a href="<?= base_url ?>/user/logout"><h3 id="login_button">Logout</h3></a></div>
                    <?php }else{?>
                    <div id="login_div"><a href="<?= base_url ?>/user/login"><h3 id="login_button">Login</h3></a></div>
                    <?php } ?>
                    
                    <!--create the search bar -->
                    <div id="searchbar">
                        <form method="get" action="<?= base_url ?>/song/search">
                            <label for="song">Find the song you're looking for:</label>
                            <input class="search_bar" name="song" id="song" onkeyup="handleKeyUp(event)" />
                            <input class="search_bar go_button" type="submit" value="Find" />
                            <div id="suggestionDiv"></div>
                        </form>
                        
                        
                    </div>
                </div>

                <?php
            }

//End of Common Header
            //this method displays the page footer
            protected function displayFooter() {
                ?> 
                <footer>
                    <h6>Copyright 2014 by Listen UP</h6>
                </footer>
            </body>
        </html>
        <?php
    }

//End of Common Footer
}
