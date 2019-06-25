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


    <div class="row">
        <div class="col-md-7 ">
            <br><br>
            <b class="titulo">
                UN POCO DE HISTORIA<br><br>
            </b>

            <P class="text-left">El Grupo de Trabajo Académico en Ingeniería Hidráulica y Ambiental (GTA IHA) vinculado al Instituto de Estudios Ambientales (IDEA) de la Universidad Nacional de Colombia (UN) sede Manizales inició labores de monitoreo del clima hace más de 20 años y del aire aproximadamente hace 8 años, con el objetivo de apoyar la misión de la Universidad comprometida en “estudiar y enriquecer el patrimonio cultural, natural y ambiental de la nación y contribuir a su conservación”.</P>
            <br>
            <p class="text-left">Conscientes de la magnitud numérica de datos que se generan desde las estaciones de monitoreo, la necesidad de tener actualizada la información y de la experiencia con la que cuenta el IDEA en la gestión de los datos de estaciones de monitoreo de diferentes entidades, principalmente CORPOCALDAS. Se realizó un convenio interadministrativo para unir fuerzas estratégicamente creando el proyecto “Línea Base Ambiental De Caldas” y así obteniendo productos de beneficio para ambas entidades. Gracias a esto, en la tercera fase del proyecto, se creó una bodega de datos que permitió centralizar toda la información ambiental y además procesarla. Esto se hizo con la ayuda de dos grupos de trabajo pertenecientes a la UN que son el Grupo de Ambientes Inteligentes Adaptativos (GAIA) y el GTA IHA.</p>
            <br>
            <p class="text-left">GAIA con su experiencia en sistemas se ha encargado de la planeación, diseño, estructuración e implementación de la bodega de datos y de la página web CDIAC. Mantiene actualizada la información y vela por el correcto funcionamiento de la bodega a nivel software.</p>
            <br>
            <p class="text-left">El GTA IHA con su experiencia en información ambiental ha asegurado la validez de los datos, ha desarrollado los indicadores y asesorado al grupo GAIA en su implementación desde la bodega de datos. También es quien se encarga de la parte investigativa analizando la información y creando boletines y reportes ambientales que son publicados en la página CDIAC y entregados a CORPOCALDAS.</p>
            <br>
            <p class="text-left">El proyecto está actualmente en su cuarta fase y ha tenido grandes avances, se sigue trabajando en el crecimiento de la bodega, de los indicadores y así mismo de la página para que sigan contribuyendo en la toma de decisiones y apoyando estudios futuros.</p>
            <br>
            <p class="text-left">Un propósito del proyecto es lograr unir todas las entidades con información ambiental de Caldas para que se animen a compartir su información con la ciudadanía sin ánimo de lucro.</p>

        </div>
        <div class="col-md-5 img-fluid imagenCdiac" >
            <img src="imagenes/sobreCDIAC.png" width="300">

        </div>
        <div class ="row  align-items-end justify-content-md-center logosFinal" >
            <div class="col-md-6 col-md-offset-3 mx-auto d-block img-fluid" >

                <img src="imagenes/unal.png" width="100" >
                <img src="imagenes/corpocaldas.png" width="100">
                <img src="imagenes/GAIA.png" width="100">
                <img src="imagenes/gtaih.png" width="100">
            </div>

        </div>

</main>
<?php
/*PIE DE PÁGINA*/
include("footer.php")
?>
<script src="js/unal.js" type="text/javascript"></script>
</body>
</html>