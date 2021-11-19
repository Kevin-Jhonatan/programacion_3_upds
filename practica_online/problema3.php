 <?php
    /* Problema  3.Desarrollar  un  programa  que  permita  cargar  5  nombres
       de personas  y sus  edades  respectivas,  luego  de  realizar  la  carga
       por  teclado  de todos los datos imprimir los nombres de las personas
       mayores de edad (>= 18 años). */
    class Persona{
        /* public $nombre;
        public $edad; */
        function __construct($nombre1, $edad1, $nombre2, $edad2, $nombre3, $edad3, $nombre4, $edad4, $nombre5, $edad5 ){
            $this->nombre1 = $nombre1;
            $this->edad1 = $edad1;

            $this->nombre2 = $nombre2;
            $this->edad2 = $edad2;

            $this->nombre3 = $nombre3;
            $this->edad3 = $edad3;

            $this->nombre4 = $nombre4;
            $this->edad4 = $edad4;

            $this->nombre5 = $nombre5;
            $this->edad5 = $edad5;
        }
        function llenarArray(){
            if(($this->edad1 <= 0) && ($this->edad2 <= 0) && ($this->edad3 <= 0) && ($this->edad4 <= 0) && ($this->edad5 <= 0)){
                throw new Exception("Error la edad ingresada es menor o igual a cero = ".$this->edad1);
            }else {
                $array [0] = [$this->nombre1=>$this->edad1];
                $array [1] = [$this->nombre2=>$this->edad2];
                $array [2] = [$this->nombre3=>$this->edad3];
                $array [3] = [$this->nombre4=>$this->edad4];
                $array [4] = [$this->nombre5=>$this->edad5];
                return var_dump($array);
            }
        }
        function mayorEdad(){
            if(($this->edad1 >= 18)|| ($this->edad2 >= 18) || ($this->edad3 >= 18) || ($this->edad4 >= 18) || ($this->edad5 >= 18)){
                print("<br>Usted si es mayor de edad felicidades ".$this->nombre1." con una edad de ".$this->edad1." años");
                print("<br>Usted si es mayor de edad felicidades ".$this->nombre2." con una edad de ".$this->edad2." años");
                print("<br>Usted si es mayor de edad felicidades ".$this->nombre3." con una edad de ".$this->edad3." años");
                print("<br>Usted si es mayor de edad felicidades ".$this->nombre4." con una edad de ".$this->edad4." años");
                print("<br>Usted si es mayor de edad felicidades ".$this->nombre5." con una edad de ".$this->edad5." años");
            }
        }
    }
    /* if(isset($_POST['enviar3'])){
        $nombre1 = $_POST['nombre1'];
        $edad1 = $_POST['edad1'];

        $nombre2 = $_POST['nombre2'];
        $edad2 = $_POST['edad2'];

        $nombre3 = $_POST['nombre3'];
        $edad3 = $_POST['edad3'];

        $nombre4 = $_POST['nombre4'];
        $edad4 = $_POST['edad4'];

        $nombre6 = $_POST['nombre5'];
        $edad6 = $_POST['edad5'];
    } */
    
    try{
        $persona = new Persona('kevin', -17, 'Abel', -23, 'Pedro', -34, 'Juan', -43, 'Miguel', -51);
        $persona->llenarArray();
        $persona->mayorEdad();
    }
    catch(Exeption $error){
        print("Error encontrado con el catch".$error->getMessage()."<br>");
    }$error->getMessage()."<br>"
?>