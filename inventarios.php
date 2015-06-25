
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Inventarios</title>
</head>

<body>
</body>
</html>
<?php 
require_once('conexion.php');
function base($serial, $nombre, $valor, $cantidad, $proveedor){
		
		$base=new conexion();
		$base->constructor("localhost","admi","123456", "panaderia");
		$base->conectar();
		$base->insertar ($serial, $nombre, $valor, $cantidad, $proveedor);
		}
function inventario(){
		
		$serial=$_POST["serial"];
		$nombre=$_POST["nombre"];
		$valor=$_POST["valor"];
		$cantidad=$_POST["cantidad"];
		$proveedor=$_POST["proveedor"];
		base($serial, $nombre, $valor, $cantidad, $proveedor);
		}
	
	inventario();
	
?>
