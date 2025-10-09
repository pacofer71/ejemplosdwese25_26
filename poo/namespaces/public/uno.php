<?php

#use src\admin\Clientes;
use src\Conexion;
use src\users\Clientes as UsersClientes;
use src\users\User;

require __DIR__."/../src/admin/Clientes.php";
require __DIR__."/../src/users/User.php";
require __DIR__."/../src/users/Clientes.php";
require __DIR__."/../src/Conexion.php";

$admin = new src\admin\Clientes("JUan el admin");
$user= new User("Usuario");
$conexion=new Conexion();
$clienteUser=new UsersClientes("kiko");
echo "<br>".$admin::class;
echo "<br>".$user::class;
echo "<br>".$conexion::class;

