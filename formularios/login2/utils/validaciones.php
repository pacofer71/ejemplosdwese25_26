<?php
include "users.php";

function sanearCampos(string $valor): string{
    return htmlspecialchars(trim($valor));
}

function emailValido(string $email): bool{
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['errEmail']="*** Error se esperaba un email válido";
        return false;
    }
    return true;
}
function longitudCadenaValida(string $cad, int $min, int $max){
    if(strlen($cad)<$min || strlen($cad)>$max){
        $_SESSION['errPassword']="*** Error se esperaba un valor entre $min y $max carácteres";
        return false;
    }
    return true;
}

function loginValido(string $email, string $pass):int{
    global $usersValidos;
    foreach($usersValidos as $e=>$datos){
        if($e==$email && $datos[0]==$pass) return $datos[1];
    }
    $_SESSION['errLogin']="*** Error email o contraseña incorrectos!!!";
    return -1;
}


function pintarErrores(string $nombre): void{
    if(isset($_SESSION[$nombre])){
        echo "<p class='mt-1 text-sm italic text-red-500'>{$_SESSION[$nombre]}</p>";
        //para que me el mensaje una sola vez, destruyo la var, de sesion
        unset($_SESSION[$nombre]);
    }
}