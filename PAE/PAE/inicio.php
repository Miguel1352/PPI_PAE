<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso</title>
    <link rel="shortcut icon" href="imagenes/logoo.png">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="estilo_boton.css">
    <img src="imagenes/I.E. Las Nieves.png" class="imagen-esquina-izquierda" alt="" width="170" height="150">
    <img src="imagenes/Jaime isaza Cadavid.png" class="imagen-esquina-derecha" alt="" width="280" height="150">  
</head>
<body>
  <div>
    <br><br><br><br>
    <span>INICIO DE SESIÓN</span>
  </div>
  <br>
  <br><br><br><br>
    <center>
        <section class="form-login">
            <form name="form1" action="" method="POST">
                <?php
                include('./db/conexion.php')?>
                <input class="controls" type="text" name="txt" value="" placeholder="Usuario">
                <input class="controls" type="text" name="num" value="" placeholder="Contraseña">
                <input class="buttons" type="submit" value="Ingresar"  name="btnEnviar">
            </form>
        </section>
        <a href="Pae - Programa de Alimentación Escolar.html" class="btn-neon">
            <span id="span1"></span>
            <span id="span2"></span>
            <span id="span3"></span>
            <span id="span4"></span>
            Regresar
        </a>
    </center>
   
</body>
</html>
