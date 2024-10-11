<?php
$slug = $_GET['slug'];
$episode = $_GET['episode']; // Obtén el número de episodio del query string
$response = file_get_contents("https://animeflv.net/api/anime/{$slug}/episode/{$episode}");
header('Content-Type: application/json');
echo $response; // Devuelve la respuesta en formato JSON
?>
