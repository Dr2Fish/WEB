<?php
session_start();
$varsesion = $_SESSION['usuario'];
$_SESSION['tablaa'] = "alumno";
if($varsesion == null || $varsesion == ''){
  echo "no puedes entarr";
  die();
}
// include 'config.php';
if (isset($_POST['submit'])) {   
    if(is_uploaded_file($_FILES['fichero']['tmp_name'])) { 
     
        $ruta = "upload/"; 
    }  
 } 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/actPendiente.css">
  <title>Actividades</title>
</head>
<body>
<div class="btn">
      <button class="btn-regresar">
        <a href="javascript:  history.go(-1)">REGRESAR</a>
      </button>
    </div>
    
    <h1>Archivos pendientes</h1>
<div class="content">
    <?php
      if ($dir = opendir("upload")) {
        while($archivo = readdir($dir)){
          if ($archivo != "." && $archivo != "..") {
            echo $archivo  ?>
              <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
                  <button name="opendoc" type="submit">open</button> <?php ; ?>
              </form>
            
            <?php
              if (isset($_GET['opendoc'])) {
                ?>
                  <a ><?php echo $archivo?></a>

                <?php
                // header("Content-type: application/pdf");
                // header("Content-Disposition: inline; filename=documento.pdf");
                readfile("upload/".$archivo);
              }
            ?>
              
            <?php
          }
          
        }
      }
    ?>
 </div>
</body>
</html>