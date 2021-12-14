<?php
session_start();
  $varsesion = $_SESSION['usuario'];
  $_SESSION['tablaa'] = "alumno";
  if($varsesion == null || $varsesion == ''){
    echo "no puedes entarr";
    die();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/calificaciones.css">
  <title>CALIFICACIONES</title>
</head>
<body>
  
  <?php 
  include("php/con_db.php");
    $usuario = $_SESSION['usuario'];
    $resul = mysqli_query($conex,"select * from alumno where usuario = '$usuario'");
//MYSQLI_ASSOC 
    while($row = mysqli_fetch_array($resul, MYSQLI_ASSOC)){
      $idalumno = $row['idalumno'];
      $consulta1 = "SELECT * FROM `notas` WHERE idalumno = '$idalumno'" or die(mysqli->error());
      $resultadoFi = mysqli_query($conex, $consulta1);
  
      $rowe = mysqli_fetch_array($resultadoFi, MYSQLI_ASSOC);
      if((int)$rowe["notaFinal"] ){
        ?>
        <button class="btn-regresar">
        <a href="javascript:  history.go(-1)">REGRESAR</a>
      </button>
        <div class = "conteiner-calificacion">
        <p>TUS NOTAS SON</p>
        <p>SI tienen calificacion de 4 pasaste el curso</p>
        <div class="conteiner">
        <div class="calf">
            <P>suma</P> 
            <p> <?php echo $rowe["notaSuma"]; ?></p>
          </div>
        <div class="conteiner">
          <div class="calf">
            <P>Resta</P> 
            <p> <?php echo $rowe["notaResta"]; ?></p>
          </div>
        <div class="conteiner">
          <div class="calf">
            <P>MULTIPLICACION</P> 
            <p> <?php echo $rowe["notaMulti"]; ?></p>
          </div>
        <div class="conteiner">
          <div class="calf">
            <P>DIVISION</P> 
            <p> <?php echo $rowe["notaDiv"]; ?></p>
          </div> 
        <div class="conteiner">
          <div class="calf">
            <P>Final</P> 
            <p> <?php echo $rowe["notaFinal"]; ?></p>
          </div> 
        </div>    
        </div>
        <?php
      }
      ?>
     
    <?php
    }
    ?>
  </table>
</body>
</html>