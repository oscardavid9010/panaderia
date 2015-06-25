<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>conexion</title>
</head>

<body>
</body>
</html>
<?php
 
class conexion {
	private $_servidor;
	private $_usuario;
	private $_clave;
	private $_base;
 
	function constructor ($servidor, $usuario, $clave, $base){
		
		$this->_servidor=$servidor;
		$this->_usuario=$usuario;
		$this->_clave=$clave;
		$this->_base=$base;
		}
	function conectar() {
				
		$conexion=mysql_connect($this->_servidor,$this->_usuario,$this->_clave)or die(mysql_error());
		mysql_select_db($this->_base, $conexion)or die(mysql_error());
		}
    
    function insertar ($serial, $nombre, $valor, $cantidad, $proveedor){
		
		 $query="insert into inventario(serial_producto, nombre_producto, valor_producto, disponibilidad, id_proveedor) values ('".$serial."','".$nombre."','".$valor."','".$cantidad."','".$proveedor."')";
		mysql_query($query);
	      echo '<h1><big>Producto Insertado</big></h1>'; 
		}

    function insertarcotizacion($fecha,$documento,$serial,$cantidad,$precio){
       $query="insert into cotizacion(fecha,documento,serial_producto,cantidad,precio)values('".$fecha."','".$documento."','".$serial."','".$cantidad."','".$precio."')";
    	mysql_query($query);
echo '<h1><big>Cotizacion Insertada</big></h1>'; 
       
        }
}


?> 
