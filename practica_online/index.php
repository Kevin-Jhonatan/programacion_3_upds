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
    <center><h1 class="practica">CONCURSO DE DESARROLLO</h1></center>
    <div class="container">
        <center><h1 class="title">Problema Nº1 Llenar Array o Vector</h1></center>
        <div class="form-control">
            <form action="problema1.php" method="post">
                <div class="row">
                    <div class="col">
                        <span>Dato a insertar:</span>
                        <input type="text" class="form-control" name="dato" placeholder="Ingrese el dato a almacenar en el array" >
                    </div>
                    <div class="col">
                        <span>Posición:</span>
                        <input type="number" class="form-control" name="posicion" placeholder="Ingrese la posición para el array" >
                    </div>
                </div><br>
                <center><input type="submit" class="btn btn-primary" name="enviar" value="Enviar"></center>
            </form>
        </div>
    </div>
    <div class="container">
        <center><h1 class="title">Problema Nº2 Eliminar un dato del Array</h1></center>
        <div class="form-control">
            <form action="index.php" method="post">
                <div class="row">
                    <div class="col">
                        <span>Dato a insertar:</span>
                        <input type="text" class="form-control" name="dato1" placeholder="Ingrese el dato a almacenar en el array" >
                    </div>
                    <div class="col">
                        <span>Posición:</span>
                        <input type="number" class="form-control" name="posicion1" placeholder="Ingrese la posición para el array" >
                    </div>
                </div><br>
                <center><input type="submit" class="btn btn-primary" name="enviar1" value="Enviar"></center>
            </form>
        </div>
        <?php include ("problema2.php");?>
        <div class="form-control">
            <form action="index.php" method="post">
                <div class="row">
                    <div class="col">
                        <span>Posición a eliminar:</span>
                        <input type="number" class="form-control" name="datoDelete" placeholder="Ingrese la posición para eliminar el dato del array" >
                    </div>
                </div><br>
                <center><input type="submit" class="btn btn-primary" name="eliminar" value="Eliminar"></center>
            </form>
        </div>
    </div>
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
                <center><input type="submit" class="btn btn-primary" name="enviado" value="Enviar"></center>
            </form>
        </div>
    </div><br>
    <div class="container">
        <center><h1 class="title">Problema Nº4 Sueldo mayor</h1></center>
        <div class="form-control">
            <form action="problema4.php" method="post">
                <div class="row">
                    <div class="col">
                        <span>Nombre1:</span>
                        <input type="text" class="form-control" name="name1" placeholder="Ingrese el dato a almacenar en el array" >
                    </div>
                    <div class="col">
                        <span>Sueldo1:</span>
                        <input type="number" min= 1 class="form-control" name="sueldo1" placeholder="Ingrese la posición para el array" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span>Nombre2:</span>
                        <input type="text" class="form-control" name="name2" placeholder="Ingrese el dato a almacenar en el array" >
                    </div>
                    <div class="col">
                        <span>Sueldo2:</span>
                        <input type="number" min= 1 class="form-control" name="sueldo2" placeholder="Ingrese la posición para el array" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span>Nombre3:</span>
                        <input type="text" class="form-control" name="name3" placeholder="Ingrese el dato a almacenar en el array" >
                    </div>
                    <div class="col">
                        <span>Sueldo3:</span>
                        <input type="number" min= 1 class="form-control" name="sueldo3" placeholder="Ingrese la posición para el array" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span>Nombre4:</span>
                        <input type="text" class="form-control" name="name4" placeholder="Ingrese el dato a almacenar en el array" >
                    </div>
                    <div class="col">
                        <span>Sueldo4:</span>
                        <input type="number" min= 1 class="form-control" name="sueldo4" placeholder="Ingrese la posición para el array" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span>Nombre5:</span>
                        <input type="text" class="form-control" name="name5" placeholder="Ingrese el nombre a almacenar en el array" >
                    </div>
                    <div class="col">
                        <span>Sueldo5:</span>
                        <input type="number" min= 1 class="form-control" name="sueldo5" placeholder="Ingrese sueldo para el array" >
                    </div>
                </div><br>
                <center><input type="submit" class="btn btn-primary" name="enviar4" value="Enviar"></center>
            </form>
        </div>
    </div><br>
    <div class="container">
        <center><h1 class="title">Problema Nº5 Ordenar Array o Vector</h1></center>
        <div class="form-control">
            <form action="problema5.php" method="post">
                <div class="row">
                <div class="col">
                    <span>Dato a insertar 1:</span>
                    <input type="text" class="form-control" name="dato1" placeholder="Ingrese el dato a almacenar en el array" >
                </div>
                <div class="col">
                    <span>Dato a insertar 2:</span>
                    <input type="text" class="form-control" name="dato2" placeholder="Ingrese el dato a almacenar en el array" >
                </div>
                <div class="col">
                    <span>Dato a insertar 3:</span>
                    <input type="text" class="form-control" name="dato3" placeholder="Ingrese el dato a almacenar en el array" >
                </div>
                <div class="col">
                    <span>Dato a insertar 4:</span>
                    <input type="text" class="form-control" name="dato4" placeholder="Ingrese el dato a almacenar en el array" >
                </div>
                </div><br>
                <center><input type="submit" class="btn btn-primary" name="enviar5" value="Enviar"></center><br>
            </form>
        </div>
    </div><br>
    <div class="container">
        <center><h1 class="title">Problema Nº6 Buscar dato en Array o Vector</h1></center>
        <div class="form-control">
            <form action="problema6.php" method="post">
                <div class="row">
                    <div class="col">
                        <span>Dato a insertar 1:</span>
                        <input type="text" class="form-control" name="dato1" placeholder="Ingrese el dato a almacenar en el array">
                    </div>
                    <div class="col">
                        <span>Dato a insertar 2:</span>
                        <input type="text" class="form-control" name="dato2" placeholder="Ingrese el dato a almacenar en el array">
                    </div>
                    <div class="col">
                        <span>Dato a insertar 3:</span>
                        <input type="text" class="form-control" name="dato3" placeholder="Ingrese el dato a almacenar en el array">
                    </div>
                    <div class="col">
                        <span>Dato a insertar 4:</span>
                        <input type="text" class="form-control" name="dato4" placeholder="Ingrese el dato a almacenar en el array">
                    </div>
                </div>
                <div class="row">
                    <h1>Ingrese el dato a buscar dentro el array antes de enviar datos:</h1>
                    <div class="col">
                    <span>Ingrese el dato a buscar:</span>
                        <input type="text" class="form-control" name="datoBuscar" placeholder="Ingrese el dato a buscar en el array">
                    </div>
                </div><br>
                <center><input type="submit" class="btn btn-primary" name="enviar6" value="Enviar"></center><br>
            </form>
        </div>
    </div><br>
    <div class="container">
        <center><h1 class="title">Problema Nº7 Tamaño Array o Vector</h1></center>
        <div class="form-control">
            <form action="problema7.php" method="post">
                <div class="row">
                    <div class="col">
                        <span>Límite del primer número para ser aleatorio:</span>
                        <input type="number" class="form-control" name="tamaño1" placeholder="Ingrese el dato a almacenar en el array" >
                    </div>
                    <div class="col">
                        <span>Límite del segundo número para ser aleatorio:</span>
                        <input type="number" class="form-control" name="tamaño2" placeholder="Ingrese la posición para el array" >
                    </div>
                    <div class="col">
                        <span>Límite del tercer número para ser aleatorio:</span>
                        <input type="number" class="form-control" name="tamaño3" placeholder="Ingrese la posición para el array" >
                    </div>
                </div><br>
                <center><input type="submit" class="btn btn-primary" name="enviar7" value="Enviar"></center>
            </form>
        </div>
    </div><br>
    <div class="container">
        <center><h1 class="title">Problema Nº8  Matriz</h1></center>
        <div class="form-control">
            <form action="problema8.php" method="post">
                <div class="row">
                    <div class="col">
                        <span>Nombre a insertar:</span>
                        <input type="text" class="form-control" name="nombre1" placeholder="Ingrese el nombre para la matriz" >
                    </div>
                    <div class="col">
                        <span>Edad a insertar:</span>
                        <input type="number" class="form-control" name="edad1" placeholder="Ingrese la edad para la matriz" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span>Nombre a insertar:</span>
                        <input type="text" class="form-control" name="nombre2" placeholder="Ingrese el nombre para la matriz" >
                    </div>
                    <div class="col">
                        <span>Edad a insertar:</span>
                        <input type="number" class="form-control" name="edad2" placeholder="Ingrese la edad para la matriz" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span>Nombre a insertar:</span>
                        <input type="text" class="form-control" name="nombre3" placeholder="Ingrese el nombre para la matriz" >
                    </div>
                    <div class="col">
                        <span>Edad a insertar:</span>
                        <input type="number" class="form-control" name="edad3" placeholder="Ingrese la edad para la matriz" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span>Nombre a insertar:</span>
                        <input type="text" class="form-control" name="nombre4" placeholder="Ingrese el nombre para la matriz" >
                    </div>
                    <div class="col">
                        <span>Edad a insertar:</span>
                        <input type="number" class="form-control" name="edad4" placeholder="Ingrese la edad para la matriz" >
                    </div>
                </div><br>
                <center><input type="submit" class="btn btn-primary" name="enviar8" value="Enviar"></center>
            </form>
        </div>
    </div><br>
    <div class="container">
        <center><h1 class="title">Problema Nº9  Matriz</h1></center>
        <div class="form-control">
            <form action="problema9.php" method="post">
                <div class="row">
                    <div class="col">
                        <span>Nombre cliente:</span>
                        <input type="text" class="form-control" name="cliente" placeholder="Ingrese nombre de cliente" >
                    </div>
                    <div class="col">
                        <span>Saldo:</span>
                        <input type="number" class="form-control" name="saldo" placeholder="Ingrese saldo actual" >
                    </div>
                    <div class="col">
                        <span>Cantida de servicios:</span>
                        <input type="number" class="form-control" name="producto" placeholder="Ingrese la cantidad de servicios ofrecidos" >
                    </div>
                    <div class="col">
                        <span>Número de cuenta:</span>
                        <input type="number" class="form-control" name="cuenta" placeholder="Ingrese número de cuenta" >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span>Prestamo :</span>
                        <input type="text" class="form-control" name="prestamo" placeholder="Ingrese cantidad de dinero que puede prestarse" >
                    </div>
                    <div class="col">
                        <span>Edad:</span>
                        <input type="number" class="form-control" name="edad" placeholder="Ingrese edad para acceder a prestamos cuenta joven" >
                    </div>
                    <div class="col">
                        <span>Hipoteca:</span>
                        <input type="number" class="form-control" name="hipoteca" placeholder="Ingrese la cantidad de servicios ofrecidos" >
                    </div>
                </div><br>
                <center><input type="submit" class="btn btn-primary" name="enviar9" value="Enviar"></center>
            </form>
        </div>
    </div>
</body>
</html>