<?php
    /* Problema Nº1 
    Un banco tiene 3 clientes que pueden hacer depósitos y extracciones, también el
    banco requiere que al final del día calcule la cantidad de dinero que hay depositada.
    Clases a utilizar:
    Cliente y Banco
    Atributos y Métodos a utilizar:
    Cliente - Atributos
    Nombre
    Monto
    Cliente – Métodos
    Constructor
    Depositar
    Extraer
    retornarMonto
    Banco – Atributos
    3 clientes (Objetos de la clase Cliente)
    Banco – Métodos
    Constructor
    Operar
    depositosTotales */
    class Cliente{
        public $nombre;
        public $monto;
        function __construct($nombre, $monto){
            $this->nombre = $nombre;
            $this->monto = $monto;
        }
        function depositar($deposito){
            //$this->deposito1 = $deposito1;
            $deposito = $this->monto + $deposito;
            $montoActual = $deposito;
            print("El depósito se realizó exitosamente!!<br>");
            print("<b>Cliente: <mark>".$this->nombre."</mark></b><br>");
            print("<b>Saldo actual: <mark>".$montoActual." Bs</mark></b><br>");
        }
        function retirar($retiro){
            //$this->retirar = $retirar;
            $retiro = $this->monto - $retiro;
            print("El retiro se realizó exitosamente!!<br>");
            print("<b>Cliente: <mark>".$this->nombre."</mark></b><br>");
            print("<b>Saldo actual: <mark>".$retiro." Bs</mark></b><br>");
            return $retiro;
        }
        function __destruct(){}
    }
    class Banco{
        function __contruct(){

        }
        function operar(){

        }
        function depositosTotales(){

        }
        function __destruct(){}
    }
    $cliente1 = new Cliente('Kevin Jhonatan M. Mollo', 8000);
    $cliente2 = new Cliente('Andres Montero', 9000);
    $cliente3 = new Cliente('Pedro Infante', 10000);

    if(isset($_POST['depositar1'])){
        $deposito1 = $_POST['deposito1'];
    }
    if(isset($_POST['depositar2'])){
        $deposito2 = $_POST['deposito2'];
    }
    if(isset($_POST['depositar3'])){
        $deposito3 = $_POST['deposito3'];
    }
    if(isset($_POST['retirar1'])){
        $retiro1 = $_POST['retiro1'];
    }
    if(isset($_POST['retirar2'])){
        $retiro2 = $_POST['retiro2'];
    }
    if(isset($_POST['retirar3'])){
        $retiro3 = $_POST['retiro3'];
    }   
    if(($cliente1->monto > ($cliente1->depositar($deposito1)))&&(isset($_POST['depositar1']))){}
    if(($cliente2->monto > ($cliente2->depositar($deposito2)))&&(isset($_POST['depositar2']))){}
    if(($cliente3->monto > ($cliente3->depositar($deposito3)))&&(isset($_POST['depositar3']))){}
    print("<br>");
    if(($cliente1->monto > ($cliente1->retirar($retiro1)))&&(isset($_POST['retirar1']))){}
    if(($cliente2->monto > ($cliente2->retirar($retiro2)))&&(isset($_POST['retirar2']))){}
    if(($cliente3->monto > ($cliente3->retirar($retiro3)))&&(isset($_POST['retirar3']))){}
?>