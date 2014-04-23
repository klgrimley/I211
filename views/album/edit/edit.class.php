<?php

class Edit extends IndexView {
//    private $name = $_GET['name'];
//    private $artist = $_GET['artist'];
//    private $album = $_GET['album'];
//    private $genre = $_GET['genre'];
//    private $release_date = $_GET['release_date'];

}  
?>
<html>
    <head>
        <!--
            Author: Sarah Kurt
            Date: April 20, 2014
        -->

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Our Music Library</title>
        
    </head>

    <body>
        <div id="wrapper">
            <table border="0" cellspacing="0" cellpadding="10" width="100%">
                <tr>
                    <td colspan="3" id="navbar">
                        <a href="index.html">Home</a> || <a href="listbooks.html">List Music</a>
                    </td>
                </tr>
                <tr id="banner">
                    <td style="padding: 10px 10px 0px 10px; width: 250px">
            
                    </td>
                    <td width="680">
                        <div id="maintitle">Our Music</div><br />
                        <div id="mainsubtitle">Listen to our music</div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" id="mainbody">
                        <h2>Music</h2>
                        <form method="post" action="">
                        <table border="0" cellspacing="0" cellpadding="5">
                            <tr>
                                <td width="65">Song Name</td>
                                <td width="300"><input type="text" name="title" value="<?= "$name" ?>" size="40" /></td>
                            </tr>
                            <tr>
                                <td>Artist:</td>
                                <td><input type="text" name="artist" value="<?= "$artist" ?>" size="40" /></td>
                            </tr>
                            <tr>
                                <td>Album:</td>
                                <td><input type="text" name="album" value="<?= "$album" ?>" /></td>
                            </tr>
                            <tr>
                                <td>Genre:</td>
                                <td><input type="text" name="genre" value="<?= "$genre" ?>" /></td>
                            </tr>
                            <tr>
                                <td>Release Date:</td>
                                <td><input type="text" name="release_date" value="<?= "$release_date" ?>" /></td>
                            </tr>
                        </table>
                            <input type="submit" value="Update Music" />
                        </form>
                        <br />

                        <br />
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>
