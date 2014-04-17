<?php
/*
 * Author: Sarah Kurt
 * Date: 04/15/14
 * Name: index.class.php
 */

class Welcome_Index extends IndexView {

    //put your code here

    public function display() {
        parent::displayHeader("Music");
         ?>    
        
           


<html>
<head>
<meta charset="UTF-8">
<title>Listen Up</title>
<link href="includes/style.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Dosis:200,400' rel='stylesheet' type='text/css'>
</head>

<body bgcolor="#ff3333">
<div id="header">
<div id="logo">
<img src="includes/images/title.gif" width="204" height="68">
</div>
</div>

<div id="wrapper">

    <img src="includes/images/stream.gif" width="280" height="352"> 
 <a href="<?= base_url ?>/music/index/"><img src="includes/images/purchase.gif" width="258" height="344"></a> </div>


</body>
</html>















        <?php
                parent::displayFooter();
       

    }

}
?>