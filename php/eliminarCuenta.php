<?php
  include("con_db.php");
  session_start();
  $usuario = $_SESSION['usuario'];
  $tabla = $_SESSION['tablaa'];

  $consulta = "DELETE FROM `$tabla` WHERE usuario = '$usuario'" or die(mysqly->error());
  $resultado = mysqli_query($conex, $consulta);
  if($resultado){
    header("location: cerrar_sesion.php");
  }
?>