<?php

include ('conex.php');


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$entradas=$_POST['entradas'];
$tipo =$_POST['tipo'];



//echo $nombre;
//echo $apellido;
//echo $habilidad;


$insertar="insert into compra_tickets (nombre,apellido,correo,entradas,tipo) values ('$nombre','$apellido','$correo','$entradas','$tipo')";
//echo $insertar;
   $conexion->query($insertar);



?>