<<<<<<< HEAD
    <?php
/*HEAD DE LA PAGINA*/
	include("head.php");
    include("config.php");
 ?>

<!-- AQUI EMPIEZA EL CUERPO DE LA PÁGINA -->

<body id="bodyhistoria">
<?php
/*ENCABEZADO DE LA PÁGINA*/
	include("header.php");
/*PESTAÑA SERVICIOS DEL LADO DERECHO DE LA PÁGINA*/
	include("services.php");
 ?>
 <main class="detalle">
<!-- BREADCRUMS (EN QUE SECCIÓN DE LA PÁGINA SE ENCUENTRA) -->
<div class="breadcrumb-class">
    Está en:&nbsp;<a href=<?php echo $cdiac; ?> target="_self" title="Inicio">Inicio</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="#" target="_self" title="La Universidad">SOBRE CDIAC </a>&nbsp;&nbsp;/&nbsp;&nbsp;<b>Historia</b>
</div>

<div id="historia"> 
   
    <div id="fotohistoria">
    <img src="imagenes/historia.png" width="250">
</div>
    <span class="titulo"><strong>UN POCO DE HISTORIA</strong></span><br>
<h4><p class="align-justify"><span">El Grupo de Trabajo Académico en Ingeniería Hidráulica y Ambiental (GTA IHA) vinculado al Instituto de Estudios Ambientales (IDEA) de la Universidad Nacional de Colombia (UN) sede Manizales inició labores de monitoreo del clima hace más de 20 años y del aire aproximadamente hace 6 años, con el objetivo de apoyar la misión de la Universidad comprometida en “estudiar y enriquecer el patrimonio cultural, natural y ambiental de la nación y contribuir a su conservación”.</span></p><h4><br>
<h4><p class="align-justify"><span>Conscientes de la magnitud numérica de datos que se generan desde las estaciones de monitoreo, la necesidad de tener actualizada la información y de la experiencia con la que cuenta el IDEA en la gestión de los datos de estaciones de monitoreo de diferentes entidades, principalmente CORPOCALDAS. Se realizó un convenio interadministrativo para unir fuerzas estratégicamente creando el proyecto “Linea Base Ambiental De Caldas” y así obteniendo productos de beneficio para ambas entidades. Gracias a esto, en la tercera fase del proyecto*, se creó una bodega de datos que permitió centralizar toda la información ambiental y además procesarla. Esto se hizo con la ayuda de dos grupos de trabajo pertenecientes a la UN que son el Grupo de Ambientes Inteligentes Adaptativos (GAIA) y el GTA IHA.</span></p></h4><br>
<h4><p class="align-justify"><span>GAIA con su experiencia en sistemas se ha encargado de la planeación, diseño, estructuración e implementación de la bodega de datos y de la página web CDIAC. Mantiene actualizada la información y vela por el correcto funcionamiento de la bodega a nivel software.</span></p></h4><br>
<h4><p class="align-justify"><span>El GTA IHA con su experiencia en información ambiental ha asegurado la validez de los datos, ha desarrollado los indicadores y asesorado al grupo GAIA en su implementación desde la bodega de datos. También es quien se encarga de la parte investigativa analizando la información y creando boletines y reportes ambientales que son publicados en la página CDIAC y entregados a CORPOCALDAS.</span></p></h4><br>
<h4><p class="align-justify"><span>El proyecto está actualmente en su cuarta fase y ha tenido grandes avances, se sigue trabajando en el crecimiento de la bodega, de los indicadores y así mismo de la página para que sigan contribuyendo en la toma de decisiones y apoyando estudios futuros.</span></p></h4><br>
<h4><p class="align-justify"><span>Un propósito del proyecto es lograr unir todas las entidades con información ambiental de Caldas para que se animen a compartir su información con la ciudadanía sin ánimo de lucro..</span></p></h4>
</div>
<div id="corpohistoria"> 
    <a href=<?php echo $corpocaldas;?> target="_blank"><img src="imagenes/corpocaldas.png" width="250"></a>
</div>

</main>
<?php
/*PIE DE PÁGINA*/
	include("footer.php")
 ?>
<script src="js/unal.js" type="text/javascript"></script>
</body>
=======
    <?php
