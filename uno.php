<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>Página Uno</h1></center>
    <br>
    <?php
        echo "HOLA MUNDO!!<br>\n";
        echo 'Hola Mundo!!';
        // Variables
        // int, double|float, bool, object, array, string, null
        $numero=23;
        echo "<br>";
        echo "El valor de la variable \$numero es $numero y el tipo es: ".gettype($numero);
        echo "<br>";
        echo 'El valor de la variable $numero es '.$numero.' y el tipo es: '.gettype($numero);
       
        $numero="Manolo";
        echo "<br>";
        echo "El valor de la variable \$numero es $numero y el tipo es: ".gettype($numero);
        echo "<br>";
        echo 'El valor de la variable $numero es '.$numero.' y el tipo es: '.gettype($numero);
        
        $numero=true;
        echo "<br>";
        echo "El valor de la variable \$numero es $numero y el tipo es: ".gettype($numero);
        echo "<br>";
        echo 'El valor de la variable $numero es '.$numero.' y el tipo es: '.gettype($numero);

        $numero=45.89; // esto ahora es double
        echo "<br>";
        echo "El valor de la variable \$numero es $numero y el tipo es: ".gettype($numero);
        echo "<br>";
        echo 'El valor de la variable $numero es '.$numero.' y el tipo es: '.gettype($numero);

        //------------- Comentario d una linea
        echo "<hr>";
        /*
        Muchas lineas
        de comentario
        */
        //quiero una salida que sea: HOLA 'Juan';
        echo "Hola 'Juan'";
        echo "<br>";
        echo 'Hola \'Juan\'';
        echo "<br>";
        // Ahora quiero que la salida sea HOLA "Juan";
        echo 'HOLA "JUAN"';
        echo "<br>";
        echo "Hola \"Juan\"";
        //---------------------------
        $nombre="Juan Antonio";
        var_dump($nombre);
        echo "<br>";
        $esValido=false;
        var_dump($esValido);
        //-----------------------------------
        $var=null;
        echo "<br>";
        var_dump($var);
        echo "<br>";
        var_dump($var1);
        //------------------------------------ CASTING
        //1.- Automatico
        $num1=45;
        $num2=67.8;
        $res=$num1+$num2;
        echo "<br>";
        var_dump($res);
        $div=45;
        $divisor=13;
        $coc=$div/$divisor;
        echo "<br>";
        var_dump($coc);
         $div=45.0;
        $divisor=5;
        $coc=$div/$divisor;
        echo "<br>";
        var_dump($coc);
        //2.- Manual
        echo "<hr>";
        $valor="123";
        $valorNuevo=(int) $valor;
        $valorNuevo1=(float) $valor;
         echo "<br>";
        var_dump($valorNuevo);
         echo "<br>";
        var_dump($valorNuevo1);
        //--
        $valor="123.78";
        $valorNuevo=(int) $valor;
        $valorNuevo1=(float) $valor;
         echo "<br>";
        var_dump($valorNuevo);
         echo "<br>";
        var_dump($valorNuevo1);
        //--------------------
        echo "<hr>";
         $valor="123.78Manolo";
        $valorNuevo=(int) $valor;
        $valorNuevo1=(float) $valor;
         echo "<br>";
        var_dump($valorNuevo);
         echo "<br>";
        var_dump($valorNuevo1);
         //--------------------
        echo "<hr>";
         $valor="Hola123.78Manolo";
        $valorNuevo=(int) $valor;
        $valorNuevo1=(float) $valor;
         echo "<br>";
        var_dump($valorNuevo);
         echo "<br>";
        var_dump($valorNuevo1);
        ///----------------------------------
        $numero=345.67;
        $numeroEntero=(int) $numero;
        // casting a bool
        $dato1=23;
        $dato2=0;
        $dato3=23.45;
        $dato4=0.0;
        $dato5="Hola";
        $dato6="";
        $dato1B=(bool) $dato1;
        $dato2B=(bool) $dato2;
        $dato3B=(bool) $dato3;
        $dato4B=(bool) $dato4;
        $dato5B=(bool) $dato5;
        $dato6B=(bool) $dato6;

        var_dump($dato1B);
        var_dump($dato2B);
        var_dump($dato3B);
        var_dump($dato4B);
        var_dump($dato5B);
        var_dump($dato6B);
    ?>
    <h2> Contenidos </h2>
    <?php
        echo "<br>Contenidos"
    ?>

</body>
</html>