<?php
  /* Problema  6.Desarrollar  un  programa  que  permita  cargar  un  vector
    y  luego buscar un elemento en el vector cargado, imprimir el elemento
    encontrado y su posición. */
  class BuscarDato{
    public $dato1;
    public $dato2;
    public $dato3;
    public $dato4;
    public $datoBuscar;
    function __construct($dato1, $dato2, $dato3, $dato4, $datoBuscar){
      $this->dato1 = $dato1;
      $this->dato2 = $dato2;
      $this->dato3 = $dato3;
      $this->dato4 = $dato4;
      $this->datoBuscar = $datoBuscar;
    }
    function buscarPosicion(){
      $informacion = array($this->dato1, $this->dato2, $this->dato3, $this->dato4);
      //var_dump($informacion);
      var_export($informacion);
      if($this->dato1 === $this->datoBuscar){
        $indice = array_search($this->dato1, $informacion);
        print("<br><b>El valor buscado es <mark>".$this->dato1."</mark> y esta en la posición <mark>".$indice."</b></mark>");
      }
      if($this->dato2 === $this->datoBuscar){
        $indice = array_search($this->dato2, $informacion);
        print("<br><b>El valor buscado es <mark>".$this->dato2."</mark> y esta en la posición <mark>".$indice."</b></mark>");
      }
      if($this->dato3 === $this->datoBuscar){
        $indice = array_search($this->dato3, $informacion);
        print("<br><b>El valor buscado es <mark>".$this->dato3."</mark> y esta en la posición <mark>".$indice."</b></mark>");
      }
      if($this->dato4 === $this->datoBuscar){
        $indice = array_search($this->dato4, $informacion);
        print("<br><b>El valor buscado es <mark>".$this->dato4."</mark> y esta en la posición <mark>".$indice."</b></mark>");
      }
    }
  }
  if(isset($_POST['enviar6'])){
    $dato1 = $_POST['dato1'];
    $dato2 = $_POST['dato2'];
    $dato3 = $_POST['dato3'];
    $dato4 = $_POST['dato4'];
    $datoBuscar = $_POST['datoBuscar'];
  }
  $buscar = new BuscarDato($dato1, $dato2, $dato3, $dato4, $datoBuscar);
  //$buscar = new BuscarDato('Juan', 'Kevin', 'Camila', 'Brenda', 'Brenda');
  $buscar->buscarPosicion();
?>