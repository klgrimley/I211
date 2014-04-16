<?php

require_once ("application/autoloader.class.php");

//define a constant for the application url; you may need to modify the value for your system.
define("base_url", "http://localhost/GitHub/final_project_i211");

Dispatcher::dispatch();
