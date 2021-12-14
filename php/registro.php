<?php

  include("con_db.php");

  if(isset($_POST['enviar'])){
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $usuario = $_POST['usuario'];
    $fecha = $_POST['fecha_nac'];
    $correo = $_POST['correo'];
    $pass = $_POST['contrasenia'];
    $clave = 2345;

    $opcion = $_POST["opcion"];

    
    if($opcion == "Alumno"){
      $consulta = "INSERT INTO `alumno`( `nombre`, `Apellidos`, `Fnacimiento`, `correo`, `password`, /*`clavecurso`,*/ `usuario`) VALUES ('$nombre','$apellidos','$fecha','$correo','$pass',/*'2345',*/'$usuario')" or die(mysqli_error($conex));
    $resultado = mysqli_query($conex, $consulta);
      if($resultado){
        session_start();
      $_SESSION['usuario'] = $usuario;
        header("Location: ../vistacursoalumno.php");
      die();
      }
    }else{
      $consulta = "INSERT INTO `profesor`( `nombre`, `Apellidos`, `Fnacimiento`, `correo`, `password`, /*`clavecurso`,*/ `usuario`) VALUES ('$nombre','$apellidos','$fecha','$correo','$pass',/*'2345',*/'$usuario')" or die(mysqli_error($conex));
    $resultado = mysqli_query($conex, $consulta);
      if($resultado){
        session_start();
      $_SESSION['usuario'] = $usuario;
        header("Location: ../vistacursoprofesor.php");
      die();
      }
    }
    
  }


  

?>