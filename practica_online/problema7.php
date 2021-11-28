<?php
  /* Problema  7.Desarrollar  un  programa  que  permita  introducir  por
    teclado  el tamaño del vector y luego llenar el vector aleatoriamente 
    para luego imprimir en pantalla. */
  class OrdenAleatorio{
    public $tamaño1;
    public $tamaño2;
    public $tamaño3;
    function __construct($tamaño1, $tamaño2, $tamaño3){
      $this->tamaño1 = $tamaño1;
      $this->tamaño2 = $tamaño2;
      $this->tamaño3 = $tamaño3;
    }
    function crearArray(){
      $numAleatorio = mt_rand(1, $this->tamaño1);
      $numAleatorio1 = mt_rand(1, $this->tamaño2);
      $numAleatorio2 = mt_rand(1, $this->tamaño3);
      $vector = array($numAleatorio, $numAleatorio1, $numAleatorio2);
      print ("<h1> Número aleatorio del 1 al <mark>".$this->tamaño1."</mark> => <mark>".$vector[0]."</h1><br>");
      print ("<h1> Número aleatorio del 1 al <mark>".$this->tamaño2."</mark> => <mark>".$vector[1]."</h1><br>");
      print ("<h1> Número aleatorio del 1 al <mark>".$this->tamaño3."</mark> => <mark>".$vector[2]."</h1><br>");
      print ("<h1>Recuerde que cada que actulize el array se llena con números aleatorios".
      " dentro del rango que puso  en el tamaño1, tamaño2 y tamano3</h1>");
      var_dump($vector);
    }
  }
  if(isset($_POST['enviar7'])){
    $tamaño1 = $_POST['tamaño1'];
    $tamaño2 = $_POST['tamaño2'];
    $tamaño3 = $_POST['tamaño3'];
  }
  $crearArray = new OrdenAleatorio($tamaño1, $tamaño2, $tamaño3);
  //$crearArray = new OrdenAleatorio(50, 100, 150);
  $crearArray->crearArray();
?>