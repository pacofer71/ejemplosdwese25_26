<?php
require __DIR__ . "/../vendor/autoload.php";

use App\Utils\ApiUtils;
use App\Utils\Utilidades;

//$peliculas = Utilidades::getPeliculas();
//var_dump($peliculas);
$peliculas=ApiUtils::getPeliculas();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN Tailwind css -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>

<body class="bg-gray-900 min-h-screen flex items-center justify-center p-8">

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 max-w-7xl w-full">

        <!-- Card de ejemplo (itera este bloque con PHP) -->
        <?php foreach ($peliculas as $item): ?>
            <div class="bg-gray-800 rounded-2xl shadow-lg overflow-hidden transform transition hover:scale-105">
                <img
                    src="<?= $item->poster; ?>"
                    alt="<?= $item->titulo; ?>"
                    class="w-full h-80 object-cover">
                <div class="p-4 flex flex-col gap-2">
                    <h2 class="text-center text-lg font-semibold text-white"><?= $item->titulo; ?></h2>
                    <p class="italic text-gray-300 text-sm text-center">
                        <?= $item->resumen; ?>
                    </p>
                    <p class="text-right text-yellow-400 font-semibold">⭐ <?= $item->puntuacion; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</body>

</html>