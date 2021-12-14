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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/contenedores_ex.css" />
    <title>Examenes</title>
  </head>
  <body>
    <div class="btn">
      <button class="btn-regresar">
        <a href="javascript:  history.go(-1)">REGRESAR</a>
      </button>
    </div>
    <div class="btn">
      <button class="btn-regresar" type="submit" name="btn-calif">
        <a href="cal_final.php" name="btn-calif">RESULTADOS</a>
      </button>
    </div>
    <div class="btn">
      <button class="btn-regresar" type="submit" name="btn-calif">
        <a href="vistacursoalumno.php" name="btn-calif">Inicio</a>
      </button>
    </div>
    <div class="conteiner">
      <div class="conteinerex1">
        <div class="exm1">
          <a href="formularioSuma.php">
            <img src="img/fondo_numeros.jpg" alt="" srcset="" />
            <p class="p-ex1">SUMAS</p></a
          >
        </div>
        <div class="exm2">
          <a href="formularioResta.php">
            <img src="img/fondo_numeros.jpg" alt="" srcset="" />
            <p class="p-ex1">RESTAS</p></a
          >
        </div>
      </div>
      <div class="conteinerex2">
        <div class="exm1">
          <a href="formularioMulti.php">
            <img src="img/fondo_numeros.jpg" alt="" srcset="" />
            <p class="p-ex1">MULTIPLICACION</p></a
          >
        </div>
        <div class="exm2">
          <a href="formularioDiv.php">
            <img src="img/fondo_numeros.jpg" alt="" srcset="" />
            <p class="p-ex1">DIVISION</p></a
          >
        </div>
      </div>
    </div>
  </body>
</html>
