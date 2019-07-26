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
        Está en:&nbsp;<a href=<?php echo $cdiac;?> target="_self" title="Inicio">Inicio</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="#" target="_self" title="La Universidad">SOBRE CDIAC </a>&nbsp;&nbsp;/&nbsp;&nbsp;<b>CONVENIO</b>
    </div><br>


    <div class="row">

            <b class="titulo">
                CONVENIO<br><br>
            </b>

            <p class="text-left"> La Universidad Nacional de Colombia Sede Manizales por medio del Instituto de Estudios Ambientales IDEA,
                ha desarrollado diferentes proyectos enfocados al estudio de temas relacionados con el componente ambiental para la ciudad
                de Manizales y el departamento de Caldas. En estos proyectos se ha realizado un trabajo conjunto con la Autoridad Ambiental
                y de ellos se han obtenido resultados importantes en el ámbito social, científico y académico, así como insumos de
                importancia para la gestión y regulación ambiental que realiza la Corporación Autónoma Regional de Caldas Corpocaldas.
                Este proyecto ha sido desarrollado por los grupos de investigación: Grupo de Trabajo Académico en Ingeniería Hidráulica
                y Ambiental, y Grupo de Ambientes Inteligentes Adaptativos GAIA.</p>
            <br>

            <p class="text-left"> Las siguientes imágenes direccionan a las páginas oficiales de cada grupo u/o institución aliada.</p>
            <br><br>


        <div class="container">
            <div class="row">
                <div class="col-md-3"><a href=<?php echo $unal; ?> target="_blank"><img src="imagenes/LogosMini/un.png" width="170" height="80" ></a></div>

                <div class="col-md-3"><a href=<?php echo $corpocaldas; ?> target="_blank"><img src="imagenes/LogosMini/locorpocaldas.jpg" width="200" height="110"></a></div>

                <div class="col-md-3"><a href=<?php echo $gaia; ?> target="_blank"><img src="imagenes/LogosMini/logaia.png" width="170" height="100"></a></div>

                <div class="col-md-3"><a href=<?php echo $gtahidraulica;?> target="_blank"><img src="imagenes/LogosMini/logta.png" width="170" height="100px"></a></div>
            </div>
        </div>

        <br>
        <p class="text-left"> Adicional a estas, otras instituciones se han afiliado a esta
            iniciativa proporcionando información climatológica, algunas de ellas son:</p>
        <br>

        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-3"><a href=<?php echo $alcaldia; ?> target="_blank"><img src="imagenes/LogosMini/loalcaldia.png"  width="170" height="100" style="padding: 0" </a></div>
                <div class="col-md-3"><a href=<?php echo $chec; ?> target="_blank"><img src="imagenes/LogosMini/lochec.jpg"  width="170" height="90" ></a></div>
                <div class="col-md-3"><a href=<?php echo $gobernacion; ?> target="_blank"><img src="imagenes/LogosMini/logobernacion.png"  width="170" height="80"><br></a></div>
            </div>
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
