<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>con_ dataBase</title>
</head>
<body>
 

  <table border="1">
  <tr>
    <td colspan="4">MYSQLY PHP SELECT QUERY</td>
  </tr>
  
  <?php 
  include("con_db.php");
    $resul = mysqli_query($conex,"select * from alumno");
//MYSQLI_ASSOC 
    while($row = mysqli_fetch_array($resul, MYSQLI_ASSOC)){
      ?>
      <tr>
        <td><?php echo $row["idalumno"];  ?></td>
        <td> <?php echo $row["nombre"];  ?></td>
        <td><?php echo $row["apaterno"];  ?></td>
        <td><?php echo $row["amaterno"];  ?></td>
        <td><?php echo $row["Fnacimiento"];  ?></td>
        <td><?php echo $row["correo"];  ?></td>
        <td><?php echo $row["password"];  ?></td>
        <td><?php echo $row["clavecurso"];  ?></td>
      </tr>
    <?php
    }
    ?>
  </table>
</body>
</html>