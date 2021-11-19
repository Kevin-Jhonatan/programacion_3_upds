<?php
    /* Problema  4.Desarrollar  un  programa  que  permita  cargar  los  nombres
      de  5 operarios y sus sueldos respectivos, luego mostrar el sueldo mayor y
      el nombre del operario. */
    class Operario{
      public $nombre;
      public $sueldo;
      function __construct($nombre, $sueldo){
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
      }
      function llenarArray4(){
        for($i = 0; $i < 6; $i++){
          $this->nombre = $nombre;
          $array4 [$i]->$nombre = $this->sueldo;
          var_dump($array4);
          /* El metodo max te ayuda a saber el numero mayor */
          print(max($array4[$i]));
        }
      }
    }
    if(isset($_POST['enviar4'])){
      $nombre1 = $_POST['name1'];
      $edad1 = $_POST['sueldo1'];

      $nombre2 = $_POST['name2'];
      $edad2 = $_POST['sueldo2'];

      $nombre3 = $_POST['name2'];
      $edad3 = $_POST['sueldo2'];

      $nombre4 = $_POST['name3'];
      $edad4 = $_POST['sueldo3'];

      $nombre5 = $_POST['name4'];
      $edad5 = $_POST['sueldo4'];

      $nombre6 = $_POST['name5'];
      $edad6 = $_POST['sueldo5'];
    }
    $operario = new Operario($nombre1, $sueldo1);
    $operario = new Operario($nombre2, $sueldo2);
    $operario = new Operario($nombre3, $sueldo3);
    $operario = new Operario($nombre4, $sueldo4);
    $operario = new Operario($nombre5, $sueldo5);
    $operario->llenarArray4();
?>