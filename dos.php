<?php
    //Operadores aritmeticos +, -, *. /, %
    $num=45;
    echo "El valor de \$num es: ".$num++;
    echo "<br>";
    echo $num;
    echo "<br>";
    $num1=45;
    echo "El valor de \$num1 es: ". ++$num1;
    echo "<br>";
    echo $num1;
    //---------
    $num1=$num1+78;
    $num1+=78;
    $num1-=34; // $num1=$num1-34
    $num1*=12; // $num1=$num1*12;
    $cad="Manolo";
    echo "<br>$cad";
    $cad.=" Perez Perez"; // $cad=$cad . " Perez Perez";
    echo "<br>$cad";

    //---------------- if else elseif
    /* operadores logicos
        &&-->and
        ||-->or
        ! negacion
        == Comparacion
        ===Comparacion estricta compara valor Y tipo
        < menor que
        > mayor que
        <= menor o igual
        >= mayor o igual
        != distinto

    */
    $valor1=45;
    $valor2=45.0;
    $valor3="45";
    if($valor1===$valor2){
        echo "<br>Los valores son iguales";
    }else{
        echo "<br>Los valores son diferentes";
    }
    // Hacer un algoritmo sencillo para comparar dos numeros, es decir mostrare lo numeros
    //ordenados de menor a mayor;
    $num1=5456;
    $num2=545;
    echo "<hr>";
    if($num1<$num2){
        echo "$num1 < $num2";
    }elseif($num2<$num1){
        echo "$num2 < $num1";
    }else{
        echo "$num2 = $num1";
    }
    // BUCLES
    //for
    for($i=0; $i<=10; $i++){
        echo "<br>$i";
    }
    echo "<hr>";
    for($i=0; $i<=10; $i+=5){
        echo "<br>$i";
    }
    echo "<hr>";
    for($i=100; ; $i-=10){
         if($i<0) break;
         echo "<br>$i";
    }
    
    echo "<hr><hr>";
    $i=1;
    for(;;){
        //$i=1;
        echo "<br>$i";
        $i++;
        if($i>10) break;
    }
    ///
    echo "<br>WHILE()<br>";
    $num=5;
    while($num<10){
        echo "<br>$num";
        $num++;
    }
    echo "<br>DO WHILE()<br>";
    $num=5;
    do{
        echo "<br>". $num++;
    }while($num<10);
    

