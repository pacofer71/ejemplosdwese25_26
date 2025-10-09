<?php
/*
require_once __DIR__."/../src/Plan.php";
require_once __DIR__."/../src/Cliente.php";
require_once __DIR__."/../src/PlanStarter.php";
require_once __DIR__."/../src/PlanBronce.php";
require_once __DIR__."/../src/PlanPlata.php";
require_once __DIR__."/../src/PlanOro.php";
require_once __DIR__."/../src/PlanFactory.php";
*/
spl_autoload_register(function(string $clase){
    //die($clase);
    #$ruta= __DIR__."/../src/". $clase.".php";
    //die($ruta);
    require_once __DIR__."/../src/". $clase.".php";
});

$manolo=new Cliente(2000.67);
$ana=new Cliente(45000);
$rata=new Cliente(16000);
$planManolo=(new PlanFactory)->getPlan($manolo);
$planAna=(new PlanFactory)->getPlan($ana);
$planRata=(new PlanFactory)->getPlan($rata);
echo "El plan de \$manolo es: ".$planManolo::class."<br>";
echo "El plan de \$ana es: ".$planAna::class."<br>";
echo "El plan de \$rata es: ".$planRata::class."<br>";
echo "<hr>";
echo "El precio que pagará manolo es de: ".$manolo->getPrecioFinal($planManolo->getDescuento())." €<br>";
echo "El precio que pagará ana es de: ".$ana->getPrecioFinal($planAna->getDescuento())." €<br>";
echo "El precio que pagará rata es de: ".$rata->getPrecioFinal($planRata->getDescuento())." €<br>";
