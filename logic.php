<?php 

require_once __DIR__ ."./data/init.php";

$filterd_hotels = $hotels;

$user_parking = isset($_GET["parking"]) ? true : false;

if ($user_parking) {
    
    $filterd_hotels = array_filter($filterd_hotels, function($hotel, $key) {
        return $hotel['parking'] == true;
    }, ARRAY_FILTER_USE_BOTH);

} ;

// var_dump($_GET);

$user_vote = isset($_GET['vote']) ? $_GET['vote'] : false ;

if ($user_vote) {
    
    $filterd_hotels = array_filter($filterd_hotels, fn($hotel) => $hotel['vote'] >= $user_vote);

};

?>