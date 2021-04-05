<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet " href="esstilos.css">
    <title>Lapices</title>
</head>
<body>
<h1>Lapices Joss</h1>
<br>
<p>Realice un programa en PHP, para determinar cuánto se debe pagar por equis cantidad de lápices considerando que si son 1000 o más el costo es de 85¢; de lo contrario, el precio es de 90¢.
Utilice estilos en la impresión de datos</p>
<img class="foto2" src="lapices.jpg" alt="Lapices"><br>
    <?php
     $lapices = 583;
     $total =0;
         if ($lapices >= 1000 ){
             $total = $lapices * .85;
            echo "Catidad de lapices  $lapices * .85 = $total";echo "<br>";
    }
        else {
            $total = $lapices * .90;
            echo "Catidad de lapices  $lapices * .90 = $total";echo "<br>";
    }

    ?>
</body>
</html>