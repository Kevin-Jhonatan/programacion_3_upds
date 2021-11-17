<?php
    /* Problema Nº6 Se Necesita una clase para almacenar los datos de una factura.
    Dichos datos son: Nombre del cliente, teléfono, dirección, población, provincia,
    código postal, NIF o CIF y porcentaje de IVA. Por otra parte, tienes que tener
    presente que en una misma factura puede haber una o varias líneas de detalle
    con los siguientes datos: Cantidad, descripción, precio unitario e importe.
    Usa un indicador para acceder a cada una de estas líneas de detalle.
    Esta clase debe ofrecer, además, propiedades que devuelvan la base imponible,
    la cuota de IVA y el total a pagar. Escribir también un método Main cliente
    de esta clase que demuestre que funciona correctamente. */
    class DatosFactura{
        public $nombre;
        public $telefono;
        public $direccion;
        public $poblacion;
        public $provincia;
        public $codigoPostal;
        /* CIF->coste, seguro y flete
           NIF->Numero de identificacion fiscal */
        public $nif;
        public $iva;
        public $totalPagar;
    }
?>