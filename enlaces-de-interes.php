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
    Está en:&nbsp;<a href="http://idea.manizales.unal.edu.co" target="_self" title="Inicio">Inicio</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="http://localhost/gtanuevo/hidraulica" target="_self" title="La Universidad">DE INTERÉS </a>&nbsp;&nbsp;/&nbsp;&nbsp;<b>Enlaces de Interés</b>
</div>
<div class="text" style="float:right;
margin-right: 200px;
margin-top: 40px;  
    width: 700px;">

<span style="font-size:17.0pt;line-height:107%; color:#990000;mso-fareast-language:ES-CO"><strong>ENLACES DE INTERES</strong></span><br><br>
<h4><a href="http://idea.manizales.unal.edu.co/index.php/estado-tiempo-manizales" target="blank">Análisis del estado del tiempo en Manizales y Caldas</a></h4><br>
<h4 class="text-left">Datos meteorológicos e hidrometeorológicos en tiempo real; la información se encuentra sujeta a verificación. </h4>
</div>
<div style="float:right;
margin-right: 10px;
margin-top: -130px;  
    width: 700px;">
<a href=""><img src="imagenes/corpocaldas.png" width="200" style="float:right;"></a>
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
