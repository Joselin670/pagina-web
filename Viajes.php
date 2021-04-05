
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
