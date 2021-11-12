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
    <img src="https://img.icons8.com/external-icongeek26-linear-colour-icongeek26/64/000000/external-phone-alert-icongeek26-linear-colour-icongeek26-1.png"/>
    <a href="https://icons8.com/icon/vswLm17J8ZXa/phone">Phone icon by Icons8</a>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="form-control">
            <form action="array.php" method="post">
                <center><h1>Pasar valor por parametro con PHP</h1><center>
                <div class="row">
                    <div class="col">
                        <input type="number" class="form-control" name="n1" placeholder="Numero 1" min="1">
                    </div>
                    <div class="col">
                       <!-- <input type="number" class="form-control" name="n2" placeholder="Numero 2"> -->
                    </div>
                </div><br>
                <input type="submit" class="btn btn-primary"value="Enviar" name="valor">
            </form>
        </div>
    </div>
</body>
</html>
<?php
    if(isset($_POST['valor'])) {
        $n1 = $_POST['n1'];
    }
    llenarVector($n1);
    function llenarVector($n) {
        for ($i = 0; $i < $n; $i++) {
            $array = [$i=>$i];
            var_dump($array);
            print ("<hr></>");
        }
        foreach ($array as $numero) {
            $min = -1;
            $min++;
            $mult = $min * 2;
            echo $a ?"No soy el numero menor":"<h1>Yo soy el numero menor de array -->". $min ."</h1>";
            print ("<h1>Soy la multiplicacion del numero menor del array -->".$min." * 2 = <mark>$mult</h1>");
            print ("<hr></>");
            if ($numero <=$n) {
                print ("<h1>Soy el numero mayor del array -->".$numero."</h1>");
                $mult = $numero * 2;
                print ("<h1>Soy la multiplicacion del numero mayor del array -->".$numero.
                " * 2 = <mark>$mult</h1>");
            }
        }
    }
?>