<?php
    /* Problema  6.Desarrollar  un  programa  que  permita  cargar  un  vector
      y  luego buscar un elemento en el vector cargado, imprimir el elemento
      encontrado y su posición. */
      class LlenarArray6{
        public $dato;
        public $posicion;
        function __construct($dato, $posicion){
          $this->dato = $dato;
          $this->posicion = $posicion;
        }
        function llenarArray(){
          $array [$this->posicion]->dato = $this->dato;
          var_dump($array);
        }
    }
    if(isset($_POST['enviar6'])){
        $dato6 = $_POST['dato6'];
        $posicion6 = $_POST['posicion6'];
    }
    $array6 = new LlenarArray6($dato6, $posicion6);
    $array6->llenarArray6();
?>