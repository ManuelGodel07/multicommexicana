<?php
    include'conexion.php';
    //recibir datos
    $insertar_usuario= $_POST["user_name"];
    $insertar_correo= $_POST["user_email"];
    $insertar_contraseña= $_POST["user_pass"];

    try {
        //insertar
        $sql= "INSERT INTO datos_usuarios (NOMBRE, CORREO, CONTRASENA) VALUES ('$insertar_usuario','$insertar_correo','$insertar_contraseña')";
        //ejecutar
        $resultado= mysqli_query($base,$sql);
        echo "Usuario creado";
    } catch (Exception $e) {
        echo"error mul";
        die('Error' . $e->getMessage());
        alert("Linea del error" . $e->getLine());
    } 
    mysqli_close($base)
        
        
        
        
        /**** 
         $resultado= $base->prepare($sql);
 
         $resultado->execute(array(":nombre"=>$insertar_usuario,":correo"=>$insertar_correo,":contraseña"=>$insertar_contraseña));
         echo "Usuario creado";
         $resultado->closeCursor();
 
     } catch (Exception $e) {
         echo"error mul";
         die('Error' . $e->getMessage());
         alert("Linea del error" . $e->getLine());
     }



         include("conexion.php");
    $conexion = $base->query("SELECT * FROM datos_usuarios")->FetchAll(PDO::FETCH_OBJ);
    
    if (isset($_POST["enviar_btn"])) {
        echo "Tu usuario ha sido creado, regresa al inicio para iniciar sesión.";
        echo "El nombre es: " . $_POST["nombre_txt"];
        echo "La contraseña es: " . $_POST["password_txt"];
    } else {
        echo "tristeza";
    }
    ****/




?>