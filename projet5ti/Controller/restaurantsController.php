<?php

$uri = $_SERVER['REQUEST_URI'];

if($uri === '/index.php' || $uri === "/"){
    require_once "Tempates/Restaurants/voirTousLesRestaurants.php";
}elseif ($uri === '/voirLeRestaurant') {
    require_once "Templates/Restaurants/voirLeRestaurant.php";
}