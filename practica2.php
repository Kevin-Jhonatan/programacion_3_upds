<?php
	/* Ejercicio Nº1 Implementa  la  clase Bicicleta,que  tiene  tres  atributos, 
	velocidadActual, platoActualypiñonActual, de  tipo entero y cuatro métodos acelerar(), 
	frenar(),cambiarPlato(int   plato), cambiarPiñon(int piñon),donde  el  primero  dobla  la  
	velocidad  actual,  el segundo reduce a la mitad la velocidad actual, el tercero y     
	cuarto     ajustan     el     plato y     el     piñonactual respectivamente según los 
	parámetros recibidos, la clase debe tener además un constructor que inicialice todos los atributos. */
	class Bicicleta {
		public $velocidadActual;
		public $platoActual;
		public $piñonActual;
		function __construct($velocidadActual, $platoActual, $piñonActual){
			$this->velocidadActual = $velocidadActual;
			$this->platoActual = $platoActual;
			$this->piñonActual = $piñonActual;
		}
		function acelerar(){
			$velocidadDoble = $this->velocidadActual * 2;
			print("<br><b>Yo tengo el doble de velocidad: <mark>".$velocidadDoble." km/hr</mark></b>");			
		}
		function frenar(){
			$velocidadMitad = $this->velocidadActual / 2;
			print("<br><b>Yo tengo la mitad de velocidad: <mark>".$velocidadMitad." km/hr</mark></b>");	
		}
		function cambiarPlato($plato){
			$this->plato = $plato;
			print("<br><b>Mi nuevo plato es: <mark>".$plato."</mark></b>");
		}
		function cambiarPiñon($piñon){
			$this->piñon = $piñon;
			print("<br><b>Mi nuevo piñon es: <mark>".$piñon."</mark></b>");
		}
		function __destruct(){}
	}
	$bicicleta = new Bicicleta(10, 2, 3);
	print("<h1>Clase --> Bicicleta <-- </h1>");
	print("<b>Velocidad Actual: <mark>".$bicicleta->velocidadActual." km/hr<b></mark><br>");
	print("<b>Plato Actual: <mark>".$bicicleta->platoActual."<b></mark><br>");
	print("<b>Piñon Actual: <mark>".$bicicleta->piñonActual."<b></mark><br>");
	print("<mark>Métodos</mark>");
	$bicicleta->acelerar();
	$bicicleta->frenar();
	$bicicleta->cambiarPlato(15);
	$bicicleta->cambiarPiñon(20);
	/* Ejercicio Nº2 Crear dos objetos de la clase Bicicleta: objMiBicicletay objTuBicicleta*/
	$objMiBicicleta = new Bicicleta(5, 6, 7);
	$objTuBicicleta = new Bicicleta(8, 9, 10);
	/* Ejercicio Nº3 Partiendo de la clase Bicicleta, la cual tiene tres atributos, velocidadActual,
	 platoActualy piñonActual,de  tipo entero y cuatro métodos acelerar(), frenar(), cambiarPlato(int  plato),
	y cambiarPiñon(int  piñon), implementalas clases BicicletaMontaña y BicicletaTandem.*/
	class BicicletaMontaña extends Bicicleta{
		/* Ejercicio Nº4 BicicletaMontaña tiene un atributo suspensión de tipo 
		entero y un método cambiarSuspensión(int suspension)*/
		public $suspension;
		/* Ejercicio Nº6 Crear  los  constructores  de  estas  clases para  inicializar todos sus atributos, 
		haciendo uso de super.*/
		function __construct($suspension, $velocidadActual, $platoActual, $piñonActual){
			$this->suspension = $suspension;
			parent::__construct($velocidadActual, $platoActual, $piñonActual);
		}
		function cambiarSuspencion($suspension){
			$this->suspension = $suspension;
			print("<br><b>Mi nueva suspension es de: <mark>".$suspension."</mark></b>");
		}
		function acelerar(){
			$velocidadTriple = $this->velocidadActual * 3;
			print("<br><b>Yo tengo el triple de velocidad: <mark>".$velocidadTriple." km/hr</mark></b>");
		}
		function __desctruct(){}
	}
	class BicicletaTandem extends Bicicleta{
		/* Ejercicio Nº5 BicicletaTandem tiene  un  atributo numAsientos de tipo entero. */
		public $numAsientos;
		function __construct($numAsientos, $velocidadActual, $platoActual, $piñonActual){
			$this->numAsientos = $numAsientos;
			parent::__construct($velocidadActual, $platoActual, $piñonActual);
		}
		function acelerar(){
			$velocidadTriple = $this->velocidadActual * 4;
			print("<br><b>Yo tengo el cuatruple de velocidad: <mark>".$velocidadTriple." km/hr</mark></b>");
		}
		function __destruct(){}
	}
	/* Ejercicio Nº7 -> Sobreescribe  el método acelerar(),  de Bicicleta,  en  las subclases BicicletaMontaña y
	 BicicletaTandem,  de  tal forma  que  en  la  primera  acelerar  suponga 
	 triplicar  la velocidad actual y en la segunda cuadruplicar la velocidad actual.
	*/
	$bicicletaMontaña = new BicicletaMontaña(30, $bicicleta->velocidadActual, $bicicleta->platoActual, $bicicleta->piñonActual);
	$bicicletaTandem = new BicicletaTandem(3, $bicicleta->velocidadActual, $bicicleta->platoActual, $bicicleta->piñonActual);
	print("<h1>Clase --> BicicletaMontaña <-- </h1>");
	print("<b>Suspension Actual: <mark>".$bicicletaMontaña->suspension."<b></mark><br>");
	print("<b>Velocidad Actual: <mark>".$bicicletaMontaña->velocidadActual."<b></mark><br>");
	print("<b>Plato Actual: <mark>".$bicicletaMontaña->platoActual."<b></mark><br>");
	print("<b>Piñon Actual: <mark>".$bicicletaMontaña->piñonActual."<b></mark><br>");
	print("<mark>Métodos</mark>");
	/* Ejercicio Nº8 Crear   dos   objetos   de   las   clases BicicletaMontañay BicicletaTandeme    invoca
	    sobre    ellos    el    método acelerar (), ¿Cuál es el resultado? */
	$bicicletaMontaña->acelerar();
	/* Ejercicio Nº9  Desde estos objetos que has creado ¿cómo accederías a la implementación   del
	   métodoacelerar(),   en   la   clase Bicicleta?*/
	print("<h1>Clase --> BicicletaTandem <-- </h1>");
	print("<b>Número de asientos: <mark>".$bicicletaTandem->numAsientos."<b></mark><br>");
	print("<b>Velocidad Actual: <mark>".$bicicletaTandem->velocidadActual."<b></mark><br>");
	print("<b>Plato Actual: <mark>".$bicicletaTandem->platoActual."<b></mark><br>");
	print("<b>Piñon Actual: <mark>".$bicicletaTandem->piñonActual."<b></mark><br>");
	print("<mark>Métodos</mark>");
	$bicicletaTandem->acelerar();
?>