<?php
    /* Problema  8.Desarrollar  o  crear  una  matriz  de  n*m  filas,  
    introducir  los elementos por teclado y luego imprimir la matriz en pantalla. */
    class LlenarMatriz{
        public $dato;
        public $posicion;
        function __construct($dato, $posicion){
            $this->dato = $dato;
            $this->posicion = $posicion;
        }
        function llenarMatriz(){
            $matriz [$this->posicion][$this->posicion]  = $this->dato;
            var_dump($matriz);
        }
    }
    if(isset($_POST['enviar'])){
        $dato = $_POST['dato'];
        $posicion = $_POST['posicion'];
    }
    $matriz = new LlenarMatriz($dato, $posicion);
    $matriz->llenarMatriz();
?>