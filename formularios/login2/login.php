<?php
session_start();
require __DIR__."/utils/validaciones.php"; //require "./utils/validaciones.php"
if (isset($_POST['password'])) {
    //procesaremos el formulario, si esta variable existe es pq hemos enviado el formulario
    //1.- Recogemos y saneamos
    $password = sanearCampos($_POST['password']);
    $email = sanearCampos($_POST['email']);
    //2.- validamos los valores recogidos en el paso 1
    $errores = false;
    if (!longitudCadenaValida($password, 5, 12)) {
        $errores = true;
    }
    if (!emailValido($email)) {
        $errores = true;
    }
    //Si errores=false no he tenido ningun error,proceso los datos

    if (!$errores) {
        $perfil=loginValido($email, $password);
        if ($perfil!=-1) {
            $_SESSION['user'] = $email;
            $_SESSION['perfil']=$perfil;
            header("Location:sitio.php");
            die();
        }
    }
    // si he llegado aquí es pq ha habido al menos un error
    header("Location:login.php");
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
    <h2 class="my-4 text-center text-xl">Formulario Login</h2>
    <div class="p-4 rounded-xl shadow-xl bg-gray-200 w-1/3 mx-auto border-2 border-gray-400">
        <form method="POST" action="login.php">
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
            <!-- Campo Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                    Password
                </label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                    placeholder="Ingresa tu password">
                <?php
                pintarErrores('errPassword');
                ?>
            </div>
            <?php
            pintarErrores('errLogin');
            ?>
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