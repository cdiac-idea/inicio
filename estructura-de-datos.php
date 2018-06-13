<?php
/*HEAD DE LA PAGINA*/
	include("head.php")
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
    Está en:&nbsp;<a href="http://idea.manizales.unal.edu.co" target="_self" title="Inicio">Inicio</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="http://localhost/gtanuevo/hidraulica" target="_self" title="La Universidad">Datos </a>&nbsp;&nbsp;/&nbsp;&nbsp;<b>Estructura de Datos</b>
</div><br><br><br><br><br><br><br><br><br>
<div class="corpoest">
  <a href="http://www.corpocaldas.gov.co"><img src="imagenes/corpocaldas.png" width="250"></a>
</div>
<div class="estructura">

    <span class="titulo"><strong>ESTRUCTURA DE DATOS</strong></span><br><br>

    <h3><p class="align-justify"> Actualmente se tiene un histórico de datos meteorológicos e hidrometeorológicos provenientes de estaciones ubicadas en todo el departamento de Caldas, estas estaciones, según su tipo, miden y entregan información de las siguientes variables: <br><br> * Precipitación. <br> * Temperatura del aire. <br> * Humedad relativa. <br> * Velocidad del viento. <br> * Dirección del viento. <br> * Presión barométrica. <br> * Radiación solar. <br> * Evapotranspiración. <br> * Nivel. <br> * Caudal. <br><br> Manizales cuenta con una Red de Monitoreo de Calidad del Aire; actualmente se está trabajando en el procesamiento, almacenamiento y análisis de los datos de las siguientes variables: <br><br> * Material Particulado menor a 10 micras. <br> * Material Particulado menor a 2,5 micras. <br> * Monóxido de carbono. <br> * Dióxido de azufre. <br></p> * Ozono </h3>
<p> <br> </p></div>

</main>

</div>
<?php
/*PIE DE PÁGINA*/
	include("footer.php")
 ?>
<script src="js/unal.js" type="text/javascript"></script>
</body>
</html>
