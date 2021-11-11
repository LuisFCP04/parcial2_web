<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Práctica #2 PHP dentro de HTML</title>
</head>
<body>
	<?php
         $numero = rand(1,4);
         $color = ["#78b21b", "#fff5bc", "#40717c", "#f44336"];
         $numcolor = rand(0,3); 
         echo "Número generado = " . $numero. "<br>";
         echo "<div style = 'color:".$color[$numcolor]."'>Color generado</div>";

         if ($numero == 1) {
     ?>
        <h1 style="color: <?php echo $color[$numcolor]; ?>">Título de la página</h1>

     <?php }  elseif ($numero == 2) { ?>

        <h2 style="color: <?php echo $color[$numcolor]; ?>">Título de la página</h2>

     <?php } elseif($numero == 3){ ?>

        <h3 style="color: <?php echo $color[$numcolor]; ?>">Título de la página</h3>

     <?php } else { ?>

    	<h4 style="color: <?php echo $color[$numcolor]; ?>">Título de la página</h4>

    <?php } ?>

    <h1>Nombre: Luis Fernando Cruz Ponce</h1>
</body>
</html>