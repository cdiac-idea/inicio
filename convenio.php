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
    Está en:&nbsp;<a href=<?php echo $cdiac; ?> target="_self" title="Inicio">Inicio</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="#" target="_self" title="La Universidad">SOBRE CDIAC </a>&nbsp;&nbsp;/&nbsp;&nbsp;<b>Historia</b>
</div><br>
<div class="divconvenio">
<span class="titulo"><strong>CONVENIO</strong></span><br>
</div>
<br><br>
<div class="divconvenio">

<h3><span><p class="align-justify texto"> La Universidad Nacional de Colombia Sede Manizales por medio del Instituto de Estudios Ambientales IDEA, ha desarrollado diferentes proyectos enfocados al estudio de temas relacionados con el componente ambiental para la ciudad de Manizales y el departamento de Caldas. En estos proyectos se ha realizado un trabajo conjunto con la Autoridad Ambiental y de ellos se han obtenido resultados importantes en el ámbito social, científico y académico, así como insumos de importancia para la gestión y regulación ambiental que realiza la Corporación Autónoma Regional de Caldas Corpocaldas. Este proyecto ha sido desarrollado por los grupos de investigación: Grupo de Trabajo Académico en Ingeniería Hidráulica y Ambiental, y Grupo de Ambientes Inteligentes Adaptativos GAIA.</p></span></h3><br>
<h3><p class="MsoNormal align-justify texto">Las siguientes imágenes direccionan a las páginas oficiales de cada grupo u/o institución aliada.</p><br></h3>

</div>

<div class="fotosconvenio">
	<a href=<?php echo $corpocaldas; ?> target="_blank"><img src="imagenes/corpocaldas.png" width="170"></a>
	<a href=<?php echo $unal; ?> target="_blank"><img src="imagenes/unal.png" width="170"></a>
	<a href=<?php echo $idea; ?> target="_blank"><img src="imagenes/unalmanizales.png" width="170"></a>
	<a href=<?php echo $gtahidraulica;?> target="_blank"><img src="imagenes/gtaih.png" width="170"></a><br><br>
	<a href=<?php echo $gaia; ?> target="_blank"><img src="imagenes/GAIA.png" width="170"></a>
</div>
<div class="divconvenio">
    <br>
<h3><p class="MsoNormal texto">Adicional a estas, otras instituciones se han afiliado a esta iniciativa proporcionando información climatológica, algunas de ellas son:</p></h3>

</div>
<div class="fotosconvenio">
	<a href=<?php echo $alcaldia; ?> target="_blank"><img src="imagenes/alcaldia.png" width="170"></a>
	<a href=<?php echo $chec; ?> target="_blank"><img src="imagenes/chec.png" width="170"></a>
	<a href=<?php echo $gobernacion; ?> target="_blank"><img src="imagenes/gobernacion.png" width="170"><br></a>
</div>
</main>
<?php
/*PIE DE PÁGINA*/
	include("footer.php")
 ?>
<script src="js/unal.js" type="text/javascript"></script>
</body>
</html>
