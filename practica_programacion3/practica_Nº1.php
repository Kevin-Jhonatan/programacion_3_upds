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
    <title>Práctica Nº1 | Programacion 3</title>
</head>
<body>

</body>
</html>
<?php
    /* Problema Nº1 
    Un banco tiene 3 clientes que pueden hacer depósitos y extracciones, también el
    banco requiere que al final del día calcule la cantidad de dinero que hay depositada.
    Clases a utilizar:
    Cliente y Banco
    Atributos y Métodos a utilizar:
    Cliente - Atributos
    Nombre
    Monto
    Cliente – Métodos
    Constructor
    Depositar
    Extraer
    retornarMonto
    Banco – Atributos
    3 clientes (Objetos de la clase Cliente)
    Banco – Métodos
    Constructor
    Operar
    depositosTotales */
    class Cliente{
        public $nombre;
        public $monto;
        function __construct($nombre, $monto){
            $this->nombre = $nombre;
            $this->monto = $monto;
        }
        function depositar(){

        }
        function extraer(){
            return $monto;
        }
        function __destruct(){}
    }
    class Banco{
        function __contruct(){

        }
        function operar(){

        }
        function depositosTotales(){

        }
        function __destruct(){}
    }
    $cliente1 = new Cliente('Kevin Jhonatan M. Mollo', 7500);
    $cliente2 = new Cliente('Andres Montero', 8500);
    $cliente3 = new Cliente('Pedro Infante', 11500);
    /* Cliente Nº1 */
    print("<h1>Cliente Nº1 ".$cliente1->nombre."</h1>");
    print("<b>Nombre: <mark>".$cliente1->nombre."</mark></b><br>");
    print("<b>Monto actual: <mark>".$cliente1->monto." Bs</mark></b>");
    /* Cliente Nº2 */
    print("<h1>Cliente Nº2 ".$cliente2->nombre."</h1>");
    print("<b>Nombre: <mark>".$cliente2->nombre."</mark></b><br>");
    print("<b>Monto actual: <mark>".$cliente2->monto." Bs</mark></b>");
    /* Cliente Nº3 */
    print("<h1>Cliente Nº3 ".$cliente3->nombre."</h1>");
    print("<b>Nombre: <mark>".$cliente3->nombre."</mark></b><br>");
    print("<b>Monto actual: <mark>".$cliente3->monto." Bs</mark></b>");
    print("<b><mark></mark></b>");
    print("<b><mark></mark></b>");
    print("<b><mark></mark></b>");
    /* Problema Nº2 Realizar un programa que ingrese los 
    sueldos de 5 operarios en un vector, realizar
    la creación y carga del vector en el Constructor. */

    /* Problema Nº3 Realizar un programa con la clase
    Alumno y definir como atributos nombre y su
    edad, en el constructor realizar el ingreso de datos, definir otros
    dos métodos para imprimir los datos ingresados y un mensaje si es mayor
    de edad o no. */

    /* Problema Nº4 Realizar un programa con una clase Factura y otra clase
    Presupuesto. La Factura tendrá atributos como: número, fecha, datos del
    cliente, líneas de detalles,
    porcentaje de iva, base imponible, cuota y total.
    El presupuesto será parecido, aunque en este deberá incluir también fecha de
    caducidad, pero no habrá iva, ni base imponible, ni cuota.
    Como ambos documentos van a ser similares, utilizar herencia. */

    /* Problema Nº5 Construir dos clases: la clase Dólar y la clase PesoBoliviano.
    Tienes que hacer que los objetos de estas clases se puedan realizar la
    conversión de la moneda tanto de dólar a pesoBoliviano como de pesoBoliviano
    a Dolar, teniendo presente que 1 Dolar = 6.97 pesosBolivianos. */

    /* Problema Nº6 Se Necesita una clase para almacenar los datos de una factura.
    Dichos datos son: Nombre del cliente, teléfono, dirección, población, provincia,
    código postal, NIF o CIF y porcentaje de IVA. Por otra parte, tienes que tener
    presente que en una misma factura puede haber una o varias líneas de detalle
    con los siguientes datos: Cantidad, descripción, precio unitario e importe.
    Usa un indicador para acceder a cada una de estas líneas de detalle.
    Esta clase debe ofrecer, además, propiedades que devuelvan la base imponible,
    la cuota de IVA y el total a pagar. Escribir también un método Main cliente
    de esta clase que demuestre que funciona correctamente. */

    /* Problema Nº7 Crea una clase llamada cuenta que tendrá los siguientes atributos:
    titular y cantidad (opcional enteros o decimales)
    Crear dos constructores que cumpla lo anterior
    Crear sus métodos getter and setter.
    Tendrá dos métodos:
    Ingresar(double cantidad): se ingresa una cantidad a la cuenta, si la
    cantidad introducida es negativa, no se hará nada.
    Retirar(double cantidad): se retira una cantidad a la cuenta, si restando la
    cantidad actual a la que nos pasan es negativa la cantidad de la cuenta
    pasa a ser 0. */

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
?>