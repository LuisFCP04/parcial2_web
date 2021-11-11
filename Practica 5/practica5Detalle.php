<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de registro</title>
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

       if (isset($_GET["id"])) {
        $id = $_GET["id"] - 1;
           echo "<h1>Datos de la persona</h1><hr>";
           echo "ID: " . $_GET["id"] . "<br>";
           echo "Nombre: " . $registros[$id]["nombre"] . "<br>";
           echo "Edad: " . $registros[$id]["edad"] . "<br>";
           echo "Sexo: " . $registros[$id]["sexo"] . "<br>";
       }else{
           echo "<h1>El dato de ID es requerido</h1>";
       }
    ?>
</body>
</html>