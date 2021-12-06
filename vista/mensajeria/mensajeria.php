<!DOCTYPE html>
<html lang="en">
<head>
<title>mensajeria</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./css/w3.css">
<link rel="stylesheet" type="text/css" href="./css/fontRobotoDraft.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="./css/mensajeria.css">
<script type="text/javascript" src="./js/mensajeria.js"></script>
</head>
<body>
<?php
include "./componentes/barraNavegacion/navegacion.php";
include "./componentes/modales/mensajeNuevo.php"; 
?>
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="Close Sidemenu" id="myOverlay"></div>
<div class="w3-main" style="margin-left:320px;">
	<i class="fa fa-bars w3-button w3-white w3-hide-large w3-xlarge w3-margin-left w3-margin-top" onclick="w3_open()"></i>
	<a href="javascript:void(0)" class="w3-hide-large w3-red w3-button w3-right w3-margin-top w3-margin-right" onclick="document.getElementById('id01').style.display='block'"><i class="fa fa-pencil"></i></a>
	<?php
	include "./componentes/contenido/contenido.php";
	?> 
</div>
</body>
</html>
