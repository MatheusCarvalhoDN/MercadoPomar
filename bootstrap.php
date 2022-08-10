<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', true);
require __DIR__ . '/vendor/autoload.php';

define('BD', array('host'=>'127.0.0.1', 'db'=>'pomar', 'password'=>'', 'user'=>'root',));
define('url', 'http://localhost/pomar/');

try {
 
    require __DIR__ . '/routes/routes.php';
 
} catch(\Exception $e){
     
    echo $e->getMessage();
}