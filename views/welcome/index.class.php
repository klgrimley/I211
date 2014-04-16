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
        
           
                        <ul>
                            <li><a href="<?= base_url ?>/music/index/">Listen to music</a></li>
                            <li>Stream music</li>
                        </ul>
                   

        <br>
        <?php
                parent::displayFooter();
       

    }

}
?>