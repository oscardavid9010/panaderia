<?php
  class proovedor 
  {
    private $producto;
    private $nombreEmpresa;
    public function inicializar($nom)
    {
      $this->producto = $nom;
    }
    public function imprimir()
    {
      echo $this->producto;
      echo '<br>';
    }
    public function nombreEmpresa($empresa)
    {
      $this->nombreEmpresa = $empresa;   
    }
  }

  $nombreEmpresa = new nombreEmpresa();
  $nombreEmpresa->nombreEmpresa('');
  $nombreEmpresa->imprimir();


  $producto1 = new producto();
  $producto1->inicializar('Arroz');
  $producto1->imprimir();
  
  $producto2 = new producto();
  $producto2->inicializar('Lenteja');
  $producto2->imprimir();

  $producto3 = new producto();
  $producto3-> inicializar('Frijol ');
  $producto3-> imprimir();
?>
