<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/perfil.css">
<script src="./js/perfil.js" ></script>
</head>
<body class="w3-theme-l5">
<?php
include "./componentes/barraNavegacion.php";
?>
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
    <div class="w3-row">
        <div class="w3-col m3">
            <?php
            include "./componentes/miPerfil.php";
            ?>
            <br>
            <?php
            include "./componentes/menu.php";
            ?>
            <br>
            <?php
            include "./componentes/intereses.php";
            ?>
            <br>
            <?php
            include "./componentes/alertas.php";
            ?>
        </div>
        <div class="w3-col m7">
            <?php
            include "./componentes/estados.php";
            ?>
        </div>
        <div class="w3-col m2">
            <?php
            include "./componentes/eventos.php";
            ?>
            <br>
            <?php
            include "./componentes/noticias.php";
            ?>
        </div>
    </div>
</div>
<br>
<?php
include "./componentes/footer.php";
?>
</body>
</html>
