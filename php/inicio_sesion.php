<?php
  include("con_db.php");

  if(isset($_POST['enviar'])){
    $pass = $_POST['contrasenia'];
    $usuario = $_POST['usuario'];
    $opcion = $_POST['opcion'];

    
    if($opcion == "Alumno"){
      // $consulta = "SELECT  `correo`, `password` FROM `alumno` WHERE correo = '$correo' " or die(myqli->error());
      $consulta = "SELECT  * FROM `alumno` WHERE usuario = '$usuario' " or die(myqli->error());
      $resultado = mysqli_query($conex, $consulta);
      if($row = mysqli_fetch_array($resultado)){
        if($row['password'] == $pass){
          session_start();
          $_SESSION['usuario'] = $usuario;
          header("Location: ../vistacursoalumno.php");
          die();
        }else{
          echo "pass incorrecta";
        }
      }else{
        echo "no eres alumno";
      }
    }else{
      $consulta = "SELECT  * FROM `profesor` WHERE usuario = '$usuario' " or die(myqli->error());
      $resultado = mysqli_query($conex, $consulta);
      if($row = mysqli_fetch_array($resultado)){
        if($row['password'] == $pass){
          session_start();
          $_SESSION['usuario'] = $usuario;
          header("Location: ../vistacursoprofesor.php");
          die();
        }else{
          echo "pass incorrecta";
        }
      }else {
        echo "no eres profe";
      }
    }
    
  }
   
   
?>