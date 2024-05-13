<?php

$url_array = parse_url($_SERVER["REQUEST_URI"]);
$url = $url_array["path"];



$routes=[
    "/"=>dirname(dirname(__FILE__))."/App/Controllers/Dashboard.php",
  ];
  

  if (array_key_exists($url,$routes)){
    require $routes[$url];
  }
?>