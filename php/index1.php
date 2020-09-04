<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if (isset($_POST["enviar_btn"])) {
        echo "exito";
        echo "El nombre es: " . $_POST["nombre_txt"];
        echo "La contraseña es: " . $_POST["password_txt"];
    } else {
        echo "tristeza";
    }
    





?>
</body>
</html>