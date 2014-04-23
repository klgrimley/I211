<?php
/*
 * Author: Kevin Grimley
 * Date: 4/05/14
 * Name: index.php
 * Description: The homepage
 */

require_once ("application/autoloader.class.php");

//define a constant for the application url;
define("base_url", "http://localhost/GitHub/Final_Project");
define('ABSOLUTE_PATH', 'C:/xampp/htdocs/GitHub/Final_Project');

Dispatcher::dispatch();