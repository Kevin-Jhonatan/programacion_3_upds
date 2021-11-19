<?php
    /* Problema  5.Desarrollar  un  programa  que  permita  cargar  un  vector
      y  luego ordenarlo de manera ascendente o descendente o ambos. */
      class LlenarArray5{
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
    if(isset($_POST['enviar5'])){
        $dato5 = $_POST['dato5'];
        $posicion5 = $_POST['posicion5'];
    }
    $array5 = new LlenarArray5($dato5, $posicion5);
    $array5->llenarArray5();
?>