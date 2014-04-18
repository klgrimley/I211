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
        
           




<body bgcolor="#c33">


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