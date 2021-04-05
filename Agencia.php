<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet " href="esstilos.css">
    <title>Agencia de Vijes</title>
</head>
<body>
    <h1><center>Agencia de viajes Joss</center></h1>
    <br>
    <p>El director de una escuela está organizando un viaje de estudios, y requiere determinar cuánto debe cobrar a cada alumno y cuánto debe pagar a la compañía de viajes por el servicio. La forma de cobrar es la siguiente:
Si son 100 alumnos o más, el costo por cada alumno es de $65.00; de 50 a 99 alumnos, el costo es de $70.00, de 30 a 49, de $95.00, y si son menos de 30, el costo de la renta del autobús es de $4000.00, sin importar el número de alumnos.
Realiza la pagina Web utilizando PHP.
Aplica fuente, color, estilos.
Inserta imagen relacionada con el ejercicio.
Sube en este espacio los archivos php, html, css e imagenes que utilices.
Agrega de igual manera una captura de pantalla del resultado.</p>

    <center><img src="4444.jpg" 
    width="300" height="300"></center><br>

    <br>
    
    <?php
        $alumnos = 101 ; //rand(1200);
        $importe =0;
        if($alumnos>=100)
            $importe=$alumnos*65;
        elseif($alumnos>=50 && $alumnos<=99)
        $importe=$alumnos*70;
        elseif($alumnos>=30 && $alumnos<=49)
        $importe=$alumnos*95;
        else{
            $costo=$alumnos;
            $importe= 4000;
            echo "<br> El costo es: ","$",$costo;
            echo "<br>";

        }
        echo"La cantidad de alumnos que asistió fue de: $alumnos";
        echo"<br>El importe es: ","$", $importe;

    ?>
</body>
</html>