<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/producto.css">
<script type="text/javascript" src="./js/producto.js"></script>
</head>
<body class="w3-content w3-border-left w3-border-right">
<?php
include "./componentes/navagador.php"; 
include "./componentes/header.php"; 
?>
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<div class="w3-main w3-white" style="margin-left:260px">
	<?php
	include "./componentes/galeria.php";
	?>
  <div class="w3-container">
    <?php
    include "./componentes/espacio.php";
    ?>
    <hr>
    <?php
	include "./componentes/comodidad.php";
	?>
    <hr>
    <?php
	include "./componentes/extraInfo.php";
	?>
    <hr>
    <?php
	include "./componentes/reglas.php";
	?>
  </div>
  <hr>
  <?php
  include "./componentes/contacto.php";
  ?>
  <footer class="w3-container w3-padding-16" style="margin-top:32px">
       Powered by
	   <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">
	       w3.css
	   </a>
  </footer>
</div>
<?php
include "./modales/suscripcion.php";
?>
</body>
</html>