/*HEAD DE LA PAGINA*/
	include("head.php")
 ?>

<!-- AQUI EMPIEZA EL CUERPO DE LA PÁGINA -->

<body id="bodyhistoria">
<?php
/*ENCABEZADO DE LA PÁGINA*/
	include("header.php");
/*PESTAÑA SERVICIOS DEL LADO DERECHO DE LA PÁGINA*/
	include("services.php");
 ?>
 <main class="detalle">
<!-- BREADCRUMS (EN QUE SECCIÓN DE LA PÁGINA SE ENCUENTRA) -->
<div class="breadcrumb-class">
    Está en:&nbsp;<a href="http://idea.manizales.unal.edu.co" target="_self" title="Inicio">Inicio</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="http://localhost/gtanuevo/hidraulica" target="_self" title="La Universidad">SOBRE CDIAC </a>&nbsp;&nbsp;/&nbsp;&nbsp;<b>Historia</b>
</div>

<div id="historia"> 
   
    <div id="fotohistoria">
    <img src="imagenes/historia.png" width="250">
</div>
    <span class="titulo"><strong>UN POCO DE HISTORIA</strong></span><br>
<h4><p class="align-justify"><span">El Grupo de Trabajo Académico en Ingeniería Hidráulica y Ambiental (GTA IHA) vinculado al Instituto de Estudios Ambientales (IDEA) de la Universidad Nacional de Colombia (UN) sede Manizales inició labores de monitoreo del clima hace más de 20 años y del aire aproximadamente hace 6 años, con el objetivo de apoyar la misión de la Universidad comprometida en “estudiar y enriquecer el patrimonio cultural, natural y ambiental de la nación y contribuir a su conservación”.</span></p><h4><br>
<h4><p class="align-justify"><span>Conscientes de la magnitud numérica de datos que se generan desde las estaciones de monitoreo, la necesidad de tener actualizada la información y de la experiencia con la que cuenta el IDEA en la gestión de los datos de estaciones de monitoreo de diferentes entidades, principalmente CORPOCALDAS. Se realizó un convenio interadministrativo para unir fuerzas estratégicamente creando el proyecto “Linea Base Ambiental De Caldas” y así obteniendo productos de beneficio para ambas entidades. Gracias a esto, en la tercera fase del proyecto*, se creó una bodega de datos que permitió centralizar toda la información ambiental y además procesarla. Esto se hizo con la ayuda de dos grupos de trabajo pertenecientes a la UN que son el Grupo de Ambientes Inteligentes Adaptativos (GAIA) y el GTA IHA.</span></p></h4><br>
<h4><p class="align-justify"><span>GAIA con su experiencia en sistemas se ha encargado de la planeación, diseño, estructuración e implementación de la bodega de datos y de la página web CDIAC. Mantiene actualizada la información y vela por el correcto funcionamiento de la bodega a nivel software.</span></p></h4><br>
<h4><p class="align-justify"><span>El GTA IHA con su experiencia en información ambiental ha asegurado la validez de los datos, ha desarrollado los indicadores y asesorado al grupo GAIA en su implementación desde la bodega de datos. También es quien se encarga de la parte investigativa analizando la información y creando boletines y reportes ambientales que son publicados en la página CDIAC y entregados a CORPOCALDAS.</span></p></h4><br>
<h4><p class="align-justify"><span>El proyecto está actualmente en su cuarta fase y ha tenido grandes avances, se sigue trabajando en el crecimiento de la bodega, de los indicadores y así mismo de la página para que sigan contribuyendo en la toma de decisiones y apoyando estudios futuros.</span></p></h4><br>
<h4><p class="align-justify"><span>Un propósito del proyecto es lograr unir todas las entidades con información ambiental de Caldas para que se animen a compartir su información con la ciudadanía sin ánimo de lucro..</span></p></h4>
</div>
<div id="corpohistoria"> 
    <a href="http://www.corpocaldas.gov.co" target="_blank"><img src="imagenes/corpocaldas.png" width="250"></a>
</div>

</main>
<?php
/*PIE DE PÁGINA*/
	include("footer.php")
 ?>
<script src="js/unal.js" type="text/javascript"></script>
</body>
>>>>>>> 70f96a87b77b16ab98948d5c36aa2398aaed7b24
</html>