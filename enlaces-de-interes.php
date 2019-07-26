<?php
/*HEAD DE LA PAGINA*/
	include("head.php");
	include("config.php");
 ?>

<!-- AQUI EMPIEZA EL CUERPO DE LA PÁGINA -->

<body id="bodyPages">
<?php
/*ENCABEZADO DE LA PÁGINA*/
	include("header.php");
/*PESTAÑA SERVICIOS DEL LADO DERECHO DE LA PÁGINA*/
	include("services.php");
 ?>


 <main class="detalle">
<div class="breadcrumb-class">
    Está en:&nbsp;<a href=<?php echo $cdiac; ?> target="_self" title="Inicio">Inicio</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="#" target="_self" title="La Universidad">DE INTERÉS </a>&nbsp;&nbsp;/&nbsp;&nbsp;<b>Enlaces de Interés</b>
</div>
     <div class="corpoenlaces" >
         <a href=<?php echo $corpocaldas; ?> target="_blank"><img src="imagenes/Corpologo.png" width="200"></a>
     </div>
     <br>
<div class="pagenlaces">

<h2 class="titulo"><strong>ENLACES DE INTERÉS</strong></h2><br><br>
<h4><a href="http://cdiac.manizales.unal.edu.co/sistema-alerta-temprana/MapaManizales/" target="blank">Análisis del estado del tiempo en Manizales y Caldas</a></h4><br>
<h4 class="text-left">Datos meteorológicos e hidrometeorológicos en tiempo real; la información se encuentra sujeta a verificación. </h4><br>
<h4><a href="http://breathelife2030.org/breathelifecity/caldas-colombia/" target="blank">Caldas Colombia BREATHELIFE CITY</a></h4><br>
<h4><a href="https://join.fz-juelich.de/accounts/login/#" target="blank">Acceso a datos de Ozono troposférico a nivel mundial - proyecto TOAR</a></h4><br>
<h4><a href="http://cdiac.manizales.unal.edu.co/inicio/Instructivos/Instructivo Visualización de Datos TOAR.pdf" title="Opens external link in new window" target="_blank" class="external-link-new-window">Instructivo de Visualización de Datos TOAR</a></h4><br>
</div>

</main>


<?php
/*PIE DE PÁGINA*/
	include("footer.php")
 ?>
<script src="js/unal.js" type="text/javascript"></script>
</body>
</html>
