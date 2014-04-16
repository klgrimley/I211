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
        <div id="main_header">Welcome to our Music Library!</div>    
            <table style="border: none; width: 700px;" align="center">
                <tr>
                    <td colspan="2"><strong>Major features include:</strong></td>
                </tr>
                <tr>
                    <td align="left">
                        <ul>
                            <li>Listen to music</li>
                            <li>Stream music</li>
                        </ul>
                    </td>
               </tr>
            </table>

        <br>
        <?php
                parent::displayFooter();
       

    }

}
?>