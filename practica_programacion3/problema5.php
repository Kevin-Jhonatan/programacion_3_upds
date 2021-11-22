<?php
     /* Problema Nº5 Construir dos clases: la clase Dólar y la clase PesoBoliviano.
    Tienes que hacer que los objetos de estas clases se puedan realizar la
    conversión de la moneda tanto de dólar a pesoBoliviano como de pesoBoliviano
    a Dolar, teniendo presente que 1 Dolar = 6.97 pesosBolivianos. */
    class Dolar{
        public $dolar;
        function __construct($dolar){
            $this->dolar = $dolar;
        }
        function cambioBoliviano(){
            $montoBolivianos = $this->dolar * 6.96;
            print("El monto de <b>".$this->dolar." $</b> dolar Equivale a = <b>".$montoBolivianos." Bs</b><br>");
        }
        function __destruct(){}
    }
    class Boliviano extends Dolar{
        public $boliviano;
        function __construct($boliviano){
            $this->boliviano = $boliviano;
        }
        function cambioDolar(){
            $montoDolares = $this->boliviano / 6.96;
            print("El monto de <b>".$this->boliviano." Bs</b> bolivianos Equivale a = <b>".$montoDolares." $ </b>");
        }
        function __destruct(){}
    }
    if(isset($_POST['cambiar'])){
        $cantidadDolar = $_POST['dolar'];
    }
    if(isset($_POST['cambiar'])){
        $cantidadBoliviano = $_POST['boliviano'];
    }
    $dolar = new Dolar($cantidadDolar);
    $boliviano = new Boliviano($cantidadBoliviano);
    $dolar->cambioBoliviano();
    $boliviano->cambioDolar();
?>