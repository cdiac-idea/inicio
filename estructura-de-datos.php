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
            Está en:&nbsp;<a href=<?php echo $cdiac;?> target="_self" title="Inicio">Inicio</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="#" target="_self" title="La Universidad">Datos </a>&nbsp;&nbsp;/&nbsp;&nbsp;<b>Estructura de Datos</b>
        </div>
        <div class="corpoenlaces">
            <a href=<?php echo $corpocaldas; ?> target="_blank"><img src="imagenes/Corpologo.png" width="200"></a>
        </div>
        <br><br><br><br><br><br><br><br>
        <div class="container">

            <div class="row">
                <div class="estructura">
                    <span class="titulo"><strong>ESTRUCTURA DE DATOS</strong></span><br><br>
                    <p> Actualmente se tiene un histórico de datos meteorológicos e hidrometeorológicos provenientes de estaciones ubicadas en todo el departamento de Caldas, estas estaciones, según su tipo, miden y entregan información de las siguientes variables:
                        <br>
                        <br>
                    <div class="col-xs-6">
                        <ul class="data-structure">
                            <li><img src="imagenes/precipitacion_ppt.png" width="50" height="50">Precipitación.</li>
                            <br>
                            <li><img src="imagenes/temperatura.png" width="50" height="50">Temperatura del aire.</li>
                            <br>
                            <li><img src="imagenes/humedad_relativa.png" width="50" height="50">Humedad relativa.</li>
                            <br>
                            <li><img src="imagenes/velocidad_viento.png" width="50" height="50">Velocidad del viento.</li>
                            <br>
                            <li><img src="imagenes/direccion_viento.png" width="50" height="50">Dirección del viento.</li>
                        </ul>
                    </div>

                    <div class="col-xs-6">
                        <ul class="data-structure">
                            <li><img src="imagenes/presion_baro.png" width="50" height="50">Presión barométrica.</li>
                            <br>
                            <li><img src="imagenes/radiacion.png" width="50" height="50">Radiación solar.</li>
                            <br>
                            <li><img src="imagenes/evapotranspiracion.png" width="50" height="50">Evapotranspiración.</li>
                            <br>
                            <li><img src="imagenes/nivel.png" width="50" height="50">Nivel.</li>
                            <br>
                            <li><img src="imagenes/caudal.png" width="50" height="50">Caudal.</li>
                        </ul>
                        <br>
                    </div>

                    <p> Manizales cuenta con una Red de Monitoreo de Calidad del Aire; actualmente se está trabajando en el procesamiento, almacenamiento y análisis de los datos de las siguientes variables:</p>
                    <br>
                    <ul>
                        <li><img src="imagenes/mp_10.png" width="50" height="50">Material Particulado menor a 10 micras.</li>
                        <br>
                        <li><img src="imagenes/mp_2_5.png" width="50" height="50">Material Particulado menor a 2,5 micras.</li>
                        <br>
                        <li><img src="imagenes/m_particulado.png" width="50" height="50">Monóxido de carbono.</li>
                        <br>
                        <li><img src="imagenes/d_azufre.png" width="50" height="50">Dióxido de azufre.</li>
                        <br>
                        <li><img src="imagenes/ozono.png" width="50" height="50">Ozono</li>
                    </ul>
                    <p> <br> </p></div>
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
