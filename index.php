  <?php
/*HEAD DE LA PAGINA*/
	include("head.php")
 ?>

<!-- AQUI EMPIEZA EL CUERPO DE LA PÁGINA -->

<body id="principal">
<?php
/*ENCABEZADO DE LA PÁGINA*/
	include("header.php");
/*PESTAÑA SERVICIOS DEL LADO DERECHO DE LA PÁGINA*/
	include("services.php");
 ?>

<div>
 <main class="detalle">
<div  id="imagen1">
        <a href="http://www.corpocaldas.gov.co/" target="_blank" >
          <svg width="93%" height="93%">
               <image href="imagenes/principio.png" width="250" height="100%" class="hidden-print"/>
             

          </svg>    
        </a>

</div>
<div id="imagen2">
        <a href="http://cdiac.manizales.unal.edu.co/indicadores/public/index" target="_blank" >
          <svg width="93%" height="93%">
               <image href="imagenes/img_banner.png" width="250" height="100%" class="hidden-print"/>
             

          </svg>    
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
