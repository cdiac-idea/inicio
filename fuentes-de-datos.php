<<<<<<< HEAD
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
	Está en:&nbsp;<a href=<?php echo $cdiac; ?> target="_self" title="Inicio">Inicio</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="#" target="_self" title="La Universidad">DATOS </a>&nbsp;&nbsp;/&nbsp;&nbsp;<b>Fuentes de Datos</b>
</div><br>
<div class="corpodatos">
  <a href=<?php echo $corpocaldas; ?> target="_blank"><img src="imagenes/corpocaldas.png" width="250"></a>
</div>
<div class="divtabla">
<table class="table" id="tablabase">
  <thead>
    <tr class="colortabla">
      <th><h3 class="text-left"> <strong>ENTIDAD</strong></h3></th>
 
      <th><h3 class="text-left"> <strong>ESTACIÓN</strong></h3></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td width="100"><h4 class="text-left"> Central Hidroeléctrica de Caldas S.A. E.S.P.(CHEC)</h4></td>

      <td width="100">
        <h4 class="text-left">
          ►Central CHEC<br>
          ►Subestación Campoalegre<br>
          ►Subestación Guacaica<br>
          ►Subestación la Esmeralda<br>
          ►Subestación la Estrella<br>
          ►Subestación Montevideo<br>
          ►Subestación municipal<br>
          ►Subestación San Francisco<br>
          ►Subestación Sancancio<br>
          ►Pirineos<br>
          ►Q. Nereidas- CHEC<br>
        </h4>
      </td>
    </tr>


    <tr>
      <td width="100"><h4 class="text-left"> Gobernación de Caldas (UDEGER)</h4></td>
 
      <td width="100">
        <h4 class="text-left">
          ►Cenicafé<br>
          ►Central UDEGER<br>
          ►Bomberos Fundadores- UDEGER<br>
          ►El Pescador<br>
          ►La Manuela<br>
          ►Molinos<br>
          ►Montevideo<br>
          ►Río Rioclaro- la Batea<br>
          ►Rioclaro<br>
          ►Santágueda<br>
          ►El Destierro<br>
          ►Repetidora Chipre<br>
          ►Río Chinchiná el Bosque<br>
          ►Río Chinchiná Jardines<br>
          ►Supía- Bomberos<br>
        </h4>
      </td>
    </tr>


    <tr>
      <td width="100" rowspan="3"><h4 class="text-left"> CORPOCALDAS</h4></td>

        <td width="100">
          <h4 class="text-left">
            ►Alto de la Coca<br>
            ►Asunción-CONFA<br>
            ►Entrada a Solferino<br>
            ►Central SAT Manizales<br>
            ►CISCO-Bosques del norte<br>
            ►El Mirador<br>
            ►Escuela de Carbineros<br>
            ►Familia Amador- Malteria<br>
            ►Finca la Paz<br>
            ►Gimnasio Campestre la consolata<br>
            ►Hacienda Manzanares<br>
            ►Q. Cristales- Valle de la Alhambra<br>
            ►Q. El Bohío<br>
            ►Q. El Perro- Expoferias<br>
            ►Q. El Rosario- San Marcos de León<br>
            ►Q. El Triunfo- Mirador de Villapilar<br>
            ►Q. La Francia- Los Puentes<br>
            ►Q. Manzanares- IBC<br>
            ►Q. Las Pavas- Autopistas del Café<br>
            ►Q. Marmato Planta CHEC<br>
            ►Q. Olivares -Aguas de Manizales<br>
            ►Q. Palogrande terminal de Transportes<br>
            ►Q. Salinas-Relleno sanitario EMAS<br>
            ►Q. El Guamo- CDI San Sebastián<br>
            ►Q. El Guamo- Lavadero los Puentes<br>
            ►Q. Guayabal- Recinto del pensamiento<br>
            ►Q. Manizales- SKINCO<br>
            ►Q. Olivares- Bocatoma río blanco<br>
            ►Q. Olivares- Bomberos voluntarios<br>
            ►Antenas-Alto del Guamo<br>
            ►Río Chinchiná bosque popular<br>
            ►Bomberos fundadores- SAT<br>
            ►Peralonso-CHEC<br>
          </h4>
        </td>
    </tr>

    <tr>

      <td width="100">
        <h4 class="text-left">
          ►Marquetalia- Alcaldía<br>
          ►Central Caldas<br>
          ►Central Nevados<br>
          ►El Cisne P.N.N.N.<br>
          ►Repetidora CORPOCALDAS<br>
          ►Repetidora el Recreo<br>
          ►Neira- Hogares Juveniles<br>
          ►Villamaría- Hospital <br>
          ►Liceo Isabel la Católica<br>
          ►Manzanares<br>
          ►Marulanda - El Páramo<br>
          ►Q. MolinosP.N.N.N.<br>
          ►Quebrada Nereidas P.N.N.N.<br>
          ►Q. Tesorito<br>
          ►Q. Olivares - El Popal<br>
          ►Río Doña Juana<br>
          ►Río Guacaica - El Jordan<br>
          ►Río Guacaica - CHEC<br>
          ►Río Pácora<br>
          ►Río Pensilvania - Microcentral<br>
          ►Río Pozo<br>
          ►Río Rioclaro- LA Guayana<br>
          ►Río Santo Domingo- Manzanares<br>
          ►Río Supía- Los Piononos<br>
          ►Río Supía- Supía<br>
          ►Salamina - CHEC<br>
          ►San José<br>
          ►Río Tapias<br>
          ►Cumanday P.N.N.N<br>
          ►Río Rioclaro P.N.N.N<br>
          ►RÍO Risaralda- LA Palmera<br>

        </h4>
      </td>
    </tr>

    <tr>

      <td width="100">
        <h4 class="text-left">
          ►Liceo Isabel la católica<br>
          ►Milán- INVERMEC<br>
        </h4>
      </td>
    </tr>


    <tr>
      <td width="100" rowspan="2"><h4 class="text-left"> Universidad Nacional de Colombia</h4></td>
   
        <td width="100">
          <h4 class="text-left">
            ►Gobernación de Caldas<br>
            ►La Nubia<br>
            ►Palogrande<br>
          </h4>
        </td>
    </tr>

    <tr>
 
      <td width="100">
        <h4 class="text-left">
          ►Posgrados<br>
        </h4>
      </td>
    </tr>

    <tr>
      <td width="100"><h4 class="text-left"> Alcaldía de Manizales</h4></td>

        <td width="100">
          <h4 class="text-left">
            ►Alcázares<br>
            ►Aranjuez<br>
            ►Bosques del norte<br>
            ►Central UGR<br>
            ►CHEC-Uribe<br>
            ►El Carmen<br>
            ►La Nubia<br>
            ►Hospital de Caldas<br>
            ►Ingeominas<br>
            ►La Palma<br>
            ►Milan- Planta Niza<br>
            ►Q. Palogrande- Ruta 30<br>
            ►Yarumos<br>
          </h4>
        </td>
    </tr>



    <tr>
      <td width="100" rowspan="2"><h4 class="text-left"> EMAS</h4></td>
   
        <td width="100">
          <h4 class="text-left">
            ►Móvil (Gobernación)<br>
          </h4>
        </td>
    </tr>
    <tr>
      <td width="100">
        <h4 class="text-left">
          ►EMAS<br>
        </h4>
      </td>
    </tr>


  </tbody>
