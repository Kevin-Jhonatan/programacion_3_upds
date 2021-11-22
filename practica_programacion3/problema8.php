<?php
    /* Problema Nº8 Realizar una clase llamada Persona que siga las siguientes condiciones:
    ✓ Sus atributos son: nombre, edad, cédula de Identidad, sexo, domicilio, no
    queremos que se accedan directamente a ellos, pensar que modificador de
    acceso es el más adecuado, si se quiere añadir algún atributo pueden
    hacerlo.
    ✓ Se implementarán varios constructores
    o Un constructor por defecto
    o Un constructor con el nombre, edad y sexo, el resto por defecto.
    o Un constructor con todos los atributos como parámetro.
    ✓ Los métodos que se implementaran son:

    o esMayorDeEdad(): indica si es mayor de edad, devuelve un booleano.
    o comprobarSexo(char sexo): comprueba que el sexo de la Persona es
    la correcta.
    o generaCedulaIdentidad(): genera un número aleatorio de 8 cifras,
    genera a partir de este su número su letra correspondiente. Este
    método será invocado cuando se construya el objeto. Se puede dividir
    el método para que sea más fácil de resolver.
    o Métodos set de cada parámetro, excepto de cedulaIdentidad ya que
    se generará de manera aleatoria.

    ✓ Crear una clase ejecutable que realice lo siguiente:
    o Pide por tecla el nombre, edad, sexo y domicilio.
    o Crea 3 objetos de la clase anterior, el primer objeto obtendrá las
    anteriores variables pedidas por teclado, el segundo objeto obtendrá
    a todos los anteriores y el último utiliza los métodos set para darle a
    los atributos un nuevo valor.
    o Indicar para cada objeto si es mayor de edad.
    o Por último, mostrar la información de cada objeto.
    o Puede usar métodos en la clase ejecutable, si así lo quiere. */
    class Persona{
        private $nombre;
        private $edad;
        private $ci;
        private $sexo;
        private $domicilio;
        function __construct($nombre, $edad, $ci, $sexo, $domicilio){
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->ci = $ci;
            $this->sexo = $sexo;
            $this->domicilio = $domicilio;
        }
        function mayorEdad(){
            print("Su datos son: <br>Nombre: <mark>".$this->nombre."</mark><br>Edad: <mark>".$this->edad."</mark><br>Ci: <mark>".$this->ci.
            "</mark><br>Sexo: <mark>".$this->sexo."</mark><br>Domicilio: <mark>".$this->domicilio."</mark><br>");
            print ($this->edad >=18 ?'Mayor de edad': 'Menor de edad con: <mark>'.$this->edad." años</mark> ");
        }
        function __destruct(){}
    }
    if(isset($_POST['registrar'])){
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $ci = $_POST['ci'];
        $sexo = $_POST['sexo'];
        $domicilio = $_POST['domicilio'];

    }
    $persona = new Persona($nombre, $edad, $ci, $sexo, $domicilio);
    $persona->mayorEdad();
?>