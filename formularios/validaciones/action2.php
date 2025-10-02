<?php 
//include o require include_once, require_once
require "utils.php";

//1.- Recogemos y saneamos todos los datos -------

$nombre=sanearCadenas($_POST['nombre']);
$email=sanearCadenas($_POST['email']);
$descripcion=sanearCadenas($_POST['descripcion']);
$pvp=(float) $_POST['pvp'];
$pass=sanearCadenas($_POST['password']);
$provincia=sanearCadenas($_POST['provincias']);
$afi=$_POST['aficiones'] ?? [];
$color=$_POST['color'] ?? "error";
$color=sanearCadenas($color);

//2.- Una vez saneados y recogidos validamos los datos
$mensajes=[];

//suponemos a nombre una longitud valida entre 3 y 40
if(errorLongitudCadena($nombre, 40, 3)){
    $mensajes[]="Error el campo nombre no se ajusta a la longitud pedida!!!!";
}
//campo email
if(!emailValido($email)){
    $mensajes[]="Error se esperaba una dirección de email!!!!";
}
//password valido si esta entre 5 y 12 caracteres
if(errorLongitudCadena($pass, 12, 5)){
    $mensajes[]="Error se esperaba una longitud entre 5 y 12 para el campo password!!!!";
}
//precio entre 10 y 9999.99
if(errorPrecio($pvp, 10, 9999.99)){
    $mensajes[]="Error el precio debe estar entre 10 y 9999.99!!!";
}
//campo descripcion valido si esta entre 20 y 500 caracteres

if(errorLongitudCadena($descripcion, 500, 20)){
    $mensajes[]="Error el campo descripcion no se ajusta a la longitud pedida (20-500) !!!!";
}
//campo aficiones
if(count($afi)==0 || !aficionesValidas($afi)){
    $mensajes[]="Error no elegiste ninguna afición o aficion/es invalida/s";
}
//campo color
if(!colorValido($color)){
    $mensajes[]="Error, color inválido o no elegiste ninguno!!!";
}
//campo provincia
if(!provinciaValida($provincia)){
    $mensajes[]="Error provincia NO válida o no selleccionada!!!!";
}

if(count($mensajes)){
    //Ha habido errores, los mostramos
    echo "<b>Mensajes de Error:</b><br>";
    echo "<ol>";
    foreach($mensajes as $error){
        echo "<li>$error</li>";
    }
    echo "</ol>";
}else{
    //Todo correcto procesamos los datos del formulario
    echo "<br><b>DAtos válidos porcedemos a procesarlos</b>";
    echo "Nombre: $nombre<br>";
    echo "Password: $pass<br>";
    echo "Email $email<br>";
    echo "Descripcion: $descripcion<br>";
    echo "La provincal seleccionada ha sido: $provincia<br>";
    echo "La aficiones han sido:<br>";
    echo "<ol>";
    foreach($afi as $item){
        echo "<li>$item</li>";
    }
    echo "</ol>";
    echo "El color elegido ha sido: $color";
}





