<?php 
   include("conexion.php");

   function guardar($documento, $seri, $cant, $pre){
   	  $conexionbase= new conexion("localhost","root","1234","prueba");
   	  $conexionbase->conectar();
   	  $conexionbase->insertar($documento, $seri, $cant, $pre);
   }

   function recolectar(){
   	$documento=$_POST['documento'];
   	$serial=$_POST['serialp'];
   	$cantidad=$_POST['cantidad'];
   	$precio=$_POST['precio'];


    guardar($documento, $seri, $cant, $pre)
   
   
}

 ?>
