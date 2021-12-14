<?php
session_start();
  $varsesion = $_SESSION['usuario'];
  $recibo = $_GET['tabla'];
  $_SESSION['variable'] = $recibo;
  if($varsesion == null || $varsesion == ''){
    echo "no puedes entarr";
    die();
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Configurar Perfil</title>
    <meta name="author" content="Rayón Salinas Ariana" />
    <meta name="keywords" content="HTML, CSS" />
    <meta name="description" content="pagina web de selectores" />
    <link rel="stylesheet" type="text/css" href="css/estiloperfil.css" />
  </head>
  <body>
    <div class="navbar">
      <ul class="unorder">
        <li style="float: right">
          <a href="javascript:  history.go(-1)">REGRESAR</a>
        </li>
      </ul>
    </div>
    <form action='php/actualizar.php' method="POST">
      <div class="conteineeeer">
        <div class="perfil">
          <img class="avatar" src="img/avatar.png" />
          <div class="conteinerconfigg">
          <?php 
          include("php/con_db.php");
          $consulta = "SELECT  * FROM `$recibo` WHERE usuario = '$varsesion' " or die(myqli->error());
          $resultado = mysqli_query($conex,$consulta);
//MYSQLI_ASSOC 
          if($row = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
        
          ?>
            <input type="button" value="Cambiar avatar" />
            <label for="nombreusr"><p id="text_perfil">Nombre: <?php echo $row['nombre']?></p></label>
            <input
              type="text"
              id="nombre"
              name="nombre"
              placeholder="Ingresa tú nombre..."
            /><br />
            <label for="apaternousr"><p id="text_perfil">Apellidos: <?php echo $row['Apellidos']?></p></label>
            <input
              type="text"
              id="apellidos"
              name="apellidos"
              placeholder="Ingresa tú apellido paterno..."
            />
            <label for="amaternousr"><p id="text_perfil">usuario: <?php echo $row['usuario']?></p></label>
            <input
              type="text"
              id="usuario"
              name="usuario"
              placeholder="Ingresa tú apellidompaterno..."
            />
            <label for="passwordprof"><p id="text_perfil">Contraseña: <?php echo $row['password']?></p><br /></label>
            <input
              type="password"
              id="password"
              name="password"
              placeholder="Ingresa tú contraseña..."
            />
      
      <?php
      }
      ?>
            <div class="enviar">
              <button type="submit" name="enviar" class="enviar">Enviar</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </body>
</html>
