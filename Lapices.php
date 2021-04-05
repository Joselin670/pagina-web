<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="esstilos.css">
    <title>Agencias de viajes</title>
</head>
<body><h5>

    <h1>Agencia de viajes Ami</h1>
    <?php
    $alumnos = rand(1,200);
    $importe = 0;
    if($alumnos >= 100)
      $importe  = $alumnos * 65;
    elseif($alumnos >= 50 && $alumnos <=99)
      $importe = $alumnos * 70;
    elseif($alumnos >= 30 && $alumnos <= 49)
      $importe = $alumnos * 95;
    else{ 
      $costo = 4000 / $alumnos;
      $importe = 4000; 
      echo $costo;
    }
      echo $importe;
    ?>
    <br>
    <a href="index.html">Regresar al menu inicial</a>
</body>
</html>