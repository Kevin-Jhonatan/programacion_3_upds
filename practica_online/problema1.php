<?php
    /* Problema  1.Desarrollar  un  programa  que  permita  llenar  un  vector,
      luego insertar un elemento en la posición que se introduzca por teclado
       para luego imprimir el vector con el elemento insertado. */
    class LlenarArray{
        public $dato;
        public $posicion;
        function __construct($dato, $posicion){
            $this->dato = $dato;
            $this->posicion = $posicion;
        }
        function llenarArray(){
            if($this->posicion < 0){
                throw new Exception("Error el numero de posicion es menor que cero (0) --> posicion ingresada = ".$this->posicion );
            }else {
                $array [$this->posicion]->dato = $this->dato;
                return var_dump($array);
            }
        }
    }
    if(isset($_POST['enviar'])){
        $dato = $_POST['dato'];
        $posicion = $_POST['posicion'];
    }
    try{
        $array = new LlenarArray($dato, $posicion);
        $array->llenarArray();
    }
    catch(Exception $error ){
        print($error->getMessage()."<br>");
    }
?>