<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="ProyectoFinalphp.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
</head>
<body>

<div>
<font face="Arial" size="5">
<?php 

$nombreAl = $_GET["nombre"];
$pregunta1 = $_GET["pregunta1"];
$pregunta2 = $_GET["pregunta2"];
$pregunta3 = $_GET["pregunta3"];
$pregunta4 = $_GET["pregunta4"];
$pregunta5 = $_GET["pregunta5"];
$pregunta6 = $_GET["pregunta6"];
$pregunta7 = $_GET["pregunta7"];
$pregunta8 = $_GET["pregunta8"];
$pregunta9 = $_GET["pregunta9"];
$pregunta10 = $_GET["pregunta10"];
$calificacion = 0;
$calificacionSubio = true;

$pregunta8_1 = $pregunta8[0];
$pregunta8_2 = 0;

if(count($pregunta8) > 1){
   $pregunta8_2 = $pregunta8[1];
}

$pregunta5_1 = $pregunta5[0];
$pregunta5_2 = 0;

if(count($pregunta5) > 1){
   $pregunta5_2 = $pregunta5[1];
}

$pregunta4_1 = $pregunta4[0];
$pregunta4_2 = 0;

if(count($pregunta4) > 1){
   $pregunta4_2 = $pregunta4[1];
}

echo "<p style='text-align:justify;'>El nombre del alumno es: " . "<b>". $nombreAl ."</b>" . "<br>"  . "<br> <br>";

if($pregunta1 == 1969){
echo "La respuesta dada en la pregunta 1 fue :" . "<b>" . "<br>" . $pregunta1 . "</b>" . "✅" . "<br>"  . "<br>";
$calificacion++;
}else{
   echo "La respuesta dada en la pregunta 1 fue :" . "<b>" . "<br>" . $pregunta1 . ", la respuesta correcta era 1969  &#10060;" . "</b>" . "<br>"  . "<br>";
}

if($pregunta2 == 27){
   echo "La respuesta dada en la pregunta 2 fue :" . "<b>" . "<br>" . $pregunta2 . "</b>" . "✅" . "<br>"  . "<br>";
   $calificacion++;
   }else{
      echo "La respuesta dada en la pregunta 2 fue :" . "<b>" . "<br>" . $pregunta2 . ", la respuesta correcta era 27  &#10060;" . "</b>" . "<br>"  . "<br>";
   }


   if(strpos($pregunta3, 'Guadalupe Victoria') !== false || strpos($pregunta3, 'guadalupe victoria') !== false){
      echo "La respuesta dada en la pregunta 3 fue :" . "<b>" . "<br>" . $pregunta3 . "</b>" . "✅" . "<br>"  . "<br>";
      $calificacion++;
      }else{
         echo "La respuesta dada en la pregunta 3 fue :" . "<b>" . "<br>" . $pregunta3 . ", la respuesta correcta era Guadalupe Victoria  &#10060;" . "</b>" . "<br>"  . "<br>";
      }


      echo "La respuesta dada en la pregunta 4 fue: " . "<br>";
        if(count($pregunta4) < 3){
             if(strpos($pregunta4_1, 'Phyton') !== false || strpos($pregunta4_1, 'Java') !== false){
                
                echo "<b>" . $pregunta4_1 . "</b>" . "✅" . "<br>";
                  if($calificacionSubio == true){
                     $calificacion = $calificacion + 0.5;
                  }
                    }else{
                    echo "<b>" . $pregunta4_1  . "<b>, la respuesta correcta era Phyton y Java</b>  &#10060;<br>" . "</b>";
                     } 
                  
                     if(strpos($pregunta4_2, 'Java') !== false || strpos($pregunta4_2, 'Phyton') !== false){
                
                        echo "<b>" . $pregunta4_2 . "</b>" . "✅" . "<br>";
                          if($calificacionSubio == true){
                             $calificacion = $calificacion + 0.5;
                          }
                            }else{
                            echo "<b>" . $pregunta4_2  . "<b>, la respuesta correcta era Phyton y Java</b>  &#10060;<br>" . "</b>";
                             } 

                   }else{
            echo "<b>Seleccionaste más de 2 opciones, solo había 2 opciones correctas y eran Phyton y Java</b> &#10060;<br>";
          }

     $calificacionSubio = true;

echo "<br>";

