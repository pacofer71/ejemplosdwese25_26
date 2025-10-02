<?php
session_start();
require "validaciones.php";

if (isset($_POST['nombre'])) {
    //procesaremos el formulario, si esta variable existe es pq hemos enviado el formulario
    //1.- Recogemos y saneamos
    $nombre = sanearCampos($_POST['nombre']);
    $email = sanearCampos($_POST['email']);
    //2.- validamos los valores recogidos en el paso 1
    $errores = false;
    if (!longitudCadenaValida($nombre, 3, 20)) {
        $errores = true;
    }
    if (!emailValido($email)) {
        $errores = true;
    }
    //Si errores=false no he tenido ningun error,proceso los datos
    if (!$errores) {
        echo "<br>Los datos son $nombre, $email";
        die();
    }
    // si he llegado aquí es pq ha habido al menos un error
    header("Location:form1.php");
    die();
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
    <h2 class="my-4 text-center text-xl">Formulario autoenviado</h2>
    <div class="p-4 rounded-xl shadow-xl bg-gray-200 w-3/4 mx-auto border-2 border-gray-400">
        <form method="POST" action="form1.php">
            <!-- Campo Nombre -->
            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">
                    Nombre
                </label>
                <input
                    type="text"
                    id="nombre"
                    name="nombre"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                    placeholder="Ingresa tu nombre">
                <?php
                    pintarErrores('errNombre');
                ?>
            </div>
            <!-- Campo email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                    Email
                </label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                    placeholder="correo@correo.es">
                     <?php
                    pintarErrores('errEmail');
                ?>
            </div>
            <div class="flex flex-row-reverse">
                <button type="submit" class="ml-2 p-2 rounded-lg bg-blue-400 hover:bg-blue-600 text-white font-bold">
                    <i class="fas fa-floppy-disk mr-2"></i>Enviar
                </button>
                <button type="reset" class="p-2 rounded-lg bg-red-400 hover:bg-red-600 text-white font-bold">
                    <i class="fa-solid fa-paintbrush mr-2"></i>Limpiar
                </button>
            </div>
        </form>
    </div>
</body>

</html>