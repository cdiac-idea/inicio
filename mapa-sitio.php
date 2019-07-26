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
            Está en:&nbsp;<b>Mapa del sitio</b>
        </div><br><br>

        <div class="row lista"><br>
            <div class="col-xs-12 col-sm-12 col-md-12"></div>
            <div class="col-xs-12 col-sm-8 col-md-8">
                <div id="c104" class="csc-default">
                    <div class="csc-header csc-header-n1">
                        <h2 class="csc-firstHeader">
                            <a href="http://cdiac.manizales.unal.edu.co/inicio/" target="_blank">SOBRE CDIAC</a>
                        </h2>
                    </div>
                    <ul>
                        <p class="bodytext"></p>
                        <br>
                        <li><a href="http://cdiac.manizales.unal.edu.co/inicio/cdiac.php">CDIAC</a></li>
                        <li><a href="http://cdiac.manizales.unal.edu.co/inicio/historia.php">Historia</a></li>
                        <li><a href="http://cdiac.manizales.unal.edu.co/inicio/convenio.php">Convenio</a></li>
                        <br>
                        <p></p>
                    </ul><p class="bodytext"></p>
                </div>
                <div  class="csc-default">
                    <div class="csc-header csc-header-n2">
                        <h2  class="csc-firstHeader">
                            <a href="http://cdiac.manizales.unal.edu.co/inicio/" target="_blank">DATOS</a>
                        </h2>
                    </div>
                    <ul>
                        <p class="bodytext"></p>
                        <br>
                        <li><a href="http://cdiac.manizales.unal.edu.co/inicio/fuentes-de-datos.php">Fuentes de datos</a></li>
                        <li><a href="http://cdiac.manizales.unal.edu.co/inicio/estructura-de-datos.php">Estructuras de datos</a></li>
                        <li><a href="http://cdiac.manizales.unal.edu.co/inicio/mapas.php">Mapas de redes de monitoreo</a></li>
                        <br>
                        <p></p>
                    </ul>
                    <ul>
                        <p class="bodytext"></p>
                    </ul>
                </div>
                <div  class="csc-default">
                    <div class="csc-header csc-header-n3">
                        <h2  class="csc-firstHeader">
                            <a href="http://cdiac.manizales.unal.edu.co/inicio/" target="_blank">SISTEMA DE INDICADORES Y CONSULTAS</a>
                        </h2>
                    </div>
                    <ul>
                        <p class="bodytext"></p>
                        <br>
                        <li><a href="http://cdiac.manizales.unal.edu.co/sistema_consulta/public/validate">Sistema de Consultas</a></li>
                        <li><a href="http://cdiac.manizales.unal.edu.co/indicadores/public/index">Sistema Generador de Indicadores</a></li>
                        <br>
                        <p></p>
                    </ul>
                    <ul>
                        <p class="bodytext"></p>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 rightside">
                <div id="c662" class="csc-default">
                    <div class="csc-sitemap">
                        <h2 class="csc-firstHeader">
                            <a href="http://cdiac.manizales.unal.edu.co/inicio/" target="_blank">DE INTERÉS</a>
                        </h2>
                        <ul>
                            <br>
                            <li><a href="http://cdiac.manizales.unal.edu.co/inicio/enlaces-de-interes.php">Enlaces de interés</a></li>
                            <li><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones.php">Publicaciones</a></li>
                            <li><a href="http://cdiac.manizales.unal.edu.co/inicio/informes.php">Informes</a></li>
                            <li><a href="http://cdiac.manizales.unal.edu.co/inicio/notas.php">Notas</a></li>
                            <br>
                        </ul>
                        <h2 class="csc-firstHeader">
                            <a href="http://cdiac.manizales.unal.edu.co/inicio/" target="_blank">Personas</a>
                        </h2>
                        <ul>
                            <br>
                            <li><a href="http://cdiac.manizales.unal.edu.co/inicio/personas.php">Personas</a></li>
                            <li><a href="http://cdiac.manizales.unal.edu.co/inicio/contacto.php">Contacto</a></li>
                            <br>
                        </ul>
                        <h2 class="csc-firstHeader">
                            <a href="http://cdiac.manizales.unal.edu.co/inicio/" target="_blank">TUTORIALES</a>
                        </h2>
                        <ul>
                            <br>
                            <li><a href="http://cdiac.manizales.unal.edu.co/inicio/generar-indicadores-aire.php">Generar Indicadores de Calidad del Aire</a></li>
                            <li><a href="http://cdiac.manizales.unal.edu.co/inicio/generar-indicadores-clima.php">Generar Indicadores de Clima</a></li>
                            <br>
                        </ul>
                    </div>
                </div>
            </div>
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
