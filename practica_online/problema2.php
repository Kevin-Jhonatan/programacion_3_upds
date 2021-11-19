<?php
    /* Problema  2.Desarrollar  un  programa  que  permita  llenar  un  vector,
      luego elegir  una  posición  para  eliminar  el  elemento  de  dicha  posición
        y  luego imprimir el vector por pantalla. */
    class LlenarArray1{
      public $dato;
      public $posicion;
      public $eliminar;
      function __construct($dato, $posicion, $eliminar){
        $this->dato = $dato;
        $this->posicion = $posicion;
        $this->eliminar = $eliminar;
      }
      function llenarArray1(){
        $array [$this->posicion]->dato = $this->dato;
        var_dump($array);
        if($this->posicion == $eliminar){
          print("<br>Se borro el dato en la posicion: ".$this->eliminar."<br>");
          unset($this->dato[$this->posicion]);
        }
      }
  }
  if(isset($_POST['enviar1'])){
    $dato = $_POST['dato1'];
    $posicion = $_POST['posicion1'];
  }
  if(isset($_POST['eliminar'])){
      $eliminar = $_POST['datoDelete'];
  }
  $array1 = new LlenarArray1($dato, $posicion, $eliminar);
  $array1->llenarArray1();
?>