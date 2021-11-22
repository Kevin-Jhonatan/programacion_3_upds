<?php
    /* Problema Nº3 Realizar un programa con la clase
    Alumno y definir como atributos nombre y su
    edad, en el constructor realizar el ingreso de datos, definir otros
    dos métodos para imprimir los datos ingresados y un mensaje si es mayor
    de edad o no. */
    class Alumno{
        public $nombre;
        public $edad;
        function __construct($nombre, $edad){
            $this->nombre = $nombre;
            $this->edad = $edad;
        }
        function mayorEdad(){
            if($this->edad >= 18){
                print("Felicidades <b>".$this->nombre."</b> es mayor de edad con <b>".$this->edad." años</b>"); 
            }
        }
        function menorEdad(){
            if($this->edad < 18){
                print("Lo siento <b>".$this->nombre."</b>  pero es menor de edad con <b>".$this->edad." años</b>"); 
            }
        }
        function __destruct(){}
    }
    if(isset($_POST['datos'])){
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
    }
    $alumno = new Alumno($nombre, $edad);
    $alumno->mayorEdad();
    $alumno->menorEdad();
?>