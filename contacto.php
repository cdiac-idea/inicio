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
    Está en:&nbsp;<a href=<?php echo $cdiac; ?> target="_self" title="Inicio">Inicio</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="#" target="_self" title="La Universidad">Personas </a>&nbsp;&nbsp;/&nbsp;&nbsp;<b>Contacto</b>
</div>
     <br><br>
     <div class="row">
         <div class="col-md-12 ">
             <div class="corpoenlaces">
                 <a href=<?php echo $corpocaldas; ?> target="_blank"><img src="imagenes/Corpologo.png" width="200"></a>
             </div>
             <b class="titulo">
                 CONTACTO<br><br>
             </b>
             <p class="text-left"> Si desea contactarse con nosotros, por favor utilice la siguiente información:</p>
             <br>
             <b class="titulo">
                 CORPORACIÓN AUTÓNOMA REGIONAL DE CALDAS - CORPOCALDAS<br><br>
             </b>
             <p class="text-left"><strong> - Lina Marcela Quintero Velásquez</strong></p>
             <p class="text-left">Subdirección de Planificación Ambiental del Territorio </p>
             <p class="text-left">Correo Electrónico:<a href="#">linamquintero@corpocaldas.gov.co</a></p>
             <br><br>

             <p class="text-left"><strong> - Luz Adriana Ramírez López</strong></p>
             <p class="text-left">Subdirección de Planificación Ambiental del Territorio </p>
             <p class="text-left">Correo Electrónico:<a href="#">luzaramirez@corpocaldas.gov.co </a></p>
             <br>
             <h3>--------------------------------------------------------------------------------------</h3><br>

             <b class="titulo">
                 UNIVERSIDAD NACIONAL DE COLOMBIA SEDE MANIZALES<br><br>
             </b>
             <h3><strong>Grupo de Trabajo Académico en Ingeniería Hidráulica y Ambiental - GTA IHA</strong></h3><br><br>
             <p class="text-left"><strong> - Jeannette Zambrano</strong></p>
             <p class="text-left">Departamento de Ingeniería Civil </p>
             <p class="text-left">Correo Electrónico:<a href="#"> jdzambranon@unal.edu.co </a></p>
             <br><br>

             <p class="text-left"><strong> - Jade Alexandra Li Ramírez</strong></p>
             <p class="text-left">Instituto de Estudios Ambientales de la Universidad Nacional de Colombia IDEA </p>
             <p class="text-left">Correo Electrónico:<a href="#">jalir@unal.edu.co  </a></p>
             <br><br>

             <h3><strong>Grupo de Ambientes Inteligentes Adaptativos - GAIA</strong></h3><br><br>

             <p class="text-left"><strong> - Néstor Darío Duque Méndez </strong></p>
             <p class="text-left">Departamento de Informática y Computación </p>
             <p class="text-left">Correo Electrónico:<a href="#"> ndduqueme@unal.edu.co </a></p>
             <br><br>

             <p class="text-left"><strong> - Emilcy Juliana Hernández Leal </strong></p>
             <p class="text-left">Departamento de Informática y Computación</p>
             <p class="text-left">Correo Electrónico:<a href="#">ejhernandezl@unal.edu.co </a></p>
             <br><br>







</main>


<?php
/*PIE DE PÁGINA*/
	include("footer.php")
 ?>
<script src="js/unal.js" type="text/javascript"></script>
</body>
</html>
