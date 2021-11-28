<?php
    /* Problema 9.Desarrollar  un  programa  con  la  siguiente  jerarquía  
    de  herencia mostrada  en  la  imagen,  indicar  la  visibilidad  de  
    los  atributos  de  la  clase ProductoBancario en las clases cuentaJoven 
    e Hipoteca. */
    class ProductoBancario{
        public $cliente;
        public $saldo;
        public $numProducto;
        function __construct($cliente, $saldo, $numProducto){
            $this->cliente = $cliente;
            $this->saldo = $saldo;
            $this->numProducto = $numProducto;
        }
        function productoBancario(){
            print("<center><h1 style='color:green'>Producto Bancario</h1></center>");
            print("<h1>Los que ofrecemos como banco es lo siguiente</h1>");
            print("<b>Ofrecemos Cuentas Bancarias<br>");
            print("Ofrecemos Prestamos<br>");
            print("Ofrecemos Cuentas Bancarias Jóvenes<br>");
            print("Ofrecemos opciones de Hipotecas<br>");
        }
        function __destruct(){}
    }
    class Cuenta extends ProductoBancario{
        public $numCuenta;
        function __construct($numCuenta, $cliente, $saldo, $numProducto){
            $this->numCuenta = $numCuenta;
            parent::__construct($cliente, $saldo, $numProducto);
        }
        function cuenta(){
            print("<center><h1 style='color:green'>Cuenta</h1></center>");
            print("<h1>Número de Cuenta: <mark>".$this->numCuenta."</mark></h1>");
            print("<h1>Cliente: <mark>".$this->cliente."</mark></h1>");
            print("<h1>Saldo actual: <mark>".$this->saldo." Bs</mark></h1>");
            print("<h1>Cantidad de servicios ofrecidos: <mark>".$this->numProducto." Servicios</mark></h1>");
        }
        function __destruct(){}
    }
    class Prestamo extends ProductoBancario{
        public $prestamo;
        function __construct($prestamo, $cliente, $saldo, $numProducto){
            $this->prestamo = $prestamo;
            parent::__construct($cliente, $saldo, $numProducto);
        }
        function prestamo(){
            print("<center><h1 style='color:green'>Prestamos</h1></center>");
            print("<h1>Prestamos a la que puede acceder: ".$this->prestamo." Bs</h1>");
            print("<h1>Con intereses del 3 % </h1><br>");
        }
        function __destruct(){}
    }
    class CuentaJoven extends ProductoBancario{
        public $edad;
        function __construct($edad, $cliente, $saldo, $numProducto){
            $this->edad = $edad;
            parent::__construct($cliente, $saldo, $numProducto);
        }
        function cuentaJoven(){
            print("<center><h1 style='color:green'>Cuenta Joven</h1></center>");
            print("<h1>Si tienes una cuenta Joven accedes a muchos beneficios como a sorteos de 10.000 Bs mensuales</h1><br>");
            print("<h1>Accedes a prestamos con intereses muy bajos</h1><br>");
            print("<h1>Cliente: <mark>".$this->cliente."</mark></h1>");
            print("<h1>Edad máxima: <mark>".$this->edad." Años</mark></h1>");
            print("<h1>Saldo actual: <mark>".$this->saldo." Bs</mark></h1>");
            print("<h1>Cantidad de servicios ofrecidos: <mark>".$this->numProducto." Servicios</mark></h1>");
        }
        function __destruct(){}
    }
    class Hipoteca extends ProductoBancario{
        public $hipoteca;
        function __construct($hipoteca, $cliente, $saldo, $numProducto){
            $this->hipoteca = $hipoteca;
            parent::__construct($cliente, $saldo, $numProducto);
        }
        function hipoteca(){
            print("<center><h1 style='color:green'>Hipoteca</h1></center>");
            print("<h1>Se aceptan hipotecas de Casas, Autos, Motos, Terrenos, Electrodomesticos</h1><br>");
            print("<h1>Cliente: <mark>".$this->cliente."</mark></h1>");
            print("<h1>Cantidad maxima de hipoteca: <mark>".$this->hipoteca."</mark></h1>");
            print("<h1>Saldo actual: <mark>".$this->saldo." Bs</mark></h1>");
            print("<h1>Cantidad de servicios ofrecidos: <mark>".$this->numProducto." Servicios</mark></h1>");
        }
        function __destruct(){}
    }
    if(isset($_POST['enviar9'])){
        $cliente = $_POST['cliente'];
        $saldo = $_POST['saldo'];
        $numProducto = $_POST['producto'];
        $numCuenta = $_POST['cuenta'];
        $prestamo = $_POST['prestamo'];
        $edad = $_POST['edad'];
        $hipoteca = $_POST['hipoteca'];
    }
    //$productoBancario = new ProductoBancario();
    $productoBancario = new ProductoBancario($cliente, $saldo, $numProducto);
    $productoBancario->productoBancario();
    $cuenta = new Cuenta($numCuenta ,$productoBancario->cliente, $productoBancario->saldo, $productoBancario->numProducto);
    $cuenta->cuenta();
    $prestamo = new Prestamo($prestamo, $productoBancario->cliente, $productoBancario->saldo, $productoBancario->numProducto);
    $prestamo->prestamo();
    $cuentaJoven = new CuentaJoven($edad, $productoBancario->cliente, $productoBancario->saldo, $productoBancario->numProducto);
    $cuentaJoven->cuentaJoven();
    $hipoteca = new Hipoteca($hipoteca, $productoBancario->cliente, $productoBancario->saldo, $productoBancario->numProducto);
    $hipoteca->hipoteca();

?>