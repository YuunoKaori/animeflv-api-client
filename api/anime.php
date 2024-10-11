<?php
$slug = $_GET['slug']; // Obtén el slug del query string
$response = file_get_contents("https://animeflv.net/api/anime/{$slug}");
header('Content-Type: application/json');
echo $response; // Devuelve la respuesta en formato JSON
?>
