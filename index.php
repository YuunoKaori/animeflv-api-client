<?php
include 'views/header.php'; // Incluye el encabezado

// Aquí podrías hacer una llamada a tu API para obtener la lista de animes
$animes = json_decode(file_get_contents('https://animeflv.net/api/anime'), true);

include 'views/anime_list.php'; // Incluye la vista que muestra los animes

include 'views/footer.php'; // Incluye el pie de página
?>
