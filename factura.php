<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
</body>
</html>

<?php
class conexion {
	function cone(){
	mysql_connect("localhost","root","123456");
	mysql_select_db("panaderia");
	}
	}

   
	

class factura{
	function registrofactura() {
		$id=$_POST['id'];
		$docu=$_POST['docu'];
		$serial=$_POST['serial'];
		$cant=$_POST['cant'];
		$precio=$_POST['pre'];
		$nom=$_POST['nom'];
		$fecha=$_POST['fecha'];
		
		$registro=mysql_query("insert into factura values('".$id."','".$docu."','".$serial."','".$cant."','".$precio."','".$nom."','".$fecha."')");
		
	echo '
	<script type="text/javascript"> 
echo "datos ingresados";
window.open("factura.html","_self");

</script>
	
	
	
	
	';
	
	
	}
	
	
	
	
	
	
	
	
	}// cierre factura
	
	$conexion = new conexion;
	$cone-> cone();
	$factura=new factura;
	$registro-> registrofactura();
	
	




?>
