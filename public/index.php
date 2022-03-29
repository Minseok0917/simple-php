<?php 
define('_path', explode("?",$_SERVER['REQUEST_URI'])[0]);
define('_url',array_slice(explode('/',_path),1));


// $url = explode('/',_path);
// array_splice($url,0,1);
// print_r($url);
// echo "<br>";
// $url = array_slice($url,0);
// print_r($url);
// echo '312890312389012812390';
// echo "<br>";


session_start();

require '../lib.php';
require '../DB.php';

view('template/index');


