<?php
/*HEAD DE LA PAGINA*/
	include("head.php")
 ?>

<!-- AQUI EMPIEZA EL CUERPO DE LA PÁGINA -->

<body id="bodyPages">
<?php
/*ENCABEZADO DE LA PÁGINA*/
	include("header.php");
/*PESTAÑA SERVICIOS DEL LADO DERECHO DE LA PÁGINA*/
	include("services.php");
 ?>

<div>
 <main class="detalle back-white">
<div class="breadcrumb-class">
    Está en:&nbsp;<a href="http://idea.manizales.unal.edu.co" target="_self" title="Inicio">Inicio</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="http://localhost/gtanuevo/hidraulica" target="_self" title="La Universidad">Tutoriales </a>&nbsp;&nbsp;/&nbsp;&nbsp;<b>Generar Indicadores de Clima</b>
</div>
<br>
     <div class="corpoenlaces" >
         <a href=<?php echo $corpocaldas; ?> target="_blank"><img src="imagenes/Corpologo.png" width="200"></a>
     </div>
     <br>
<video src="Videos/clima.mp4" width = "80%" heigth = "100%"controls>
</video>
</main>

</div>
<?php
/*PIE DE PÁGINA*/
	include("footer.php")
 ?>
<script src="js/unal.js" type="text/javascript"></script>
</body>
</html>
