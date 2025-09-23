<?php
//Ejercicio 1 ------------------------------------------------------
//imprimir del 1 al 10 con un for
for($i=1; $i<=10; $i++){
    echo "$i, ";
}
//Ejercicio 2 ------------------------------------------------------
//numeros pares del 2 al 20 con for
echo "<hr>";
for($i=2; $i<=20; $i+=2){
    echo "$i, ";
}
//Ejercicio 3
//sumar numeros del 1 al 100 con un for
echo "<hr>";
$sum=0;
for($i=1; $i<=100; $i++){
    $sum+=$i;
}
echo "La suma de los 100 primeros numeros es: $sum<br>";

//Ejercicio 4 ----------------------------------------------
//calcular factorial de 5 5! con un for
echo "<hr>";

$factorial=1;
for($i=1; $i<=5; $i++){
    $factorial*=$i;
}
echo "<b>5!</b> = $factorial<br>";
//Ejercicio 5, imprimir del 10 al 1 con un while
echo "<hr>";
$num=10;
while($num>=1){
    echo "$num, ";
    $num--;
}
//Ejercicio 6 tabla de multiplicar del 5 con un while 
echo "<hr>";
$num=1;
while($num<=10){
    echo "5 x $num = " . 5*$num ."<br>";
    $num++;
}
//Ejercicio7 programa que me pida numeros y los sume hasta introducir 0
//lo dejaremos hasta ver entrada por teclado en php
  ///------------------Intermedios---------------------------
  //Ejercico 8, triangulo de asteriscos (5 filas)
  echo "<hr>";
  $filas=10;
  $triangulo="";
  for($i=1; $i<=$filas; $i++){
    $triangulo.="*";
    echo "$triangulo<br>";
  }





