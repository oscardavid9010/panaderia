
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Clientes </title>
</head>

<body>
</body>
</html>
<?php 
require_once('cliente1.php');
function base($documento, $nombre, $apellido, $correo, $telefono){
		
		$base=new conexion();
		$base->constructor("localhost","root","123456", "panaderia");
		$base->conectar();
		$base->insertar ($documento, $nombre, $apellido, $correo, $telefono);
		}
function cliente(){
		
		$documento=$_POST["documento"];
		$nombre=$_POST["nombre"];
		$apellido=$_POST["documento"];
		$correo=$_POST["correo"];
		$telefono=$_POST["telefono"];
		base($documento, $nombre, $apellido, $correo, $telefono);
		}
	
	cliente();
	
?>
