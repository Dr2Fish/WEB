<?php
include("con_db.php");
if(isset($_POST['enviar'])){
  session_start();
  $tabla = $_SESSION['variable'];
  $usuario = $_SESSION['usuario'];

  $nombrenuevo = $_POST['nombre'];
  $apellidosNew = $_POST['apellidos'];
  $usuarioNew = $_POST['usuario'];
  $passNew = $_POST['password'];

  $consulta = "UPDATE `$tabla` SET `nombre`='$nombrenuevo',`Apellidos`='$apellidosNew',`password`='$passNew',`usuario`='$usuarioNew' WHERE usuario='$usuario'";
  $resultado = mysqli_query($conex, $consulta);

  if($resultado){
    $_SESSION['usuario'] = $usuarioNew;
    if($tabla == "alumno"){
      header("location: ../vistacursoalumno.php");
    }else{
      header("location: ../vistacursoprofesor.php");
    }
    
  }else{
    echo "algo anda mal";
  }

}









?>