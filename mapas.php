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

<div>
 <main class="detalle back-white">
<div class="breadcrumb-class">
    Está en:&nbsp;<a href=<?php echo $cdiac;?> target="_self" title="Inicio">Inicio</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="#" target="_self" title="La Universidad">Datos </a>&nbsp;&nbsp;/&nbsp;&nbsp;<b>Mapas de redes de monitoreo</b>
</div><br><br>
     <div class="corpoenlaces" >
         <a href=<?php echo $corpocaldas; ?> target="_blank"><img src="imagenes/Corpologo.png" width="200"></a>
     </div>
     <br>


<div class="titulo"><h1>Mapas</h1></div><br><br>

    <div class="accordion-container">

        <a href="#" class="accordion-titulo">Red de Calidad del Aire de Caldas<span class="toggle-icon"></span></a>
        <div class="accordion-content">
            <img src="imagenes/Reddecalidaddelaire.jpg" width="600">
        </div>

    </div>
    <div class="accordion-container">

        <a href="#" class="accordion-titulo">Red de Estaciones de Monitoreo Comunitarias del Departamento de Caldas<span class="toggle-icon"></span></a>
        <div class="accordion-content">
            <img src="imagenes/ReddeMonitoreoComunitaria.jpg" width="600">
        </div>

    </div>
    <div class="accordion-container">

        <a href="#" class="accordion-titulo">Red de Estaciones de monitoreo Hidroclimatológicas<span class="toggle-icon"></span></a>
        <div class="accordion-content">
            <img src="imagenes/RedesdeestacionesdemonitoreoHM.jpg" width="600">
        </div>

    </div>
    <div class="accordion-container">

        <a href="#" class="accordion-titulo">Ubicación de Caldas<span class="toggle-icon"></span></a>
        <div class="accordion-content">
            <img src="imagenes/UbicaciondeCaldas.jpg" width="600">
        </div>

    </div>




</main>

</div>
<?php
/*PIE DE PÁGINA*/
	include("footer.php")
 ?>
<script src="js/unal.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function(){
        $(".accordion-titulo").click(function(e){

            e.preventDefault();

            var contenido=$(this).next(".accordion-content");

            if(contenido.css("display")=="none"){ //open
                contenido.slideDown(250);
                $(this).addClass("open");
            }
            else{ //close
                contenido.slideUp(250);
                $(this).removeClass("open");
            }

        });
    });
</script>
</body>
</html>
