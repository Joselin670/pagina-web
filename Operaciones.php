<?php  
//Mi primer página el PHP
/*4 AMP
Páginas Web Servidor
CBTis 83*/
$nombre= 'Pancho';
$edad= '20';
$peso=7.50;
echo '<h2>Hola Mundo</h2>';
echo "<br>";
echo $nombre; echo "<br>";
echo $edad; echo "<br>";
echo $peso; echo "<br>";

$numero = 8;
$numero2 = 8;
$suma = $numero + $numero2;
 echo "La suma de $numero + $numero2 = $suma"; echo "<br>";
 
 $suma = $numero - $numero2;
 echo "La suma de $numero - $numero2 = $suma";echo "<br>";
 $suma = $numero * $numero2;
 echo "La suma de $numero * $numero2 = $suma"; echo "<br>";
 $suma = $numero / $numero2;
 echo "La suma de $numero / $numero2 = $suma"; echo "<br>";
 
 //Calcular el área de un circulo
 define("PI",3.14);
 $radio = 8;

 $area= PI * $radio * $radio;
 echo "Area del círculo $area"; echo "<br>";

 $area = PI * $radio ** 2;
 echo "Area del círculo $area"; echo "<br>";

$area = PI * pow($radio,2);
echo "Area del círculo $area"; echo "<br>";

$promedio = 8;
$calificacionMinima= 6;
if ($promedio>= $calificacionMinima )
echo "Aprueba";
else  
echo "Reprueba";
echo "<br>";
 

    echo "Hoy es ";
    $dia =date("D");

    if($dia == "Mon")
    echo "Lunes";
     elseif ($dia == "Tue")
    echo "Martes";
    elseif ($dia == "Wen")
    echo "Miercoles";
    elseif ($dia == "Thu")
    echo "Jueves";
    elseif ($dia == "Fri")
    echo "Viernes";
    elseif ($dia == "Sat")
    echo "Sabado";
    else
    echo "Domingo";


?>