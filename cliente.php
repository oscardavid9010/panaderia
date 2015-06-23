<!DOCTYPE html>
<html lang="es"> 
<head>
	<meta charset="utf-8">
	<title> Registro de clientes</title>


<?php
class cliente {
  private $Registrocliente;
  public function inicializar($nom)
  {
    $this->nombre=$nom;
  }
  public function imprimir()
  {
    echo $this->nombre;
    echo '<br>';
  }
}
$documento=$_POST['documento'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];

public function registro_cliente($documento,$nombre,$apellido,$correo,$telefono){
mysql_query("update panaderia set doc='$documento',nom_cli='$nombre',ape_cli='$apellido',correo_cli='$correo',tel_cli='$telefono'", conectar::con());

?>
</body>
</html>
