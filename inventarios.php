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
class conexion{
	function conecta(){
$conexion=mysql_connect("localhost","root","123456");
$db=mysql_select_db("panaderia");

	}}
	class inventario{
	function inserta(){
		$serial=$_POST["serial"];
		$nombre=$_POST["nombre"];
		$valor=$_POST["valor"];
		$cantidad=$_POST["cantidad"];
		$proveedor=$_POST["proveedor"];
		$insercion=mysql_query("insert into inventario values ('".$serial."','".$nombre."','".$valor."','".$cantidad."','".$proveedor."')");
		echo '<h1>Datos Ingresados Correctamente</h1>';
		}
	
	}
	@$conexion= new conexion;
   @$conecta->conecta();
   @$recoge= new inventario;
   @$inserta->inserta();

?>
