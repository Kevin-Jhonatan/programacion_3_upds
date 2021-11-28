<?php
  /* Problema  5.Desarrollar  un  programa  que  permita  cargar  un  vector
    y  luego ordenarlo de manera ascendente o descendente o ambos. */
  class Ordenar{
    public $dato1;
    public $dato2;
    public $dato3;
    public $dato4;
    function __construct($dato1, $dato2, $dato3, $dato4){
      $this->dato1 = $dato1;
      $this->dato2 = $dato2;
      $this->dato3 = $dato3;
      $this->dato4 = $dato4;
    }
    function ordenAscendente(){
      print("<center><b>Ordenamos de manera Ascendente incluso si es texto recuerde que si es mayúscula es superior a una minúscula<br></center>");
      $numero = array($this->dato1, $this->dato2, $this->dato3, $this->dato4);
      sort($numero);
      foreach ($numero as $orden){
        print("<center>".$orden."</center><br>");
      }
    }
    function ordenDescendente(){
      print("<center><b>Ordenamos de manera Descendente  incluso si es texto recuerde que si es mayúscula es superior a una minúscula<br></center>");
      $numero = array($this->dato1, $this->dato2, $this->dato3, $this->dato4);
      rsort($numero);
      foreach ($numero as $orden){
        print("<center>".$orden."</center><br>");
      }
    }
  }
  if(isset($_POST['enviar5'])){
    $dato1 = $_POST['dato1'];
    $dato2 = $_POST['dato2'];
    $dato3 = $_POST['dato3'];
    $dato4 = $_POST['dato4'];
  }
  $ordenar = new Ordenar($dato1, $dato2, $dato3, $dato4);
  //$ordenar = new Ordenar(1, 4, 5, 2);
  $ordenar->ordenAscendente();
  $ordenar->ordenDescendente();
?>