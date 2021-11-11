<?php 

     $nombre = $_GET["nombre"];
     $correo = $_GET["correo"];
     $fecha_n = $_GET["Fecha_N"];
     $edad = $_GET["Edad"];
     $sexo = $_GET["sexo"];
     $A_I = $_GET["areas"];

     echo "El nombre del cliente es:" . $nombre . "<br>" . "<br>";
     echo "La edad del cliente es:"   . $edad . "<br>" . "<br>";
     echo "El correo del cliente es:" . $correo . "<br>" . "<br>";
     echo "La fecha de nacimiento del cliente es:" .  $fecha_n . "<br>" . "<br>";
     echo "El sexo del cliente es:"   .  $sexo . "<br>" . "<br>";
     echo "Las areas de interés del cliente son:" . "<br>";
     
     
     for($i = 0; $i < count($A_I) ; $i++){
          echo $A_I[$i] . "<br>";
     }

     echo "<br><br>Nombre: Luis Fernando Cruz Ponce";             
?>

