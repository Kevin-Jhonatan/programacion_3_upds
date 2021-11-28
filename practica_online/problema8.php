<?php
    /* Problema  8.Desarrollar  o  crear  una  matriz  de  n*m  filas,  
    introducir  los elementos por teclado y luego imprimir la matriz en pantalla. */
    class Matriz{
        public $nombre1;
        public $edad1;
        public $nombre2;
        public $edad2;
        public $nombre3;
        public $edad3;
        public $nombre4;
        public $edad4;
        function __construct($nombre1, $edad1, $nombre2, $edad2, $nombre3, $edad3, $nombre4, $edad4){
            $this->nombre1 = $nombre1;
            $this->edad1 = $edad1;
            $this->nombre2 = $nombre2;
            $this->edad2 = $edad2;
            $this->nombre3 = $nombre3;
            $this->edad3 = $edad3;
            $this->nombre4 = $nombre4;
            $this->edad4 = $edad4;
        }
        function crearMatriz(){
            print("<h1>Vale mencionar que PHP no es un lenguaje tipado por tanto no tiene la opción<br>
            dar el tamaño de matriz o array como sucede en el lenguaje de c#</h1>");
            $matriz = array(
            array($this->nombre1, $this->edad1),
            array($this->nombre2, $this->edad2),
            array($this->nombre3, $this->edad3),
            array($this->nombre4, $this->edad4));
            print("Fila 0 columna 0  valor => <mark>".$matriz[0][0]."<br></mark>");
            print("Fila 0 columna 1  valor => <mark>".$matriz[0][1]."<br></mark>");
            print("Fila 1 columna 0  valor => <mark>".$matriz[1][0]."<br></mark>");
            print("Fila 1 columna 1  valor => <mark>".$matriz[1][1]."<br></mark>");
            print("Fila 2 columna 0  valor => <mark>".$matriz[2][0]."<br></mark>");
            print("Fila 2 columna 1  valor => <mark>".$matriz[2][1]."<br></mark>");
            print("Fila 3 columna 0  valor => <mark>".$matriz[3][0]."<br></mark>");
            print("Fila 3 columna 1  valor => <mark>".$matriz[3][1]."<br></mark>");
        }
    }
    if(isset($_POST['enviar8'])){
        $nombre1 = $_POST['nombre1'];
        $edad1 = $_POST['edad1'];
        $nombre2 = $_POST['nombre2'];
        $edad2 = $_POST['edad2'];
        $nombre3 = $_POST['nombre3'];
        $edad3 = $_POST['edad3'];
        $nombre4 = $_POST['nombre4'];
        $edad4 = $_POST['edad4'];
    }
    $crearMatriz = new Matriz($nombre1, $edad1, $nombre2, $edad2, $nombre3, $edad3, $nombre4, $edad4);
    //$crearMatriz = new Matriz('Kevin', 21, 'Juan', 22, 'Pedro', 33, 'Camila', 44);
    $crearMatriz->crearMatriz();
?>