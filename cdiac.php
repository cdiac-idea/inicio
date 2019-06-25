<?php
/*HEAD DE LA PAGINA*/
include("head.php");
include("config.php");
?>

<!-- AQUI EMPIEZA EL CUERPO DE LA PÁGINA -->

<body id="bodycdiac">
<?php
/*ENCABEZADO DE LA PÁGINA*/
include("header.php");
/*PESTAÑA SERVICIOS DEL LADO DERECHO DE LA PÁGINA*/
include("services.php");
?>
<main class="detalle container-fluid">
    <div class="breadcrumb-class">
        Está en:&nbsp;<a href=<?php echo $cdiac;?> target="_self" title="Inicio">Inicio</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="#" target="_self" title="La Universidad">SOBRE CDIAC </a>&nbsp;&nbsp;/&nbsp;&nbsp;<b>CDIAC</b>
    </div>
    <div>

        <br>

        <div class="row">
            <div class="col-md-7 ">
                <b class="titulo">
                    ¿QUÉ ES CDIAC?<br><br>
                </b>

                <p class="text-left"> El Centro de datos e Indicadores Ambientales de Caldas (CDIAC) es una
                    plataforma online que permite visualizar la información ambiental del
                    departamento de Caldas.</p>
                <br>

                    <p class="text-left"> CDIAC opera gracias al proyecto “Línea Base Ambiental Del Departamento
                    De Caldas” el cual es parte de una alianza estratégica entre la Universidad
                    Nacional de Colombia (UN) sede Manizales y La Corporación Autónoma
                    Regional de Caldas (CORPOCALDAS). Proyecto que aparte de crear la
                    bodega de datos que alimenta a CDIAC, se encarga de generar indicadores
                    ambientales e implementarlos en la plataforma para que estén disponibles a
                    la población.</p>



                <br><br>
                <b class="titulo">Importancia de CDIAC</b>
                <br><br>

                <ul>
                    <li><span>Mejora el acceso a la información</span></li>
                    <li><span>Reduce las diferencias en materia de datos</span></li>
                    <li><span>Permite que la población en general pueda enterarse del estado ambiental de su región</span></li>
                    <li><span>Los indicadores hacen más fácil el entendimiento de las variables ambientales</span></li>
                    <li><span>Facilita y promueve la investigación</span></li>
                    <li><span>Genera insumos para la toma de decisiones del departamento</span></li>
                    <li><span>Centraliza y procesa grandes volúmenes de información</span></li>
                </ul>


            </div>
            <div class="col-md-5 img-fluid imagenCdiac" >
                <img src="imagenes/cdiac.png" width="300" align="center">

            </div>
        </div>
    </div>
    <br>


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
