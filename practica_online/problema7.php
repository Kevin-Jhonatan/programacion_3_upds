<?php
    /* Problema  7.Desarrollar  un  programa  que  permita  introducir  por
      teclado  el tamaño del vector y luego llenar el vector aleatoriamente 
      para luego imprimir en pantalla. */
      class LlenarArray7{
        public $dato;
        public $tamaño;
        function __construct($dato, $tamaño){
          $this->dato = $dato;
          $this->tamaño = $tamaño;
        }
        function llenarArray7(){
          for($i = 0; $i< $this->tamaño; $i++){
            $array [$i]->dato = $this->dato;
            var_dump($array);
          }
        }
    }
    if(isset($_POST['enviar7'])){
      $dato7 = $_POST['dato7'];
      $tamaño7 = $_POST['posicion7'];
    }
    $array7 = new LlenarArray7($dato7, $tamaño7);
    $array7->llenarArray7();
?>