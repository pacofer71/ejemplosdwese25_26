<?php
$num = 1000;
//deseo un algoritmo que me muestre los divisores de $num
// y me los cuente
$cont = 0;
for ($i = 1; $i <= $num; $i++) {
    if (!($num % $i)) {
        $cont++;
        echo $i . ", ";
    }
}
echo "<br> El total de divisores de $num son $cont";
if ($cont > 2) {
    echo "<br>Claramente $num NO es primo";
} else {
    echo "<br>Claramente $num SI es primo";
}

//Ahora ademas queremos que me diga si el numero es o no primo

// Ahora que queremos que me muestre la cantidad de primos que hay entre el 1 y $num
//por ejemplo si $num=10 Los primos menores o iguales a 10 serian 2,3,5,7
//$num=100000000000000
echo "<hr><b>Vamos a buscar los primos menores o iguales a $num</b><br>";

for ($i = 2; $i <= $num; $i++) {
    $cont = 0;
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $cont++;
            break;
        }
    }
    if ($cont == 0) echo "$i, ";
}

//Quiero hacer una tabla html de 8x8 simulando un tablero de ajedrez
// Tablero de Ajedrez
echo "<hr>";
echo "<table border='1' align='center' cellpading='4' cellspacing='2'>";
for ($f = 0; $f < 8; $f++) {
    echo "<tr>";
    for ($c = 0; $c < 8; $c++) {
        /*    
        if(($f+$c)%2==0){
            $color="white";
        }else{
            $color="black";
        }
    */
        //Operador ternario
        $color = (!(($f + $c) % 2)) ? "white" : "black";

        echo "<td style='background-color:$color;'>&nbsp;&nbsp;&nbsp;&nbsp;</td>";
    }
    echo "</tr>";
}
echo "</table>";
