<?php
    /* Problema  4.Desarrollar  un  programa  que  permita  cargar  los  nombres
      de  5 operarios y sus sueldos respectivos, luego mostrar el sueldo mayor y
      el nombre del operario. */
  class Empleado{
    public $nombre1;
    public $sueldo1;
    public $nombre2;
    public $sueldo2;
    public $nombre3;
    public $sueldo3;
    public $nombre4;
    public $sueldo4;
    public $nombre5;
    public $sueldo5;
    function __construct($nombre1, $sueldo1, $nombre2, $sueldo2, $nombre3, $sueldo3, $nombre4, $sueldo4, $nombre5, $sueldo5){
      $this->nombre1 = $nombre1;
      $this->sueldo1 = $sueldo1;
      $this->nombre2 = $nombre2;
      $this->sueldo2 = $sueldo2;
      $this->nombre3 = $nombre3;
      $this->sueldo3 = $sueldo3;
      $this->nombre4 = $nombre4;
      $this->sueldo4 = $sueldo4;
      $this->nombre5 = $nombre5;
      $this->sueldo5 = $sueldo5;
    }
    function llenarEmpleado(){
      $empleado = array($this->nombre1, $this->sueldo1, $this->nombre2, $this->sueldo2, $this->nombre3, 
      $this->sueldo3, $this->nombre4, $this->sueldo4, $this->nombre5, $this->sueldo5);
      $nombreSueldo = array_chunk($empleado, 2);
      var_dump($nombreSueldo);
    }
    function sueldoMayor(){
      if(($this->sueldo1 > $this->sueldo2)&&($this->sueldo1 > $this->sueldo3)&& ($this->sueldo1 > $this->sueldo4)&&($this->sueldo1 > $this->sueldo5)){
        print("<br>El sueldo mayor es de <b>".$this->nombre1."</b> con una cantidad de <b>".$this->sueldo1." Bs</b>");
      }
      if(($this->sueldo2 > $this->sueldo1)&&($this->sueldo2 > $this->sueldo3)&& ($this->sueldo2 > $this->sueldo4)&&($this->sueldo2 > $this->sueldo5)){
        print("<br>El sueldo mayor es de <b>".$this->nombre2."</b> con una cantidad de <b>".$this->sueldo2." Bs</b>");
      }
      if(($this->sueldo3 > $this->sueldo2)&&($this->sueldo3 > $this->sueldo1)&& ($this->sueldo3 > $this->sueldo4)&&($this->sueldo3 > $this->sueldo5)){
        print("<br>El sueldo mayor es de <b>".$this->nombre3."</b> con una cantidad de <b>".$this->sueldo3." Bs</b>");
      }
      if(($this->sueldo4 > $this->sueldo2)&&($this->sueldo4 > $this->sueldo3)&& ($this->sueldo4 > $this->sueldo1)&&($this->sueldo4 > $this->sueldo5)){
        print("<br>El sueldo mayor es de <b>".$this->nombre4."</b> con una cantidad de <b>".$this->sueldo4." Bs</b>");
      }
      if(($this->sueldo5 > $this->sueldo2)&&($this->sueldo5 > $this->sueldo3)&& ($this->sueldo5 > $this->sueldo4)&&($this->sueldo5 > $this->sueldo1)){
        print("<br>El sueldo mayor es de <b>".$this->nombre5."</b> con una cantidad de <b>".$this->sueldo5." Bs</b>");
      }
    }
  }
  if(isset($_POST['enviar4'])){
    $nombre1 = $_POST['name1'];
    $sueldo1 = $_POST['sueldo1'];

    $nombre2 = $_POST['name2'];
    $sueldo2 = $_POST['sueldo2'];

    $nombre3 = $_POST['name3'];
    $sueldo3 = $_POST['sueldo3'];

    $nombre4 = $_POST['name4'];
    $sueldo4 = $_POST['sueldo4'];

    $nombre5 = $_POST['name5'];
    $sueldo5 = $_POST['sueldo5'];
  }
  $operario = new Empleado($nombre1, $sueldo1, $nombre2, $sueldo2, $nombre3, $sueldo3, $nombre4, $sueldo4, $nombre5, $sueldo5);
  //$operario = new Empleado(A, 1111, B, 222, C, 33, D, 44, E, 55);
  $operario->llenarEmpleado();
  $operario->sueldoMayor();
?>