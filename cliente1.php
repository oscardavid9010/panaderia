<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>registro de clientes</title>
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
		
		$this -> _servidor= $servidor;
		$this -> _usuario= $usuario;
		$this -> _clave= $clave;
		$this -> _base= $base;
		}
	function conectar() {
				
		$conexion=mysql_connect($this->_servidor,$this->_usuario,$this->_clave)or die(mysql_error());
		mysql_select_db($this->_base, $conexion)or die(mysql_error());
		}
	    function insertar ($documento, $nombre, $apellido, $correo, $telefono){
		
		 $query="insert into cliente(documento, nombre, apellido, correo, telefono) values ('".$documento."','".$nombre."','".$apellido."','".$correo."','".$telefono."')";
		mysql_query($query);
		echo 'Registro Exitoso :)';
		}
}
?> 
