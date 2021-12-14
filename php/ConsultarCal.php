<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/cali_profe.css">
  <title>CALIFICACIONES</title>
</head>
<body>
<div class="btn-regreso">
      <button class="btn-regresar">
        <a href="javascript:  history.go(-1)">REGRESAR</a>
      </button>
      </div>

  <table border="1">
  <tr>
    <td colspan="2">-------------Alumnos -----------</td>
    <td colspan="1">cali S </td>
    <td colspan="1">cali R</td>
    <td colspan="1">cali D</td>
    <td colspan="1">cali M</td>
    <td colspan="1">cali F</td>
  </tr>
  
  <?php 
  include("con_db.php");
    $resul = mysqli_query($conex,"select * from alumno");
//MYSQLI_ASSOC 
    while($row = mysqli_fetch_array($resul, MYSQLI_ASSOC)){
      $alumno = $row["idalumno"];
      $consulta_cal = mysqli_query($conex,"select * from notas where idalumno = '$alumno'  ");
        while($row2 = mysqli_fetch_array($consulta_cal, MYSQLI_ASSOC)){
          ?>
      <tr>
        <td><?php echo $row["idalumno"];  ?></td>
        <td> <?php echo $row["nombre"];  ?></td>
        <td> <?php echo $row2["notaSuma"];  ?></td>
        <td> <?php echo $row2["notaResta"];  ?></td>
        <td> <?php echo $row2["notaMulti"];  ?></td>
        <td> <?php echo $row2["notaDiv"];  ?></td>
        <td> <?php echo $row2["notaFinal"];  ?></td>
      </tr>
      <?php
        }
    }
    ?>
  </table>
</body>
</html>