<?php
  include("con_db.php");
  if(isset($_GET['enviar'])){
    session_start();
    $p1 = $_GET['p1'];
    $p2 = $_GET['p2'];
    $p3 = $_GET['p3'];
    $p4 = $_GET['p4'];
    $p5 = $_GET['p5'];
    $p6 = $_GET['p6'];
    $puntos= 0;
    if($p1 == "a"){
      $puntos++;
    }
    if($p2 == "c"){
      $puntos++;
    }
    if($p3 == "b"){
      $puntos++;
    }

    if($p4 == "d"){
      $puntos++;
    }
    if($p5 == "a"){
      $puntos++;
    }
    if($p6 == "d"){
      $puntos++;
    }

    

    $usuario = $_SESSION['usuario'];
    echo $puntos;
    $resul = mysqli_query($conex,"select * from alumno where usuario = '$usuario'");
    // while($row = mysqli_fetch_array($resul, MYSQLI_ASSOC)){
    //   echo $row['idalumno'], $row['nombre'], $row['correo'], $row['usuario'];
    // }
    //consultando alumno
    $consulta = "SELECT * FROM `alumno` WHERE usuario = '$usuario'" or die(mysqli->erro());
    $resultado = mysqli_query($conex, $consulta);

    $row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    echo gettype($row['idalumno']), $row['idalumno'];
    $idalu = $row['idalumno'];
    
    //agregando nota de la suma
    $consulta1 = "SELECT * FROM `notas` WHERE idalumno = '$idalu'" or die(mysqli->error());
    $resultado1 = mysqli_query($conex, $consulta1);
    $rowe = mysqli_fetch_array($resultado1, MYSQLI_ASSOC);
    if($rowe['notaSuma']  || $rowe['notaResta'] || $rowe['notaMulti'] || $rowe['notaDiv']){
      // si existe alguna nota utilizaremos el update
      $consultaAct = " UPDATE `notas` SET `notaSuma`='$puntos' WHERE idalumno = '$idalu'" or die(mysqli->error());
      $resultadoAct = mysqli_query($conex, $consultaAct);
      if($resultadoAct){
           echo "nota actualizada";
      }
    }else{
        $consulta1 = "INSERT INTO `notas`( `idalumno`, `idcurso`, `idprofesor`, `notaSuma`) VALUES ('$idalu','2345','1','$puntos')";
        $resultado1 = mysqli_query($conex, $consulta1);
        if($resultado1){
           echo "nuevo dato";
        }
    }
   
  }
  if(isset($_GET['enviarResta'])){
    session_start();
    $p1 = $_GET['p1'];
    $p2 = $_GET['p2'];
    $p3 = $_GET['p3'];
    $p4 = $_GET['p4'];
    $p5 = $_GET['p5'];
    $p6 = $_GET['p6'];
    $puntos= 0;
    if($p1 == "a"){
      $puntos++;
    }
    if($p2 == "c"){
      $puntos++;
    }
    if($p3 == "b"){
      $puntos++;
    }

    if($p4 == "d"){
      $puntos++;
    }
    if($p5 == "a"){
      $puntos++;
    }
    if($p6 == "d"){
      $puntos++;
    }

    

    $usuario = $_SESSION['usuario'];
    echo $puntos;
    $resul = mysqli_query($conex,"select * from alumno where usuario = '$usuario'");
    
    //consultando alumno
    $consulta = "SELECT * FROM `alumno` WHERE usuario = '$usuario'" or die(mysqli->erro());
    $resultado = mysqli_query($conex, $consulta);

    $row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    echo gettype($row['idalumno']), $row['idalumno'];
    $idalu = $row['idalumno'];
    
    //agregando nota de la suma
    $consulta1 = "SELECT * FROM `notas` WHERE idalumno = '$idalu'" or die(mysqli->error());
    $resultado1 = mysqli_query($conex, $consulta1);

    $rowe = mysqli_fetch_array($resultado1, MYSQLI_ASSOC);
    if($rowe['notaSuma']  || $rowe['notaResta'] || $rowe['notaMulti'] || $rowe['notaDiv']){
      // si existe alguna nota utilizaremos el update
      $consultaAct = " UPDATE `notas` SET `notaResta`='$puntos' WHERE idalumno = '$idalu'" or die(mysqli->error());
      $resultadoAct = mysqli_query($conex, $consultaAct);
      if($resultadoAct){
           echo "nota actualizada";
      }
    }else{
        $consulta1 = "INSERT INTO `notas`( `idalumno`, `idcurso`, `idprofesor`, `notaResta`) VALUES ('$idalu','2345','1','$puntos')";
        $resultado1 = mysqli_query($conex, $consulta1);
        if($resultado1){
           echo "nuevo dato";
        }
    }
   
  }

  if(isset($_GET['enviarMulti'])){
    session_start();
    $p1 = $_GET['p1'];
    $p2 = $_GET['p2'];
    $p3 = $_GET['p3'];
    $p4 = $_GET['p4'];
    $p5 = $_GET['p5'];
    $p6 = $_GET['p6'];
    $puntos= 0;
    if($p1 == "a"){
      $puntos++;
    }
    if($p2 == "c"){
      $puntos++;
    }
    if($p3 == "b"){
      $puntos++;
    }

    if($p4 == "d"){
      $puntos++;
    }
    if($p5 == "a"){
      $puntos++;
    }
    if($p6 == "d"){
      $puntos++;
    }

    

    $usuario = $_SESSION['usuario'];
    echo $puntos;
    $resul = mysqli_query($conex,"select * from alumno where usuario = '$usuario'");
    
    //consultando alumno
    $consulta = "SELECT * FROM `alumno` WHERE usuario = '$usuario'" or die(mysqli->erro());
    $resultado = mysqli_query($conex, $consulta);

    $row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    echo gettype($row['idalumno']), $row['idalumno'];
    $idalu = $row['idalumno'];
    
    //agregando nota de la suma
    $consulta1 = "SELECT * FROM `notas` WHERE idalumno = '$idalu'" or die(mysqli->error());
    $resultado1 = mysqli_query($conex, $consulta1);

    $rowe = mysqli_fetch_array($resultado1, MYSQLI_ASSOC);
    if($rowe['notaSuma']  || $rowe['notaResta'] || $rowe['notaMulti'] || $rowe['notaDiv']){
      // si existe alguna nota utilizaremos el update
      $consultaAct = " UPDATE `notas` SET `notaMulti`='$puntos' WHERE idalumno = '$idalu'" or die(mysqli->error());
      $resultadoAct = mysqli_query($conex, $consultaAct);
      if($resultadoAct){
           echo "nota actualizada";
      }
    }else{
        $consulta1 = "INSERT INTO `notas`( `idalumno`, `idcurso`, `idprofesor`, `notaMulti`) VALUES ('$idalu','2345','1','$puntos')";
        $resultado1 = mysqli_query($conex, $consulta1);
        if($resultado1){
           echo "nuevo dato";
        }
    }
   
  }

  if(isset($_GET['enviarDiv'])){
    session_start();
    $p1 = $_GET['p1'];
    $p2 = $_GET['p2'];
    $p3 = $_GET['p3'];
    $p4 = $_GET['p4'];
    $p5 = $_GET['p5'];
    $p6 = $_GET['p6'];
    $puntos= 0;
    if($p1 == "a"){
      $puntos++;
    }
    if($p2 == "c"){
      $puntos++;
    }
    if($p3 == "b"){
      $puntos++;
    }

    if($p4 == "d"){
      $puntos++;
    }
    if($p5 == "a"){
      $puntos++;
    }
    if($p6 == "d"){
      $puntos++;
    }

    

    $usuario = $_SESSION['usuario'];
    echo $puntos;
    $resul = mysqli_query($conex,"select * from alumno where usuario = '$usuario'");
    
    //consultando alumno
    $consulta = "SELECT * FROM `alumno` WHERE usuario = '$usuario'" or die(mysqli->erro());
    $resultado = mysqli_query($conex, $consulta);

    $row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    echo gettype($row['idalumno']), $row['idalumno'];
    $idalu = $row['idalumno'];
    
    //agregando nota de la suma
    $consulta1 = "SELECT * FROM `notas` WHERE idalumno = '$idalu'" or die(mysqli->error());
    $resultado1 = mysqli_query($conex, $consulta1);

    $rowe = mysqli_fetch_array($resultado1, MYSQLI_ASSOC);
    if($rowe['notaSuma']  || $rowe['notaResta'] || $rowe['notaMulti'] || $rowe['notaDiv']){
      // si existe alguna nota utilizaremos el update
      $consultaAct = " UPDATE `notas` SET `notaDiv`='$puntos' WHERE idalumno = '$idalu'" or die(mysqli->error());
      $resultadoAct = mysqli_query($conex, $consultaAct);
      if($resultadoAct){
           echo "nota actualizada";
      }
    }else{
        $consulta1 = "INSERT INTO `notas`( `idalumno`, `idcurso`, `idprofesor`, `notaDiv`) VALUES ('$idalu','2345','1','$puntos')";
        $resultado1 = mysqli_query($conex, $consulta1);
        if($resultado1){
           echo "nuevo dato";
        }
    }
   
  }


    session_start();
    $usuario = $_SESSION['usuario'];
    $consultaaa = "SELECT * FROM `alumno` WHERE usuario = '$usuario'" or die(mysqli->erro());
      $resultadooo = mysqli_query($conex, $consultaaa);
  
      $row = mysqli_fetch_array($resultadooo, MYSQLI_ASSOC);
      echo gettype($row['idalumno']), $row['idalumno'];
      $idalu = $row['idalumno'];
  
    $consulta1 = "SELECT * FROM `notas` WHERE idalumno = '$idalu'" or die(mysqli->error());
      $resultadoFi = mysqli_query($conex, $consulta1);
  
      $rowe = mysqli_fetch_array($resultadoFi, MYSQLI_ASSOC);
      if($rowe['notaSuma']  || $rowe['notaResta'] || $rowe['notaMulti'] || $rowe['notaDiv']){
        $calSuma = $rowe['notaSuma'];
        $calResta = $rowe['notaResta'];
        $calMulti = $rowe['notaMulti'];
        $calDiv = $rowe['notaDiv'];
  
        echo $calSuma, "  ", $calResta, "  ", $calMulti, "  ", $calDiv, "  ";
        $calFinal =  $calSuma + $calResta + $calMulti + $calDiv;
        $calFinal = $calFinal / 4;
        $consultaAct = " UPDATE `notas` SET `notaFinal`='$calFinal' WHERE idalumno = '$idalu'" or die(mysqli->error());
        $resultadoAct = mysqli_query($conex, $consultaAct);
        if($resultadoAct){
             header("location: ../contenido_forms.php");
        }
      }
?>