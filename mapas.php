<?php
/*HEAD DE LA PAGINA*/
	include("head.php");
	include("config.php");
 ?>

<!-- AQUI EMPIEZA EL CUERPO DE LA PÁGINA -->

<body>
<?php
/*ENCABEZADO DE LA PÁGINA*/
	include("header.php");
/*PESTAÑA SERVICIOS DEL LADO DERECHO DE LA PÁGINA*/
	include("services.php");
 ?>

<div>
 <main class="detalle">
<div class="breadcrumb-class">
    Está en:&nbsp;<a href=<?php echo $cdiac;?> target="_self" title="Inicio">Inicio</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="#" target="_self" title="La Universidad">Datos </a>&nbsp;&nbsp;/&nbsp;&nbsp;<b>Mapas de redes de monitoreo</b>
</div><br><br>

<div class="align-center">
<h1>Mapas</h1><br><br>

<h2>Red de Calidad del Aire de Caldas</h2><br>
<img src="imagenes/Reddecalidaddelaire.jpg" width="600"><br><br><br>
<h2>Red de Estaciones de Monitoreo Comunitarias del Departamento de Caldas</h2><br>
<img src="imagenes/ReddeMonitoreoComunitaria.jpg" width="600"><br><br><br>
<h2>Red de Estaciones de monitoreo Hidroclimatológicas</h2><br>
<img src="imagenes/RedesdeestacionesdemonitoreoHM.jpg" width="600"><br><br><br>
<h2>Ubicación de Caldas</h2><br>
<img src="imagenes/UbicaciondeCaldas.jpg" width="600">
</div>
</main>

</div>
<?php
/*PIE DE PÁGINA*/
	include("footer.php")
 ?>
<script src="js/unal.js" type="text/javascript"></script>
</body>
</html>
