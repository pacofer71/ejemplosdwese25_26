<?php
require __DIR__ . "/../src/Gato.php";
require __DIR__ . "/../src/Perro.php";

$gato = new Gato("Europa", "Manololo", 2);
echo $gato;
echo "<br>El sonido de " . $gato->getNombre() . " es: " . $gato->sonido();
echo "<br>La clase de \$gato es: " . $gato::class;
echo "<hr>";
$perro1 = new Perro(raza: "Doverman");
$perro2 = new Perro("Pekines", "Asia");
echo $perro1;
echo $perro2;
