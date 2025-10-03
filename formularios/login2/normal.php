<?php
    //perfiles válidos 2, 0
    session_start();
    if($_SESSION['perfil']==1){
        header("Location:sitio.php");
        die;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><center>Pagina de Usuarios Normales</center></h2>
    <a href="./utils/cerrar.php">
       Salir
    </a>
    <br>
    <a href="sitio.php">
       Ir a Sitio
    </a>
</body>
</html>