<?php
  require_once('conexion.php');

  class proovedores
  {
      function principal($producto, $empresa)
      {
          principal = new conexion();
          principal->constructor("localhost","root","123456","panaderia");
          principal->conectar();
          principal->insertarProovedor($producto, $empresa);
      }
      function proovedores()
      {
          $producto = $_POST["producto"];
		      $empresa = $_POST["empresa"];
		      principal($producto, $empresa);
      }
      proovedores();
  }

?>
