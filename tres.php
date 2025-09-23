<?php
// Haremos la tabla de multiplicar (hasta el 10) de una variable guardada en $valor
// en una tabla html
$valor=4;
echo "<table border=1 cellpadding='5' cellspacing='2' align='center'>\n";
for($i=1; $i<=10; $i++){
    echo "<tr>\n";
        echo "<td>$valor</td>\n";
        echo "<td>X</td>\n";
        echo "<td>$i</td>\n";
        echo "<td>=</td>\n";
        echo "<td>".$valor*$i."</td>\n";
    echo "</tr>\n";
}
echo "</table>";
//---------------------------
// Lo mismo con sintasis heredoc
echo "<hr>";
echo "<table border=1 cellpadding='5' cellspacing='2' align='center'>\n";
for($i=1; $i<=10; $i++){
    $res=$valor*$i;
    echo <<< TXT
    <tr>\n
        <td>$valor</td>\n
        <td style='background-color:black; color:white;'>X</td>\n
        <td>$i</td>\n
        <td>=</td>\n
        <td>$res</td>\n
    </tr>
    TXT;
}
echo "</table>";
//--------------------------- Filas pares de color gris
// Lo mismo con sintasis heredoc
echo "<hr>";
echo "<table border=1 cellpadding='5' cellspacing='2' align='center'>\n";
for($i=1; $i<=10; $i++){
    $res=$valor*$i;
    if($i%2==0){
        $color="silver";
    }else{
        $color="white";
    }
    echo <<< TXT
    <tr style='background-color:$color; '>\n
        <td>$valor</td>\n
        <td>X</td>\n
        <td>$i</td>\n
        <td>=</td>\n
        <td>$res</td>\n
    </tr>
    TXT;
}
echo "</table>";