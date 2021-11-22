<?php
    /* Clase padre Persona de la cual hereda
    a las demas clases hijas */
    class Persona {
        public $nombre;
        public $direccion;
        public $edad;
        public $ci;
        function __construct($nombre, $direccion, $edad, $ci) {
            $this->nombre = $nombre;
            $this->direccion = $direccion;
            $this->edad = $edad;
            $this->ci = $ci;
        }
        function saludar() {
            print ("<br>Hola ¿como están? --> Soy el metodo saludar de la clase Persona");
            print ("<br>Nombre: ".$this->nombre."<br>Edad: ".$this->edad." años <br>Dirección: ".$this->direccion.
            "<br>Ci: ".$this->ci);
        }
        function __destruct(){}
    }
    class Empleado extends Persona {
        public $sueldo;
        function __construct($sueldo, $nombre, $direccion, $edad, $ci) {
            $this->sueldo = $sueldo;
            parent::__construct($nombre, $edad, $direccion, $ci);
        }
        function sueldo() {
            print ("El sueldo que persivo cada mes es: ".$this->sueldo." Bs");
        }
        /* Crear un metodo para imprimir sueldo */
        function __destruct() {}
    }
    class Cliente extends Persona {
        public $cuenta;
        function __construct($cuenta, $nombre, $direccion, $edad, $ci) {
            $this->cuenta = $cuenta;
            parent::__construct($nombre, $edad, $direccion, $ci);
        }
        /* Crear un metodo para imprimir cuenta */
        function cuenta() {
            print ("La cuenta que tengo es: ".$this->cuenta);
        }
        function __destruct() {}
    }
    class Alumno extends Persona {
        public $carrera;
        function __construct($carrera, $nombre, $direccion, $edad, $ci) {
            $this->carrera = $carrera;
            parent::__construct($nombre, $edad, $direccion, $ci);
        }
        /* Crear un metodo para imprimir carrera */
        function carrera(){
            print ("La carrera que yo estudio es: ".$this->carrera);
        }
        function __destruct() {}
    }
    /* Instanciamos las clases cosa que se vuelven en objetos */
    $persona = new Persona('Kevin', 'Cala Cala', 22, 12491877);
    $empleado = new Empleado(1999, $persona->nombre, $persona->edad, $persona->direccion, $persona->ci);
    $cliente = new Cliente(102010, $persona->nombre, $persona->edad, $persona->direccion, $persona->ci);
    $alumno = new Alumno('Ingeniería de Sistemas', $persona->nombre, $persona->edad, $persona->direccion, $persona->ci);
    /* Aqui empezamos a llamar a los datos de las clases usando la misma 
    clase pero instanciada cosa que ya seria un objeto */
    /* Clase Persona */
    print ("<mark><b><h1>Clase --> Persona <--</h1><b><mark>--> Atributos <--<br>");
    print ("<mark><b>Nombre: ".$persona->nombre."</b></mark><br>");
    print ("<mark><b>Edad: ".$persona->edad."</b></mark><br>");
    print ("<mark><b>Ci: ".$persona->ci."</b></mark><br>");
    print ("<mark><b>Dirección: ".$persona->direccion."</b></mark><br>");
    print ("--> Metodos <--");
    /* Ejecutamos el metodo saludar de la clase Persona */
    $persona->saludar();
    /* clase Empleado */
    print ("<mark><b><h1>Clase --> Empleado <--</h1><b><mark>--> Atributos <--");
    print ("<br><mark><b>Sueldo: ".$empleado->sueldo." Bs</b></mark>");
    print ("<br><mark><b>Nombre: ".$empleado->nombre."</b></mark>");
    print ("<br><mark><b>Edad: ".$empleado->edad."</b></mark>");
    print ("<br><mark><b>Ci: ".$empleado->ci."</b></mark>");
    print ("<br><mark><b>Dirección: ".$empleado->direccion."</b></mark><br>");
    print ("--> Metodos <--<br>");
    $empleado->sueldo();
    $empleado->saludar();
    /* Clase Cliente */
    print ("<mark><b><h1>Clase --> Cliente <--</h1><b><mark>--> Atributos <--<br>");
    print ("<mark><b>Cuenta: ".$cliente->cuenta."</b></mark><br>");
    print ("<mark><b>Nombre: ".$cliente->nombre."</b></mark><br>");
    print ("<mark><b>Edad: ".$cliente->edad."</b></mark><br>");
    print ("<mark><b>Ci: ".$cliente->ci."</b></mark><br>");
    print ("<mark><b>Dirección: ".$cliente->direccion."</b></mark><br>");
    print ("--> Metodos <--<br>");
    $cliente->cuenta();
    $cliente->saludar();
    /* Clase Alumno */
    print ("<mark><b><h1>Clase --> Alumno <--</h1><b><mark>--> Atributos <--<br>");
    print ("<mark><b>Carrera: ".$alumno->carrera."</b></mark><br>");
    print ("<mark><b>Nombre: ".$alumno->nombre."</b></mark><br>");
    print ("<mark><b>Edad: ".$alumno->edad."</b></mark><br>");
    print ("<mark><b>Ci: ".$alumno->ci."</b></mark><br>");
    print ("<mark><b>Dirección: ".$alumno->direccion."</b></mark><br>");
    print ("--> Metodos <--<br>");
    $alumno->carrera();
    $alumno->saludar();
?>