echo "La respuesta dada en la pregunta 5 fue: " . "<br>";
        if(count($pregunta5) < 3){
         if(strpos($pregunta5_1, 'J1407b') !== false || strpos($pregunta5_1, 'Kepler-438b') !== false){
                
            echo "<b>" . $pregunta5_1 . "</b>" . "✅" . "<br>";
              if($calificacionSubio == true){
                 $calificacion = $calificacion + 0.5;
              }
                }else{
                echo "<b>" . $pregunta5_1  . "<b>, la respuesta correcta era Phyton y Java</b>  &#10060;<br>" . "</b>";
                 } 
              
                 if(strpos($pregunta5_2, 'Kepler-438b') !== false || strpos($pregunta5_2, 'J1407b') !== false){
            
                    echo "<b>" . $pregunta5_2 . "</b>" . "✅" . "<br>";
                      if($calificacionSubio == true){
                         $calificacion = $calificacion + 0.5;
                      }
                        }else{
                        echo "<b>" . $pregunta5_2  . "<b>, la respuesta correcta era J1407b y Kepler-438b</b>  &#10060;<br>" . "</b>";
                         } 

         }else{
            echo "<b>Seleccionaste más de 2 opciones, solo había 2 opciones correctas y eran J1407b y Kepler-438b</b> &#10060;<br>";
          }

$calificacionSubio = true;

echo "<br>";

if($pregunta6 == 365){
   echo "La respuesta dada en la pregunta 6 fue :" . "<b>" . "<br>" . $pregunta6 . "</b>" . "✅" . "<br>"  . "<br>";
   $calificacion++;
   }else{
      echo "La respuesta dada en la pregunta 6 fue :" . "<b>" . "<br>" . $pregunta6 . ", la respuesta correcta era 365  &#10060;" . "</b>" . "<br>"  . "<br>";
   }

   if(strpos($pregunta7, 'Triple Entente') !== false || strpos($pregunta7, 'triple entente') !== false){
      echo "La respuesta dada en la pregunta 7 fue :" . "<b>" . "<br>" . $pregunta7 . "</b>" . "✅" . "<br>"  . "<br>";
      $calificacion++;
      }else{
         echo "La respuesta dada en la pregunta 7 fue :" . "<b>" . "<br>" . $pregunta7 . ", la respuesta correcta era Triple Entente  &#10060;" . "</b>" . "<br>"  . "<br>";
      }


      echo "La respuesta dada en la pregunta 8 fue: " . "<br>";
        if(count($pregunta8) < 3){
         if(strpos($pregunta8_1, '2x') !== false || strpos($pregunta8_1, '2(x)') !== false){
                
            echo "<b>" . $pregunta8_1 . "</b>" . "✅" . "<br>";
              if($calificacionSubio == true){
                 $calificacion = $calificacion + 0.5;
              }
                }else{
                echo "<b>" . $pregunta8_1  . "<b>, la respuesta correcta era 2x y 2(x)</b>  &#10060;<br>" . "</b>";
                 } 
              
                 if(strpos($pregunta8_2, '2(x)') !== false || strpos($pregunta8_2, '2x') !== false){
            
                    echo "<b>" . $pregunta8_2 . "</b>" . "✅" . "<br>";
                      if($calificacionSubio == true){
                         $calificacion = $calificacion + 0.5;
                      }
                        }else{
                        echo "<b>" . $pregunta8_2  . "<b>, la respuesta correcta era 2x y 2(x)</b>  &#10060;<br>" . "</b>";
                         } 
         }else{
            echo "<b>Seleccionaste más de 2 opciones, solo había 2 opciones correctas y eran 2x y 2(x)</b> &#10060;<br>";
          }

echo "<br>";


if($pregunta9 == 1939){
   echo "La respuesta dada en la pregunta 9 fue :" . "<b>" . "<br>" . $pregunta9 . "</b>" . "✅" . "<br>"  . "<br>";
   $calificacion++;
   }else{
      echo "La respuesta dada en la pregunta 9 fue :" . "<b>" . "<br>" . $pregunta9 . ", la respuesta correcta era 1939  &#10060;" . "</b>" . "<br>"  . "<br>";
   }

   if(strpos($pregunta10, 'Yuri Gagarin') !== false || strpos($pregunta10, 'uri gagarin') !== false){
      echo "La respuesta dada en la pregunta 10 fue :" . "<b>" . "<br>" . $pregunta10 . "</b>" . "✅" . "<br>"  . "<br>";
      $calificacion++;
      }else{
         echo "La respuesta dada en la pregunta 10 fue :" . "<b>" . "<br>" . $pregunta10 . ", la respuesta correcta era Yuri Gagarin  &#10060;" . "</b>" . "<br>"  . "<br>";
      }

echo "<b> <p style='text-align:center;'> Calificación del alumno: " . $calificacion . "</p>" . "<br> </b>" . "<br>";

if($calificacion <6){
   echo "<b><p style='text-align:center;'>Reprobaste, suerte a la proxima :'(</b></p>";
}elseif($calificacion >= 6 && $calificacion <7){
   echo "<b><p style='text-align:center;'>Apenitas pasaste, esfuerzate más a la próxima ;)</b></p>";
}elseif($calificacion >=7){
   echo "<b><p style='text-align:center;'>Felicidades, pasaste el examen :></b></p>";
}
?>
</font>
</div>
</body>
</html>