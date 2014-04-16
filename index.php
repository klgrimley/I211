<?php

require_once ("application/autoloader.class.php");

//define a constant for the application url; you may need to modify the value for your system.
define("base_url", "http://localhost/I211/kungfupanda_mvc");

Dispatcher::dispatch();
