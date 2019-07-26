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


<main class="detalle back-white">
    <div class="breadcrumb-class">
        Está en:&nbsp;<a href=<?php echo $cdiac;?> target="_self" title="Inicio">Inicio</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="#" target="_self" title="La Universidad">DE INTERÉS</a>&nbsp;&nbsp;/&nbsp;&nbsp;<b>Publicaciones</b>
    </div><br><br>
    <div class="corpoenlaces" >
        <a href=<?php echo $corpocaldas; ?> target="_blank"><img src="imagenes/Corpologo.png" width="200"></a>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a data-fancybox data-animation-duration="700" data-src="#ModalLibro" href="javascript:;">
                    <img height="130" width="290" src="imagenes/libros.png" onmouseover="this.src='imagenes/libros_h.png';"
                         onmouseout="this.src='imagenes/libros.png';">
                </a>
            </div>

        </div>
        <div class="row">
            <div class="col-md-8">
                <a data-fancybox data-animation-duration="700" data-src="#Modalinfografias" href="javascript:;" class="bot-modal">
                    <img height="130" width="290" src="imagenes/infografias.png" onmouseover="this.src='imagenes/infografias_h.png';"
                         onmouseout="this.src='imagenes/infografias.png';">
                </a>
            </div>

        </div>
        <div class="row">
            <div class="col-md-3">
                <a data-fancybox data-animation-duration="700" data-src="#ModalClimato" href="javascript:;">
                    <img height="130" width="290" src="imagenes/boletin_clima.png" onmouseover="this.src='imagenes/boletin_clima_h.png';"
                         onmouseout="this.src='imagenes/boletin_clima.png';">
                </a>
            </div>

        </div>
        <div class="row">
            <div class="col-md-8">
                <a data-fancybox data-animation-duration="700" data-src="#ModalAire" href="javascript:;" class="bot-modal">
                    <img height="130" width="290" src="imagenes/boletin_aire.png" onmouseover="this.src='imagenes/boletin_aire_h.png';"
                         onmouseout="this.src='imagenes/boletin_aire.png';">
                </a>
            </div>

        </div>
        <div class="row">
            <div class="col-md-3">
                <a data-fancybox data-animation-duration="700" data-src="#ModalAgro" href="javascript:;">
                    <img height="130" width="290" src="imagenes/boletin_agro.png" onmouseover="this.src='imagenes/boletin_agro_h.png';"
                         onmouseout="this.src='imagenes/boletin_agro.png';">
                </a>
            </div>
        </div>
    </div>




    <div style="display: none;" id="ModalLibro" class="animated-modal div-modal">

        <p class="titulo"><strong>Algunos trabajos realizados en el marco del proyecto</strong></p><br><br>

        <p class="titulo"> LIBROS </p><br><br>
        <strong> DEFNICIÓN DE LOS INDICADORES DE LA LÍNEA BASE AMBIENTAL DE CALDAS </strong>
        <h4 class="text-left"> Germán A. Osorio Zuluaga <br> Néstor Darío Duque Méndez <br> Editores <br> Universidad Nacional de Colombia Sede Manizales - IDEA <br> Corporación Autónoma Regional de Caldas - Corpocaldas <br> <a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/publicacion1.pdf" target="_blank"> Descargar Libro </a> <br> </h4><br><br>

        <strong> ENTENDIMIENTO DE FENÓMENOS AMBIENTALES MEDIANTE ANÁLISIS DE DATOS </strong>
        <h4 class="text-left"> Jorge Julian Vélez Upegui <br> Mauricio Orozco Alzate <br> Néstor Darío Duque Méndez <br> Beatriz Helena Aristizábal Zuluaga <br> <a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/publicacion2.pdf" target="_blank"> Descargar Libro </a> <br> </h4>

        <h4><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/publicacion3.pdf" target="_blank">FOLLETO LINEA AMBIENTAL CALDAS</a></h4>
        <br><br>
    </div>

    <div style="display: none;" id="Modalinfografias" class="animated-modal div-modal">
        <p class="titulo">INFOGRAFÍAS</p><br><br>
        <ul class="hv">
            <li>
                <h3><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/Aire_Manizales_Infografia.pdf" target="_blank" >Infografía de calidad del aire</a></h3>
            </li>
            <li>
                <h3><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/Clima_Manizales_Infografia.pdf" target="_blank" >Infografía de datos hidroclimatológicos</a></h3>
            </li>
        </ul>
    </div>

    <div style="display: none;" id="ModalClimato" class="animated-modal div-modal">
        <strong><p class="titulo"> BOLETINES CLIMATOLÓGICOS</p></strong><br><br>
        <ul class="hv">
            <li><h4><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/BoletínCTAJ2018.pdf" title="Opens external link in new window" target="_blank" class="external-link-new-window">Boletín Climatológico Segundo Trimestre -- Año 2018</a></h4><br></li>
            <li><h4><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/Boletín_climatológico_TRIMESTRAL.pdf" title="Opens external link in new window" target="_blank" class="external-link-new-window">Boletín Climatológico Primer Trimestre -- Año 2018</a></h4><br></li>
            <li><h4><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/publicacion4.pdf" target="_blank" >Boletín Meteorológico -- Enero 2014</a></h4><br></li>
        </ul>

    </div>


    <div style="display: none;" id="ModalAire" class="animated-modal div-modal">
        <p class="titulo"> BOLETINES DE CALIDAD DEL AIRE</p><br><br>
        <ul class="hv">
            <li><h4><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/Boletin Trimestral I Red Aire 2019-final.pdf" title="Opens external link in new window" target="_blank" class="external-link-new-window">Boletín de Calidad del Aire - 1° Trimestre 2019</a></h4><br></li>
            <li><h4><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/Monitoreo de exposición a la contaminación del aire en vías de Manizales -- 2019.pdf" title="Opens external link in new window" target="_blank" class="external-link-new-window">Monitoreo de exposición a la contaminación del aire en vías de Manizales - Agosto 2018</a></h4><br></li>
            <li><h4><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/boletin_rvca_manizales_2018.pdf" title="Opens external link in new window" target="_blank" class="external-link-new-window">Boletín de Calidad del Aire Año 2018</a></h4><br></li>
            <li><h4><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/boletin-abril19.pdf" target="_blank" >Boletín Calidad del Aire -- Abril 19 de 2018 (Día sin carro) </a></h4><br></li>
            <li><h4><a href="http://idea.manizales.unal.edu.co/publicaciones/boletines_ambientales/boletin149.pdf" target="_blank" >Sistema de Vigilancia de Calidad del Aire en Manizales - Septiembre 2018 </a></h4><br></li>
            <li><h4><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/bcam2017.pdf" target="_blank" >Boletín Calidad del Aire -- Año 2017</a></h4><br></li>
            <li><h4><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/bmc2017.pdf" target="_blank" >Boletín Calidad del Aire Municipios -- Año 2017</a></h4><br></li>
            <li><h4><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/boletin1s2017.pdf" target="_blank" >Boletín Calidad del Aire -- 1°Semestre 2017</a></h4><br></li>
            <li><h4><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/boletin-Enero2017.pdf" target="_blank" >Boletín Calidad del Aire -- Enero-Abril 2017</a></h4><br></li>
        </ul>
    </div>

    <div style="display: none;" id="ModalAgro" class="animated-modal div-modal">
       <p class="titulo">BOLETINES AGROCLIMÁTICOS</p><br><br>
        <ul class="hv">
            <li><h4><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/boletin_agroclimatico_julio_2019.pdf" target="_blank" >Boletín Agroclimático Julio 2019</a></h4><br></li>
            <li><h4><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/BOLETIN AGROCLIMATICO JUNIO DE 2019.pdf" target="_blank" >Boletín Agroclimático Junio 2019</a></h4><br></li>
            <li><h4><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/Boletin_agroclimatologico_mayo_2019.pdf" target="_blank" >Boletín Agroclimático Mayo 2019</a></h4><br></li>
            <li><h4><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/boletin_agroclimatologico_abril_2019.pdf" target="_blank" >Boletín Agroclimático Abril 2019</a></h4><br></li>
            <li><h4><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/boletin_agroclimatico_marzo_2019.pdf" target="_blank" >Boletín Agroclimático Marzo 2019</a></h4><br></li>
            <li><h4><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/boletin_agroclimatico_febrero_2019.pdf" target="_blank" >Boletín Agroclimático Febrero 2019</a></h4><br>
            <li><h4><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/boletin_agroclimatologico_diciembre_2018_enero_2019.pdf" target="_blank" >Boletín Agroclimático Diciembre 2018 - Enero 2019</a></h4><br></li>
            <li><h4><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/boletin_agroclimatico_noviembre_2018.pdf" target="_blank" >Boletín Agroclimático Noviembre 2018</a></h4><br></li>
            <li><h4><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/boletin_agroclimatologico_octubre.pdf" target="_blank" >Boletín Agroclimático Octubre 2018</a></h4><br></li>
            <li><h4><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/boletin_agroclimatico_septiembre_2018.pdf" target="_blank" >Boletín Agroclimático Septiembre 2018</a></h4><br></li>
            <li><h4><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/Boletín_agroclimático_Agosto.pdf" target="_blank" >Boletín Agroclimático Agosto 2018</a></h4><br></li>
            <li><h4><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/Boletín_agroclimático_Julio_2018.pdf" target="_blank" >Boletín Agroclimático Julio 2018</a></h4><br></li>
            <li><h4><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/Boletín_agroclimático_Junio.pdf" target="_blank" >Boletín Agroclimático Junio 2018</a></h4><br></li>
            <li><h4><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/Boletín_agroclimático_Mayo.pdf" target="_blank" >Boletín Agroclimático Mayo 2018</a></h4><br></li>
            <li><h4><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/boletin_agroclimatologico_abril_2018.pdf" target="_blank" >Boletín Agroclimático Abril 2018</a></h4><br></li>
            <li><h4><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/boletin_agroclimatico_marzo_2018.pdf" target="_blank" >Boletín Agroclimático Marzo 2018</a></h4><br></li>
            <li><h4><a href="http://cdiac.manizales.unal.edu.co/inicio/publicaciones/boletin_agroclimatico_febrero_2018.pdf" target="_blank" >Boletín Agroclimático Febrero 2018</a></h4><br></li>
        </ul>

    </div>




</main>

<?php
/*PIE DE PÁGINA*/
	include("footer.php")
 ?>
<script src="js/unal.js" type="text/javascript"></script>
</body>
</html>
