<?php
    /* Problema Nº2 Realizar un programa que ingrese los 
    sueldos de 5 operarios en un vector, realizar
    la creación y carga del vector en el Constructor. */
    class Sueldo{
        public $sueldo1;
        public $sueldo2;
        public $sueldo3;
        public $sueldo4;
        public $sueldo5;
        function __construct($sueldo1, $sueldo2, $sueldo3, $sueldo4, $sueldo5){
            $this->sueldo1 = $sueldo1;
            $this->sueldo1 = $sueldo2;
            $this->sueldo1 = $sueldo3;
            $this->sueldo1 = $sueldo4;
            $this->sueldo1 = $sueldo5;
            $sueldos = ['Sueldo1'=>$sueldo1, 'Sueldo2'=>$sueldo2, 'Sueldo3'=>$sueldo3, 'Sueldo4'=>$sueldo4, 'Sueldo5'=>$sueldo5];
            var_dump($sueldos);
        }
        function __destruct(){}
    }
    //$sueldo = new Sueldo($sueldo1, $sueldo2, $sueldo3, $sueldo4, $sueldo5);
    if(isset($_POST['sueldos'])){
        $sueldo1 = $_POST['sueldo1'];
        $sueldo2 = $_POST['sueldo2'];
        $sueldo3 = $_POST['sueldo3'];
        $sueldo4 = $_POST['sueldo4'];
        $sueldo5 = $_POST['sueldo5'];
    }
    $sueldo = new Sueldo($sueldo1, $sueldo2, $sueldo3, $sueldo4, $sueldo5);
    //$sueldo = new Sueldo(1, 2, 3, 4, 5);
?>