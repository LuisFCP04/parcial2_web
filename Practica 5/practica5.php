<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica #5 Intercambio de variables PHP</title>
</head>
<body>
    <?php 
       $registros = array(
           array("id" => 1, "nombre" => "Luis", "edad" => 17, "sexo" => "M"),
           array("id" => 2, "nombre" => "Martha", "edad" => 16, "sexo" => "F"),
           array("id" => 3, "nombre" => "Alfonso", "edad" => 17, "sexo" => "M"),
           array("id" => 4, "nombre" => "Mara", "edad" => 17, "sexo" => "F"),
           array("id" => 5, "nombre" => "Kenji", "edad" => 17, "sexo" => "M"),
           array("id" => 6, "nombre" => "Juan", "edad" => 17, "sexo" => "M"),

       );
    ?>
    <h1>Tabla de registros</h1><hr>
    <table  border="1s">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Edad</td>
                <td>Sexo</td>
                <td>Detalle</td>
            </tr>
        </thead>
        <tbody>
           <?php 
             for($i = 0; $i< count($registros); $i++){
                 echo "<tr>";
                     echo "<td>" . $registros[$i]["id"] . "</td>";
                     echo "<td>" . $registros[$i]["nombre"] . "</td>";
                     echo "<td>" . $registros[$i]["edad"] . "</td>";
                     echo "<td>" . $registros[$i]["sexo"] . "</td>";
                     echo "<td><a href='practica5Detalle.php?id=".$registros[$i]["id"]."'>Ver detalle</a></td>";
                 echo "</tr>";
             }
           ?>
        </tbody>
    </table>
         <h2>Nombre: Luis Fernando Cruz Ponce</h2>
</body>
</html>