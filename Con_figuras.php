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
        <a href="vistacursoalumno.php" name="btn-calif">Inicio</a>
      </button>
    </div>
    <div class="conteiner contenidoMenu" id="contenidoMenu">
      <div class="conteinerex1">
        <div class="exm1">
          <a href="figuras_geometricas.html">
            <img src="img/fondo_numeros.jpg" alt="" srcset="" />
            <p class="p-ex1"> Figuras gral</p></a>
        </div>

        <div class="exm2">
          <a href="conejoytortuga.html">
            <img src="img/fondo_numeros.jpg" alt="" srcset="" />
            <p class="p-ex1">Conejo y Tortuga</p></a
          >
        </div>
        <div class="exm1">
          <a href="escorpionypez.html">
            <img src="img/fondo_numeros.jpg" alt="" srcset="" />
            <p class="p-ex1">Escorpio y pez</p></a>
        </div>

        <div class="exm2">
          <a href="">
            <img src="img/fondo_numeros.jpg" alt="" srcset="" />
            <p class="p-ex1">Ballena y Caballo</p></a
          >
        </div>
      </div>
      <div class="conteinerex2">
        <div class="exm1">
          <a href="gansoyardilla.html">
            <img src="img/fondo_numeros.jpg" alt="" srcset="" />
            <p class="p-ex1">ganzo y ardilla</p></a
          >
        </div>
        <div class="exm2">
          <a href="gatoypato.html">
            <img src="img/fondo_numeros.jpg" alt="" srcset="" />
            <p class="p-ex1">gato y pato</p></a
          >
        </div>
        <div class="exm1">
          <a href="pandayfoca.html">
            <img src="img/fondo_numeros.jpg" alt="" srcset="" />
            <p class="p-ex1">panda y foca</p></a
          >
        </div>
        <div class="exm2">
          <a href="perroyvaca.html">
            <img src="img/fondo_numeros.jpg" alt="" srcset="" />
            <p class="p-ex1">perro y vaca</p></a
          >
        </div>
      </div>
    </div>
  </body>
</html>
