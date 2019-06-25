  <?php
/*HEAD DE LA PAGINA*/
	include("head.php")
 ?>

<!-- AQUI EMPIEZA EL CUERPO DE LA PÁGINA -->
  <head>
      <meta http-equiv="Expires" content="0">
      <meta http-equiv="Last-Modified" content="0">
      <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
      <meta http-equiv="Pragma" content="no-cache">
  </head>
<body id="principal">
<?php
/*ENCABEZADO DE LA PÁGINA*/
	include("header.php");
/*PESTAÑA SERVICIOS DEL LADO DERECHO DE LA PÁGINA*/
	include("services.php");
 ?>
 <script type="text/javascript" src="js/fondo.js"></script>

<div>
 <main class="detalle">

     <div class="panel-body">

        <a href="http://www.corpocaldas.gov.co/" target="_blank" >

               <img onmouseover="this.src='imagenes/img_banner2.png';" onmouseout="this.src='imagenes/img_banner.png';" src="imagenes/img_banner.png"  alt="Corpocaldas" style=" top:23em;" class="img-rounded"  class="hidden-print"/>

        </a>
        <a href="http://cdiac.manizales.unal.edu.co/indicadores/public/index" target="_blank" >

               <img onmouseover="this.src='imagenes/principio2.png';" onmouseout="this.src='imagenes/principio.png';" src="imagenes/principio.png" alt="Sistema de indicadores ambientales" class="img-rounded" style="top:32em;" class="hidden-print"/>

        </a>

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
