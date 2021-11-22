<?php
    /* Problema Nº4 Realizar un programa con una clase Factura y otra clase
    Presupuesto. La Factura tendrá atributos como: número, fecha, datos del
    cliente, líneas de detalles,
    porcentaje de iva, base imponible, cuota y total.
    El presupuesto será parecido, aunque en este deberá incluir también fecha de
    caducidad, pero no habrá iva, ni base imponible, ni cuota.
    Como ambos documentos van a ser similares, utilizar herencia. */
    class Factura{
        public $numero;
        public $fecha;
        public $datosCliente;
        public $lineasDetalle;
        public $iva;
        public $baseImponible;
        public $cuota;
        public $total;
        function __construct(){}
        function __destruct(){}
    }
    class Presupuesto extends Factura{
        public $caducidad;
        function __construct($caducidad, $numero, $fecha, $datosCliente, $lineasDetalle, $total){
            $this->caducidad = $caducidad;
            parent::__construct($numero, $fecha, $datosCliente, $lineasDetalle, $total);
        }
        function __destruct(){}
    }
    $factura = new Factura($numero, $fecha, $datosCliente, $lineasDetalle, $iva, $baseImponible, $cuota, $total);
    $presupuesto = new Presupuesto($caducidad, $this->numero, $this->fecha, $this->datosCliente, $this->lineasDetalle, $this->total);
?>