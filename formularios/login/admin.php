<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header("Location:login.php");
        die;
    }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN tailwindcss -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- CDN fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body class="bg-teal-200 px-8">
    <h2 class="my-4 text-center text-xl">Página de administración</h2>
    <a href="cerrar.php" class="p-2 text-white font-bold rounded-lg bg-red-600 hover:bg-red-800">
       <i class="fa-solid fa-right-from-bracket mr-2"></i>Salir
    </a>
</body>
</html>