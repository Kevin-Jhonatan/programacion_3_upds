<?php
    /* Problema Nº7 Crea una clase llamada cuenta que tendrá los siguientes atributos:
    titular y cantidad (opcional enteros o decimales)
    Crear dos constructores que cumpla lo anterior
    Crear sus métodos getter and setter.
    Tendrá dos métodos:
    Ingresar(double cantidad): se ingresa una cantidad a la cuenta, si la
    cantidad introducida es negativa, no se hará nada.
    Retirar(double cantidad): se retira una cantidad a la cuenta, si restando la
    cantidad actual a la que nos pasan es negativa la cantidad de la cuenta
    pasa a ser 0. */
    class Cuenta{
        public $titular;
        public $cantidad;
        function __construct($titular, $cantidad){
            $this->titular = $titular;
            $this->cantidad = $cantidad;
        }
        function ingresarCantidad($montoSumar){
            print("<center><h1>Depositar dinero</h1></center>");
            if($montoSumar <= 0){
                print("<b>Lo siento ".$this->titular." pero el número ingresado es inválido o tiene un valor negativo = <mark>".$montoSumar.
                " Bs</mark></b><br><b>Su saldo actual se mantiene = <b><mark>".$this->cantidad." Bs</mark></b><br>");
            }
            else{
                $cantidadActual = $montoSumar + $this->cantidad;
                print("<b>".$this->titular." la cantidad ingresada es correcta se depositara en su cuenta = <mark>".$montoSumar.
                " Bs</mark></b><br><b>".$this->titular." su saldo Actual es = <mark>".$cantidadActual." Bs</mark></b><br>");
            }
        }
        function retirarCantidad($montoRestar){
            print("<center><h1>Retirar dinero</h1></center>");
            if($montoRestar >= 1){
                $cantidadActual = $this->cantidad - $montoRestar;
                print("<br><b>".$this->titular." la cantidad ingresada es correcta se retirara <mark>".$montoRestar.
                " Bs</mark> de su cuenta</b><br><b>".$this->titular." su saldo Actual es = <mark>".$cantidadActual." Bs</mark></b><br>");
            }
            if($montoRestar <= 0){
                $cantidadVacia = 0;
                print("<br><b>".$this->titular." la cantidad ingresada es incorrecta o = <mark>".$montoRestar.
                " Bs</mark></b><br><b>".$this->titular." su saldo Actual pasará a ser = <mark>".$cantidadVacia." Bs</mark></b><br>");
            }
        }
        function __destruct(){}
    }
    if(isset($_POST['transaccion'])){
        $deposito = $_POST['deposito'];
    }
    if(isset($_POST['transaccion'])){
        $retiro = $_POST['retiro'];
    }
    if(isset($_POST['transaccion'])){
        $titular = $_POST['titular'];
        $montoActual = $_POST['monto'];
    }
    $cuenta = new Cuenta($titular, $montoActual);
    $cuenta->ingresarCantidad($deposito);
    $cuenta->retirarCantidad($retiro);
    
?>