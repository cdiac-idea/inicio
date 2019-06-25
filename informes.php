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


	<main class="detalle">
		<div class="breadcrumb-class">
			Está en:&nbsp;<a href=<?php echo $cdiac;?> target="_self" title="Inicio">Inicio</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="#" target="_self" title="La Universidad">DE INTERÉS</a>&nbsp;&nbsp;/&nbsp;&nbsp;<b>Informes</b>
		</div>
		<div id="corpopubli">
			<a href=<?php echo $corpocaldas; ?> target="_blank"><img src="imagenes/corpocaldas.png" width="250"></a>
		</div>
		<div id="publicaciones"><br><br>
			<strong><h3> INFORMES </h3></strong>
			<h4>---------------------------------------------------------------------------------------------</h4><br>
			<h4><a href="http://cdiac.manizales.unal.edu.co/inicio/informes/INFORME_GENERAL_UMBRALES.pdf" title="Opens external link in new window" target="_blank" class="external-link-new-window">INFORME DE AVANCE: UMBRALES PRELIMINARES PARA LA ACTIVACIÓN DEL SAT PARA LAS CUENCAS QUEBRADA EL GUAMO, OLIVARES Y MANIZALES</a></h4><br>
		</div>
	</main>

	<?php
	/*PIE DE PÁGINA*/
	include("footer.php")
	?>
	<script src="js/unal.js" type="text/javascript"></script>
</body>
</html>
