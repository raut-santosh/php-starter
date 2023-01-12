<?php


$route = parse_url($_SERVER['REQUEST_URI']);
$page=($route['path'] && $route['path']!='/') ? $route['path']:'home';
//print_r($path);
include 'partials/header.php';
include './pages/'.$page.'.php';
include 'partials/footer.php';



?>