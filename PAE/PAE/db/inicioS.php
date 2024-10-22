<?php 
include('./db/conexion.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') { // verifica si presionarón el boton
    if (isset($_POST['btnEnviar'])) { // Verificar el envío de btnEnviar
       
        $correo = trim($_POST["txt"]); // Crea variables
        $clave = trim($_POST["num"]);


        if (empty($correo)) { // Si el nombre esta vacio saldra un mensaje
            echo '<div class="error">El nombre no puede estar vacio</div>';
        }
        else if(empty($clave)){
            echo '<div class="error">La clave no puede estar vacia</div>';
        }

        $sql = "SELECT * FROM ADMINISTRADORES where Nombre='$correo' and Contraseña='$clave'";
        $resultado = $conexion->query($sql);


        if($datos =  $resultado ->fetch_object()){
            header('location:inicio.php');
        }else{
            echo '<div class="error">acceso denegado</div>';
        }

    }
} 
?>
