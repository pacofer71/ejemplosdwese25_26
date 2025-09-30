<?php
echo "Hola<br>";
$nombre = $_POST['nombre'];
$desc = $_POST['descripcion'];
$pass = $_POST['password'];
$prov = $_POST['provincias'];
$pvp = (float)$_POST['pvp'];
//$aficiones = isset(($_POST['aficiones'])) ? $_POST['aficiones'] : false;
$aficiones = $_POST['aficiones'] ?? false;
$color=$_POST['color'] ?? 'Indefinido';
var_dump($_POST);
//$pvp=$_GET['pvp'];
echo "<br>Tu nombre es: <b>$nombre</b> y la descripcion es: <i>$desc</i>";
echo "<br>El password es: $pass y la provincia es: <b>$prov</b>";
echo "<br>El precio es: $pvp €";
echo "<br>Las aficiones son:";
if ($aficiones) {
    echo "<ol>";
    foreach ($aficiones as $item) {
        echo "<li>$item</li>";
    }
    echo "</ol>";
}else{
    echo "<br>NO has seleccionado Ninguna!!!!";
}
echo "<br>El color es: <b>$color</b>";