</table>
<style>




</style>
</div>
</main>
<?php
/*PIE DE PÁGINA*/
	include("footer.php")
 ?>
<script src="js/unal.js" type="text/javascript"></script>
</body>
</html>
=======
<?php
/*HEAD DE LA PAGINA*/
	include("head.php")
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
	Está en:&nbsp;<a href="http://idea.manizales.unal.edu.co" target="_self" title="Inicio">Inicio</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="http://localhost/gtanuevo/hidraulica" target="_self" title="La Universidad">DATOS </a>&nbsp;&nbsp;/&nbsp;&nbsp;<b>Fuentes de Datos</b>
</div><br>
<div class="corpodatos">
  <a href="http://www.corpocaldas.gov.co"><img src="imagenes/corpocaldas.png" width="250"></a>
</div>
<div class="divtabla">
<table class="table" id="tablabase">
  <thead>
    <tr class="colortabla">
      <th><h3 class="text-left"> <strong>ENTIDAD</strong></h3></th>
 
      <th><h3 class="text-left"> <strong>ESTACIÓN</strong></h3></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td width="100"><h4 class="text-left"> Central Hidroeléctrica de Caldas S.A. E.S.P.(CHEC)</h4></td>

      <td width="100">
        <h4 class="text-left">
          ►Central CHEC<br>
          ►Subestación Campoalegre<br>
          ►Subestación Guacaica<br>
          ►Subestación la Esmeralda<br>
          ►Subestación la Estrella<br>
          ►Subestación Montevideo<br>
          ►Subestación municipal<br>
          ►Subestación San Francisco<br>
          ►Subestación Sancancio<br>
          ►Pirineos<br>
          ►Q. Nereidas- CHEC<br>
        </h4>
      </td>
    </tr>


    <tr>
      <td width="100"><h4 class="text-left"> Gobernación de Caldas (UDEGER)</h4></td>
 
      <td width="100">
        <h4 class="text-left">
          ►Cenicafé<br>
          ►Central UDEGER<br>
          ►Bomberos Fundadores- UDEGER<br>
          ►El Pescador<br>
          ►La Manuela<br>
          ►Molinos<br>
          ►Montevideo<br>
          ►Río Rioclaro- la Batea<br>
          ►Rioclaro<br>
          ►Santágueda<br>
          ►El Destierro<br>
          ►Repetidora Chipre<br>
          ►Río Chinchiná el Bosque<br>
          ►Río Chinchiná Jardines<br>
          ►Supía- Bomberos<br>
        </h4>
      </td>
    </tr>


    <tr>
      <td width="100" rowspan="3"><h4 class="text-left"> CORPOCALDAS</h4></td>

        <td width="100">
          <h4 class="text-left">
            ►Alto de la Coca<br>
            ►Asunción-CONFA<br>
            ►Entrada a Solferino<br>
            ►Central SAT Manizales<br>
            ►CISCO-Bosques del norte<br>
            ►El Mirador<br>
            ►Escuela de Carbineros<br>
            ►Familia Amador- Malteria<br>
            ►Finca la Paz<br>
            ►Gimnasio Campestre la consolata<br>
            ►Hacienda Manzanares<br>
            ►Q. Cristales- Valle de la Alhambra<br>
            ►Q. El Bohío<br>
            ►Q. El Perro- Expoferias<br>
            ►Q. El Rosario- San Marcos de León<br>
            ►Q. El Triunfo- Mirador de Villapilar<br>
            ►Q. La Francia- Los Puentes<br>
            ►Q. Manzanares- IBC<br>
            ►Q. Las Pavas- Autopistas del Café<br>
            ►Q. Marmato Planta CHEC<br>
            ►Q. Olivares -Aguas de Manizales<br>
            ►Q. Palogrande terminal de Transportes<br>
            ►Q. Salinas-Relleno sanitario EMAS<br>
            ►Q. El Guamo- CDI San Sebastián<br>
            ►Q. El Guamo- Lavadero los Puentes<br>
            ►Q. Guayabal- Recinto del pensamiento<br>
            ►Q. Manizales- SKINCO<br>
            ►Q. Olivares- Bocatoma río blanco<br>
            ►Q. Olivares- Bomberos voluntarios<br>
            ►Antenas-Alto del Guamo<br>
            ►Río Chinchiná bosque popular<br>
            ►Bomberos fundadores- SAT<br>
            ►Peralonso-CHEC<br>
          </h4>
        </td>
    </tr>

    <tr>

      <td width="100">
        <h4 class="text-left">
          ►Marquetalia- Alcaldía<br>
          ►Central Caldas<br>
          ►Central Nevados<br>
          ►El Cisne P.N.N.N.<br>
          ►Repetidora CORPOCALDAS<br>
          ►Repetidora el Recreo<br>
          ►Neira- Hogares Juveniles<br>
          ►Villamaría- Hospital <br>
          ►Liceo Isabel la Católica<br>
          ►Manzanares<br>
          ►Marulanda - El Páramo<br>
          ►Q. MolinosP.N.N.N.<br>
          ►Quebrada Nereidas P.N.N.N.<br>
          ►Q. Tesorito<br>
          ►Q. Olivares - El Popal<br>
          ►Río Doña Juana<br>
          ►Río Guacaica - El Jordan<br>
          ►Río Guacaica - CHEC<br>
          ►Río Pácora<br>
          ►Río Pensilvania - Microcentral<br>
          ►Río Pozo<br>
          ►Río Rioclaro- LA Guayana<br>
          ►Río Santo Domingo- Manzanares<br>
          ►Río Supía- Los Piononos<br>
          ►Río Supía- Supía<br>
          ►Salamina - CHEC<br>
          ►San José<br>
          ►Río Tapias<br>
          ►Cumanday P.N.N.N<br>
          ►Río Rioclaro P.N.N.N<br>
          ►RÍO Risaralda- LA Palmera<br>

        </h4>
      </td>
    </tr>

    <tr>

      <td width="100">
        <h4 class="text-left">
          ►Liceo Isabel la católica<br>
          ►Milán- INVERMEC<br>
        </h4>
      </td>
    </tr>


    <tr>
      <td width="100" rowspan="2"><h4 class="text-left"> Universidad Nacional de Colombia</h4></td>
   
        <td width="100">
          <h4 class="text-left">
            ►Gobernación de Caldas<br>
            ►La Nubia<br>
            ►Palogrande<br>
          </h4>
        </td>
    </tr>

    <tr>
 
      <td width="100">
        <h4 class="text-left">
          ►Posgrados<br>
        </h4>
      </td>
    </tr>

    <tr>
      <td width="100"><h4 class="text-left"> Alcaldía de Manizales</h4></td>

        <td width="100">
          <h4 class="text-left">
            ►Alcázares<br>
            ►Aranjuez<br>
            ►Bosques del norte<br>
            ►Central UGR<br>
            ►CHEC-Uribe<br>
            ►El Carmen<br>
            ►La Nubia<br>
            ►Hospital de Caldas<br>
            ►Ingeominas<br>
            ►La Palma<br>
            ►Milan- Planta Niza<br>
            ►Q. Palogrande- Ruta 30<br>
            ►Yarumos<br>
          </h4>
        </td>
    </tr>



    <tr>
      <td width="100" rowspan="2"><h4 class="text-left"> EMAS</h4></td>
   
        <td width="100">
          <h4 class="text-left">
            ►Móvil (Gobernación)<br>
          </h4>
        </td>
    </tr>
    <tr>
      <td width="100">
        <h4 class="text-left">
          ►EMAS<br>
        </h4>
      </td>
    </tr>


  </tbody>
</table>
<style>




</style>
</div>
</main>
<?php
/*PIE DE PÁGINA*/
	include("footer.php")
 ?>
<script src="js/unal.js" type="text/javascript"></script>
</body>
</html>
>>>>>>> 70f96a87b77b16ab98948d5c36aa2398aaed7b24
