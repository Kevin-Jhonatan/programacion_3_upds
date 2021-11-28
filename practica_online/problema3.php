<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Práctica Nº2 | Online</title>
</head>
<body>
<div class="container">
        <center><h1 class="title">Problema Nº3 Mayores de edad</h1></center>
        <div class="form-control">
            <form action="problema3.php" method="post">
                <div class="row">
                    <div class="col">
                        <span>Nombre1:</span>
                        <input type="text" class="form-control" name="name1" placeholder="Ingrese el dato a almacenar en el array" >
                    </div>
                    <div class="col">
                        <span>Edad1:</span>
                        <input type="number" min= 1 class="form-control" name="years1" placeholder="Ingrese la posición para el array" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span>Nombre2:</span>
                        <input type="text" class="form-control" name="name2" placeholder="Ingrese el dato a almacenar en el array" >
                    </div>
                    <div class="col">
                        <span>Edad2:</span>
                        <input type="number" min= 1 class="form-control" name="years2" placeholder="Ingrese la posición para el array" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span>Nombre3:</span>
                        <input type="text" class="form-control" name="name3" placeholder="Ingrese el dato a almacenar en el array" >
                    </div>
                    <div class="col">
                        <span>Edad3:</span>
                        <input type="number" min= 1 class="form-control" name="years3" placeholder="Ingrese la posición para el array" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span>Nombre4:</span>
                        <input type="text" class="form-control" name="name4" placeholder="Ingrese el dato a almacenar en el array" >
                    </div>
                    <div class="col">
                        <span>Edad4:</span>
                        <input type="number" min= 1 class="form-control" name="years4" placeholder="Ingrese la posición para el array" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span>Nombre5:</span>
                        <input type="text" class="form-control" name="name5" placeholder="Ingrese el dato a almacenar en el array" >
                    </div>
                    <div class="col">
                        <span>Edad5:</span>
                        <input type="number" min= 1 class="form-control" name="years5" placeholder="Ingrese la posición para el array" >
                    </div>
                </div><br>
                <center><input type="submit" class="btn btn-primary" name="enviado3" value="Enviar"></center>
            </form>
        </div>
    </div><br>
</body>
</html>
<?php
    /* Problema  3.Desarrollar  un  programa  que  permita  cargar  5  nombres
       de personas  y sus  edades  respectivas,  luego  de  realizar  la  carga
       por  teclado  de todos los datos imprimir los nombres de las personas
       mayores de edad (>= 18 años). */
    class Person{
        public $nombre1;
        public $edad1;

        public $nombre2;
        public $edad2;

        public $nombre3;
        public $edad3;

        public $nombre4;
        public $edad4;

        public $nombre5;
        public $edad5;

        function __construct($nombre1, $edad1, $nombre2, $edad2, $nombre3, $edad3, $nombre4, $edad4, $nombre5, $edad5){
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
        function llenar(){
           /*  $persona = array(
                array(1,2,3),
                array(4,5,6),
                array(7,8,9),
                array(),
                array()
            );
            var_dump($persona[2][2]); */
            $nombre = array($this->nombre1, $this->edad1, $this->nombre2, $this->edad2, $this->nombre3, 
            $this->edad3, $this->nombre4, $this->edad4, $this->nombre5, $this->edad5);
            $nombreEdad = array_chunk($nombre, 2);
            var_dump($nombreEdad);
        }
        function mayorEdad(){
            if($this->edad1 > 17){
                print("<br>Usted si es mayor de edad felicidades <b>".$this->nombre1."</b> con una edad de <b>".$this->edad1."</b> años");
            }
            else{
                print("<br> Lo siento <b>".$this->nombre1."</b> pero usted es menor de edad con una edad de <b>".$this->edad1."</b> años");
            }
            if($this->edad2 > 17){
                print("<br>Usted si es mayor de edad felicidades <b>".$this->nombre2."</b> con una edad de <b>".$this->edad2."</b> años");
            }
            else{
                print("<br> Lo siento <b>".$this->nombre2."</b> pero usted es menor de edad con una edad de <b>".$this->edad2."</b> años");
            }
            if($this->edad3 > 17){
                print("<br>Usted si es mayor de edad felicidades <b>".$this->nombre3."</b> con una edad de <b>".$this->edad3."</b> años");
            }
            else{
                print("<br> Lo siento <b>".$this->nombre3."</b> pero usted es menor de edad con una edad de <b>".$this->edad3."</b> años");
            }
            if($this->edad4 > 17){
                print("<br>Usted si es mayor de edad felicidades <b>".$this->nombre4."</b> con una edad de <b>".$this->edad4."</b> años");
            }
            else{
                print("<br> Lo siento <b>".$this->nombre4."</b> pero usted es menor de edad con una edad de <b>".$this->edad4."</b> años");
            }
            if($this->edad5 > 17){
                print("<br>Usted si es mayor de edad felicidades <b>".$this->nombre5."</b> con una edad de <b>".$this->edad5."</b> años");
            }
            else{
                print("<br> Lo siento <b>".$this->nombre5."</b> pero usted es menor de edad con una edad de <b>".$this->edad5."</b> años");
            }
        }
    }
    if(isset($_POST['enviado3'])){
        $nombre1 = $_POST['name1'];
        $edad1 = $_POST['years1'];
 
        $nombre2 = $_POST['name2'];
        $edad2 = $_POST['years2'];

        $nombre3 = $_POST['name3'];
        $edad3 = $_POST['years3'];

        $nombre4 = $_POST['name4'];
        $edad4 = $_POST['years4'];

        $nombre5 = $_POST['name5'];
        $edad5 = $_POST['years5'];
    }
    $persona = new Person($nombre1, $edad1, $nombre2, $edad2, $nombre3, $edad3, $nombre4, $edad4, $nombre5, $edad5);
    $persona->llenar();
    $persona->mayorEdad();
?>