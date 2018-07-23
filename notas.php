<?php
/*HEAD DE LA PAGINA*/
	include("head.php");
  include("config.php");  

 ?>

<!-- AQUI EMPIEZA EL CUERPO DE LA PÁGINA -->

<body>
<?php
/*ENCABEZADO DE LA PÁGINA*/
	include("header.php");
/*PESTAÑA SERVICIOS DEL LADO DERECHO DE LA PÁGINA*/
	include("services.php");
 ?>


 <main class="detalle">
<div class="breadcrumb-class">
    Está en:&nbsp;<a href=<?php echo $cdiac;?> target="_self" title="Inicio">Inicio</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="#" target="_self" title="La Universidad">DE INTERÉS </a>&nbsp;&nbsp;/&nbsp;&nbsp;<b>Notas</b>
</div>

<div class="container">
<h2 class="text-left">Notas</h2>
</br></br></br>
<div class="panel-group" id="accordion">
<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><h3 class="text-left">Notas año 2018</h3></a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse ">
        <div class="panel-body">
          <h1><a href="http://agenciadenoticias.unal.edu.co/detalle/article/biga-calculadora-de-emisiones-de-la-vegetacion.html" target="_blank">BIGA, “calculadora” de emisiones de la vegetación</a></h1><br>
          <h5><p>01 de junio de 2018 — Agencia de Noticias UN-</p></h5>
          <h4><p>Aunque existen herramientas similares, la creada por ingenieras de la Universidad Nacional de Colombia (U.N.) Sede Manizales tiene en cuenta la topografía del terreno colombiano, lo que la convierte en una aliada ideal para estudiar la calidad del aire de las ciudades del país.</p></h4><br>

          <h1><a href="http://agenciadenoticias.unal.edu.co/detalle/article/acciones-colectivas-mejorarian-calidad-del-aire-en-manizales.html" target="_blank">Acciones colectivas mejorarían calidad del aire en Manizales</a></h1><br>
          <h5><p>30 de abril de 2018 — Agencia de Noticias UN-</p></h5>
          <h4><p>La autoridad ambiental no es la única encargada de disminuir los niveles de contaminación; esta tarea debe ser interinstitucional e incluso de la comunidad, con acciones sencillas, como por ejemplo abordar el bus en los paraderos.</p></h4><br>
        
          <h1><a href="http://agenciadenoticias.unal.edu.co/detalle/article/contaminacion-del-aire-a-prueba-en-dia-sin-carro-en-manizales.html" target="_blank">Contaminación del aire a prueba en día sin carro en Manizales</a></h1><br>
          <h5><p>17 de abril de 2018 — Agencia de Noticias UN-</p></h5>
          <h4><p>La Red de Calidad del Aire, que opera la Universidad Nacional de Colombia (U.N.) Sede Manizales, realiza mediciones de contaminantes atmosféricos para determinar el impacto real del “Día sin carro y sin moto”, que en esta ciudad se instauró el 19 de abril de cada año (decreto 0155 de 2018, Alcaldía de Manizales).</p></h4><br>

          <h1><a href="http://agenciadenoticias.unal.edu.co/detalle/article/la-un-lidera-ensenanza-de-monitoreo-ambiental.html" target="_blank" target="_blank">La U.N. lidera enseñanza de monitoreo ambiental</a></h1><br>
          <h5><p>14 de febrero de 2018 — Agencia de Noticias UN -</p></h5>
          <h4><p>Autoridades de Caldas y comunidad en general reciben capacitación sobre el Sistema Integrado de Monitoreo Ambiental (Simac) que lidera la Universidad Nacional de Colombia (U.N.) Sede Manizales.</p></h4><br>

        </div>
      </div>
    </div>
    <div class="panel-group" id="accordion">
<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><h3 class="text-left">Notas año 2017</h3></a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse ">
        <div class="panel-body">

              <h1><a href="http://agenciadenoticias.unal.edu.co/detalle/article/plataforma-almacena-datos-de-monitoreo-ambiental-en-caldas.html">Plataforma almacena datos de monitoreo ambiental en Caldas</a></h1><br>
              <h5><p>13 de octubre de 2017</p></h5>
              <h4><p>En la página <a href="cdiac.manizales.unal.edu.co" target="_blank">cdiac.manizales.unal.edu.co</a> se podrán consultar los datos de las redes tanto meteorológicas e hidrometeorológicas de Caldas como las de aguas subterráneas de Manizales y de calidad del aire de esta ciudad.</p></h4><br>

                <h1><a href="http://agenciadenoticias.unal.edu.co/detalle/article/optimizan-acceso-a-bodega-de-datos-del-clima-en-caldas.html" target="_blank">Optimizan acceso a bodega de datos del clima en Caldas</a></h1><br>
                <h5><p>10 de octubre de 2017 -Agencia de Noticias UN-</p></h5>
                <h4><p>A través de ella se podrán consultar los datos de las redes meteorológicas e hidrometeorológicas de Caldas, las de aguas subterráneas de Manizales y la red de calidad del aire de esta ciudad. Estos servirán para analizar la evolución de las variaciones climáticas, además de mitigar y gestionar el riesgo de desastres naturales.</p></h4><br>

                <h1><a href="http://agenciadenoticias.unal.edu.co/detalle/article/ciberbodega-del-clima-ayudara-a-prevenir-desastres-en-caldas.html" taget="_blank">Ciberbodega del clima ayudará a prevenir desastres en Caldas</a></h1><br>
                <h5><p>23 de marzo de 2017 — Agencia de Noticias UN-</p></h5>
                <h4><p>En esta plataforma se alojan más de 25 millones de datos recolectados por las redes de estaciones meteorológicas, hidrometeorológicas y de calidad del aire, con el fin de prevenir desastres naturales y generar alertas tempranas.</p></h4><br>
  

                <h1><a href="http://untelevision.unal.edu.co/detalle/cat/a-un-click/article/calidad-del-aire-4.html" target="_blank">Calidad del aire</a></h1><br>
                <h5><p>20 de octubre de 2017 – A un click -</p></h5>
                <h4><p>La UN Sede Manizales cuenta con el Sistema de Vigilancia de Calidad del Aire (SVCA) que está compuesto por 6 estaciones que miden la calidad del aire. Con la información obtenida se pueden tomar medidas para mitigar los efectos de la contaminación atmosférica y evitar que siga aumentando. Todos los datos obtenidos sirven de insumo para las investigaciones que se adelantan en la Sede.</p></h4><br>
    

        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><h3 class="text-left">Notas año 2015</h3></a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse ">
        <div class="panel-body">
            <h1><a href="http://agenciadenoticias.unal.edu.co/detalle/article/la-un-construye-linea-base-ambiental-de-caldas.html" target="_blank">La U.N. construye Línea Base Ambiental de Caldas</a></h1><br>
            <h5><p>12 de marzo de 2015 — Agencia de Noticias UN-</p></h5>
            <h4><p>Se trata de un esquema de almacenamiento de datos muy robusto, con el que será posible mejorar la información y la gestión ambiental en el departamento.</p></h4><br> 
       

        </div>
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
