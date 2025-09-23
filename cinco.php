<?php
//operadores match y switch
$dia='1';
switch($dia){ //NO hace comparacion estricta solo valor
    case 1 :
        echo "Lunes";
        break;
    case 2 :
        echo "Martes";
        break;
    case 3 :
        echo "Miércoles";
        break;
    case 4 :
        echo "Jueves";
        break;
    case 5 :
        echo "Viernes";
        break;
    case 6 :
        echo "Sábado";
        break;
    case 7 :
        echo "Domingo";
        break;
    default :
        echo "Dia erroneo!!!!";
}
//-----------------match
echo "<hr>";
$dia='4';
$nombreDia=match($dia){ //comparacion estricta, es dcir compruaba valor y tipo
    1=>"Lunes",
    2=>"Martes",
    3=>"Miércoles",
    4=>"Jueves",
    5=>"Viernes",
    6=>"Sábado",
    7=>"Domingo",
    default=>"Dia erróneo"
};
echo $nombreDia;
//