<?php
/*
 * Author: Kevin Grimley
 * Date: 4/05/14
 * Name: index.php
 * Description: The homepage
 */

require_once ("application/autoloader.class.php");

//define a constant for the application url; you may need to modify the value for your system.
define("base_url", "http://localhost/I211/Final_Project_Trial");
define('ABSOLUTE_PATH', 'C:/xampp/htdocs/I211/Final_Project_Trial');

Dispatcher::dispatch();