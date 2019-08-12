<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Primer mensaje </br>";

    function MostrarDatos(){
        echo "Mensaje dentro de la funcion </br>";
    }

    echo "Segundo mensaje </br>";
     ?>

     <?php
        MostrarDatos();

        include("proporciona_datos.php"); //Si no encuentra el archivo pues seguira ejecutando el programa

        require("proporciona_datos.php"); //Si no encuentra el archivo entonces el programa se para ahi
        
		
     ?>
</body>
</html>