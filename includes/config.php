<?php
ob_start();
session_start();

//database credentials
define('DBHOST','localhost');
define('DBUSER','localhost');
define('DBPASS','Olarewaju');
define('DBNAME','efflux_blog');

$db = new PDO("mysql:host=".DBHOST.";port=8889;dbname=".DBNAME, DBUSER, DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//set timezone
date_default_timezone_set('Europe/London');


function __autoload($class) {
   
   $class = strtolower($class);

   $classpath = 'classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
    }     

   $classpath = '../classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
    }
        
     
}

$user = new User($db); 