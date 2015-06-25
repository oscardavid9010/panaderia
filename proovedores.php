<?php

  class conexion // Conexion a la base de datos
  {
    private $_servidor;
    private $_usuario;
    private $_clave;
    private $_base;

    function constructor($servidor, $usuario, $clave, $base)
    {
        $this->_servidor = $servidor;
        $this->_usuario = $usuario;
        $this->_clave = $clave;
        $this->_base = $base;
    }

    function conectar()
    {
        $conexion = mysql_connect($this->_servidor,$this->_usuario,$this->_clave)or die(mysql_error());
        mysql_select_db($this->_base, $conexion)or die(mysql_error());
    }

    function insertar($nombre, $empresa)
    {
        $query = "INSERT INTO proovedor(producto, nombre_empresa) VALUES ('".$producto."','".$empresa."')";
        mysql_query($query);
    }
  }

?>
