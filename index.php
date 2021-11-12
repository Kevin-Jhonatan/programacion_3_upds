<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Programación_3 | UPDS</title>
</head>
<body>
    <?php
        class Perro {
            /* Aqui estan los atributos de la clase Perro.
            También los Modificadores de acceso como ser public, private, protected
            and constant. */
            public $nombre;
            public $raza;
            public $edad;
            public $sexo;
            public $adiestrado;
            public $foto;
            /* Método que se ejecuta primero este en el lugar que este ya sea si se encuentra al final
            de linea de código pero estando dentro la clase --> __construct*/
            public function __construct($nombre, $raza, $edad, $sexo, $adiestrado, $foto) {
                $this->nombre = $nombre;
                $this->raza = $raza;
                $this->edad = $edad . " años";
                $this->sexo = $sexo ? 'Macho' : 'Hembra';   
                $this->adiestrado = $adiestrado ?'Adiestrado':'No adiestrado';
                $this->foto = $foto;
                print ("Hola soy el constructor el primero en ejecutarme este
                en el orden que este<br>");
            }
            public function ladrar() {
                print("<mark style=color:red;'>Guauuu, Guauuu, Guauuu, Guauuu, Guauuu</mark>");
            }
            public function comer($comida) {
                $this->comida = $comida;
                print ("<mark style='color: green'>También se comer: <b>".$comida."</b></mark>");
            }
            public function aparecer() {}
            /* Ultimo metodo que se ejecuta despues de realizar todas
            sus demas metodos --> __destruct */
            public function __destruct() {
                print ("<br>Soy el destructor y me ejecuto depues de realizar todo.");
            }
        }
        $boby = new Perro('Boby', 'Pastor Aleman', 5, true, true,
         'http://programacion_3.com/images/boby.jpg');
        print "<b>Hola soy un perro me llamo: ".$boby->nombre."<br> tengo: ".$boby->edad.
        "<br>soy raza: ".$boby->raza."<br>soy: ".$boby->sexo."<br>también estoy: ".$boby->adiestrado.
        "<br>me veo así:<br>".'<img src="'.$boby->foto.'">'."</b>";
        print ("<br>Se ladrar escuchen:");
        $boby->ladrar();
        print("<br>");
        $boby->comer('croketas');
        /* Sobrecarga en programacion */
        $valor = 10;
        print ("<br> Hola soy el valor numérico --> ".$valor);
        $valor = 'Hola';
        print ("<br>Hola soy el valor texto --> ".$valor."");
    ?>
</body>
</html>