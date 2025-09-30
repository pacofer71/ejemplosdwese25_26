<?php 
//include o require include_once, require_once
require "utils.php";
$nombre=sanearCadenas($_POST['nombre']);
echo $nombre;