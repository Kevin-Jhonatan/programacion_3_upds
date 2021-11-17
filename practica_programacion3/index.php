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
    <link rel="stylesheet" href="css/style.css">
    <title>Práctica Nº1 | Programacion 3</title>
</head>
<body>
    <center><h1 class="title">Bienvenido al Banco Cochasoft</h1></center>
    <div class="container">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <div class="form-control">
                        <h2 class="title-client">Cliente: Nº1 Kevin Jhonatan M. Mollo</h2>
                        <h2 class="title-client">Saldo inicial: 8000 Bs</h2>
                        <div class="row">
                            <div class="col">
                                <div class="form-control">
                                    <form action="index.php" method="post">
                                        <span>Depositar:</span>
                                        <input type="number" min=0 class="form-control" name="deposito1" placeholder="Ingrese el monto a depositar"><br>
                                        <center><input type="submit" class="btn btn-primary" name="depositar1" value="Enviar"></center>
                                    </form>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-control">
                                    <form action="index.php" method="post">
                                        <span>Retirar:</span>
                                        <input type="number" min=0 class="form-control" name="retiro1" placeholder="Ingrese el monto a retirar"><br>
                                        <center><input type="submit" class="btn btn-primary" name="retirar1" value="Enviar"></center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-control">
                        <h2 class="title-client">Cliente: Nº2 Andres Montero</h2>
                        <h2 class="title-client">Saldo inicial: 9000 Bs</h2>
                        <div class="row">
                            <div class="col">
                                <div class="form-control">
                                    <form action="index.php" method="post">
                                        <span>Depositar:</span>
                                        <input type="number" min=0 class="form-control" name="deposito2" placeholder="Ingrese el monto a depositar"><br>
                                        <center><input type="submit" class="btn btn-primary" name="depositar2" value="Enviar"></center>
                                    </form>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-control">
                                    <form action="index.php" method="post">
                                        <span>Retirar:</span>
                                        <input type="number" min=0 class="form-control" name="retiro2" placeholder="Ingrese el monto a retirar"><br>
                                        <center><input type="submit" class="btn btn-primary" name="retirar2" value="Enviar"></center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col">
                    <div class="form-control">
                        <h2 class="title-client">Cliente: Nº3 Pedro Infante</h2>
                        <h2 class="title-client">Saldo inicial: 10000 Bs</h2>
                        <div class="row">
                            <div class="col">
                                <div class="form-control">
                                    <form action="problema1.php" method="post">
                                        <span>Depositar:</span>
                                        <input type="number" min=0 class="form-control" name="deposito3" placeholder="Ingrese el monto a depositar"><br>
                                        <center><input type="submit" class="btn btn-primary" name="depositar3" value="Enviar"></center>
                                    </form>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-control">
                                    <form action="problema1.php" method="post">
                                        <span>Retirar:</span>
                                        <input type="number" min=0 class="form-control" name="retiro3" placeholder="Ingrese el monto a retirar"><br>
                                        <center><input type="submit" class="btn btn-primary" name="retirar3" value="Enviar"></center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-control">
                        <center><h1 class="title">Transacciones</h1></center>
                        <h3><?php include ("problema1.php");?></h3>
                    </div><br>
                </div>
            </div>
        </div>
    </div>
    <center><h1 class="title">Problema Nº2 Sueldos en el array</h1></center>
    <div class="container">
        <div class="form-control">
            <form action="problema2.php" method="post">
                <div class="row">
                    <div class="col">
                        <span>Sueldo Nº1:</span>
                        <input type="number" class="form-control" placeholder="Ingrese 1er sueldo " name="sueldo1">
                    </div>
                    <div class="col">
                        <span>Sueldo Nº2:</span>
                        <input type="number" class="form-control" placeholder="Ingrese 2do sueldo " name="sueldo2">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span>Sueldo Nº3:</span>
                        <input type="number" class="form-control" placeholder="Ingrese 3er sueldo " name="sueldo3">
                    </div>
                    <div class="col">
                        <span>Sueldo Nº4:</span>
                        <input type="number" class="form-control" placeholder="Ingrese 4to sueldo " name="sueldo4">
                    </div>
                    <div class="col">
                        <span>Sueldo Nº5:</span>
                        <input type="number" class="form-control" placeholder="Ingrese 5to sueldo " name="sueldo5">
                    </div>
                </div><br>
                <center><input type="submit" class="btn btn-primary" name="sueldos"value="Guardar"></center>
            </form>
        </div>
    </div>
    <center><h1 class="title">Problema Nº3 Edad del alumno</h1></center>
    <div class="container">
        <div class="form-control">
            <form action="problema3.php" method="post">
                <div class="row">
                    <div class="col">
                        <span>Nombre del alumno:</span>
                        <input type="text" class="form-control" placeholder="Ingrese nombre del alumno" name="nombre">
                    </div>
                    <div class="col">
                        <span>Edad del alumno:</span>
                        <input type="number" min=1 class="form-control" placeholder="Ingrese la edad del alumno" name="edad">
                    </div>
                </div><br>
                <center><input type="submit" class="btn btn-primary" name="datos" value="Guardar"></center>
            </form>
        </div>
    </div>
    <center><h1 class="title">Problema Nº4 Factura</h1></center>
    <div class="container">
        <div class="form-control">
            <form action="problema4.php" method="post">
                <div class="row">
                    <div class="col">
                        <span>Cantidad de $ dolar a cambiar a Bs bolivianos</span>
                        <input type="number" class="form-control" placeholder="Ingrese la cantidad en dolares" name="dolar">
                    </div>
                    <div class="col">
                        <span>Cantidad de Bs bolivianos a cambiar a $ dolar:</span>
                        <input type="number" min=1 class="form-control" placeholder="Ingrese la cantidad en bolivianos" name="boliviano">
                    </div>
                </div><br>
                <center><input type="submit" class="btn btn-primary" name="datos" value="Cambiar"></center>
            </form>
        </div>
    </div>
    <center><h1 class="title">Problema Nº5 Cambio de Dolar $ a Boliviano Bs</h1></center>
    <div class="container">
        <div class="form-control">
            <form action="problema5.php" method="post">
                <div class="row">
                    <div class="col">
                        <span>Cantidad de $ dolar a cambiar a Bs bolivianos</span>
                        <input type="number" class="form-control" placeholder="Ingrese la cantidad en dolares" name="dolar"><br>
                    </div>
                    <div class="col">
                        <span>Cantidad de Bs bolivianos a cambiar a $ dolar:</span>
                        <input type="number" min=1 class="form-control" placeholder="Ingrese la cantidad en bolivianos" name="boliviano"><br>
                    </div>
                </div>
                <center><input type="submit" class="btn btn-primary" name="cambiar" value="Cambiar a bolivianos"></center>
            </form>
        </div><br>
    </div>
    <center><h1 class="title">Problema Nº6 Almacenar datos de una Factura</h1></center>
    <div class="container">
        <div class="form-control">
            <form action="problema6.php" method="post">
                <div class="row">
                    <div class="col">
                        <span>Cantidad de $ dolar a cambiar a Bs bolivianos</span>
                        <input type="number" class="form-control" placeholder="Ingrese la cantidad en dolares" name="dolar"><br>
                    </div>
                    <div class="col">
                        <span>Cantidad de Bs bolivianos a cambiar a $ dolar:</span>
                        <input type="number" min=1 class="form-control" placeholder="Ingrese la cantidad en bolivianos" name="boliviano"><br>
                    </div>
                </div>
                <center><input type="submit" class="btn btn-primary" name="cambiar" value="Cambiar a bolivianos"></center>
            </form>
        </div><br>
    </div>
    <center><h1 class="title">Problema Nº7 Cuenta</h1></center>
    <div class="container">
        <div class="form-control">
            <form action="problema7.php" method="post">
                <div class="row">
                    <div class="col">
                        <span>Nombre del titular:</span>
                        <input type="text" class="form-control" placeholder="Ingrese el nombre del titular" name="titular"><br>
                    </div>
                    <div class="col">
                        <span>Saldo actual del titular:</span>
                        <input type="number" class="form-control" placeholder="Ingrese el monto de saldo actual" name="monto"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span>Cantidad a depositar:</span>
                        <input type="number" class="form-control" placeholder="Ingrese la cantidad a depositar en Bs" name="deposito"><br>
                    </div>
                    <div class="col">
                        <span>Cantidad a retirar:</span>
                        <input type="number" class="form-control" placeholder="Ingrese la cantidad a retirar en Bs" name="retiro"><br>
                    </div>
                </div>
                <center><input type="submit" class="btn btn-primary" name="transaccion" value="Realizar transacción"></center>
            </form>
        </div><br>
    </div>
    <center><h1 class="title">Problema Nº8 Registro Persona</h1></center>
    <div class="container">
        <div class="form-control">
            <form action="problema8.php" method="post">
                <div class="row">
                    <div class="col">
                        <span>Nombre:</span>
                        <input type="text" class="form-control" placeholder="Ingrese su nombre" name="nombre"><br>
                    </div>
                    <div class="col">
                        <span>Edad:</span>
                        <input type="number" min=0 class="form-control" placeholder="Ingrese su edad" name="edad"><br>
                    </div>
                    <div class="col">
                        <span>Ci:</span>
                        <input type="number" min=0 class="form-control" placeholder="Ingrese su cédula de identidad" name="ci"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span>Sexo:</span>
                        <input type="text" class="form-control" placeholder="Ingrese su nombre" name="sexo"><br>
                    </div>
                    <div class="col">
                        <span>Domicilio:</span>
                        <input type="text" class="form-control" placeholder="Ingrese su edad" name="domicilio"><br>
                    </div>
                </div>
                <center><input type="submit" class="btn btn-primary" name="registrar" value="Registrar"></center>
            </form>
        </div><br>
    </div>
</body>
</html>