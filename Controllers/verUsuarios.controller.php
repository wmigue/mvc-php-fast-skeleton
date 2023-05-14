<?php

require('Models/Conexion.php');

$con = new Conexion();

$usuarios = $con->getUsers();

require('Views/verUsuarios.view.php');

?>