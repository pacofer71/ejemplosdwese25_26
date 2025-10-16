<?php
//arrays
$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
$b = ['manzana', 'pera', 'naranja'];
echo "el array \$a continene: " . count($a) . " elementos.<br>";
for ($i = 0; $i < count($a); $i++) {
    echo "El elemento $i = " . $a[$i] . "<br>";
}
echo "<hr>";
var_dump($b);
$b[] = "Melocoton";
var_dump($b);

$b[0] = "Sandia";
var_dump($b);

$b[10] = "Fresa";
var_dump($b);

$b[7] = "Limón";
var_dump($b);
/* No podemos recorrer el array anterior así
for($i=0; $i<count($b); $i++){
    echo "El elemento $i = ". $b[$i]. "<br>";
}
    */

$b[-7] = "Kiwi";
var_dump($b);

$b[] = "Papaya";
var_dump($b);

foreach ($b as $valor) {
    echo "$valor<br>";
}
echo "<hr>";
// foreach completo
foreach ($b as $key => $valor) {
    echo "La clave es $key, y el valor $valor<br>";
}
echo "<br>";
//echo $b; No podemos imprimir un array con un echo salvo que estemos en una clase y hayamos sobreescrito tostring
$c = [1, "Manolo", 34.67, true];
var_dump($c);
//Arrays asociativos
$ejemplo = [
    'nombre' => 'Juan Antonio',
    'edad' => 34,
    'puesto' => 'Directivo',
    'esAdmin' => true
];
echo "<hr>";
echo $ejemplo['nombre'];
echo "<br>";
foreach ($ejemplo as $k => $v) {
    echo "La clave es $k, y el valor $v <br>";
}
$ejemplo[] = "Valor nuevo";
var_dump($ejemplo);

$ejemplo[] = "Otro Valor nuevo";
var_dump($ejemplo);

foreach ($ejemplo as $k => $v) {
    echo "La clave es $k, y el valor $v <br>";
}
//-----------------------------------------------
$andalucia = [
    'Almeria',
    'Cadiz',
    'Cordoba',
    'Huelva',
    'Granada',
    'Jaen',
    'Malaga',
    'Sevilla'
];
$extremadura = ['Caceres', 'Badajoz'];
$valencia = ['Alicante', 'Castellon', 'Valencia'];
$galicia=['La Coruña', 'Lugo', 'Orense', 'Pontevedra'];
$comunidades = [
    'Andalucia' => $andalucia,
    'Extremadura' => $extremadura,
    'Valencia' => $valencia,
    'Galicia'=>$galicia,
];
var_dump($comunidades);
echo "<center><h2>LISTADO DE PROVINCIAS ANDALUZAS<h2></center>";
echo "<ol>";
foreach ($andalucia as $provincia) {
    echo "<li>$provincia</li>";
}
echo "</ol>";
echo "<hr>";
echo "<center><h2>LISTADO DE COMUNIDADES<h2></center>";
echo "<ul>";
foreach ($comunidades as $comunidad => $provincias) {
    echo "<li>$comunidad</li>";
    echo "<ol>";
    foreach ($provincias as $nombre) {
        echo "<li>$nombre</li>";
    }
    echo "</ol>";
}
echo "</ul>";

foreach ($comunidades as $nombre => $provincias) {
    echo "<table align='center' border='1'>";
    echo "<tr>";
        echo "<td colspan='" . count($provincias) . "' align='center'>$nombre</td>";
    echo "</tr>";
    echo "<tr>";
        foreach ($provincias as $nomProv) {
            echo "<td>$nomProv</td>";
        }
    echo "</tr>";
    echo "</table><br>";
}
