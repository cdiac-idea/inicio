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

    <div class="titulo">
        <h1><strong>Entidades</strong></h1>
    </div>
    <br><br>

    <a data-fancybox data-animation-duration="700" data-src="#ModalCorpo" href="javascript:;">
        <img src="imagenes/botcorpocaldas.png" onmouseover="this.src='imagenes/botcorpocaldash.png';"
             onmouseout="this.src='imagenes/botcorpocaldas.png';">
    </a><br>


    <div style="display: none;" id="ModalCorpo" class="animated-modal div-modal">
        <div class="titulo">
            <h1><strong>Estaciones: </strong> <div class="title-modal"><strong>Corpocaldas</strong></div></h1>
        </div>
        <br>

        <br>
        <ul class="hv">
            <div class="container">
                <div class="row">
                    <div class="col-xs-4">
                        <li><a href="hv/sat_manizales/AltoDeLaCoca.pdf" target="_blank" class="hv">Alto de la Coca</a><br></li>
                        <li><a href="hv/sat_manizales/AsuncionConfa.pdf" target="_blank" class="hv"> Asunción-CONFA</a></li>
                        <li><p>Entrada a Solferino</p></li>
                        <li><p>Central SAT Manizales</p></li>
                        <li><a href="hv/sat_manizales/CiscoBosquesNorte.pdf" target="_blank" class="hv">CISCO-Bosques del norte</a><br></li>
                        <li><a href="hv/sat_manizales/ElMirador.pdf" target="_blank" class="hv">El Mirador</a><br></li>
                        <li><a href="hv/sat_manizales/EscuelaCarabineros.pdf" target="_blank" class="hv">Escuela de Carbineros </a><br></li>
                        <li><a href="hv/sat_manizales/FliaAmadorMalteria.pdf" target="_blank" class="hv">Familia Amador- Malteria</a><br></li>
                        <li><a href="hv/sat_manizales/FincaLaPaz.pdf" target="_blank" class="hv">Finca la Paz</a><br></li>
                        <li><a href="hv/sat_manizales/GimnasioCConsolata.pdf" target="_blank" class="hv">Gimnasio Campestre la consolata</a><br></li>
                        <li><a href="hv/sat_manizales/HaciendaManzanares.pdf" target="_blank" class="hv">Hacienda Manzanares</a><br></li>
                        <li><a href="hv/sat_manizales/QCristalesAlhambra.pdf" target="_blank" class="hv">Q. Cristales- Valle de la Alhambra</a><br></li>
                        <li><a href="hv/sat_manizales/QElBohio.pdf" target="_blank" class="hv">Q. El Bohío</a><br></li>
                        <li><a href="hv/sat_manizales/QElPerroExpoferias.pdf" target="_blank" class="hv">Q. El Perro- Expoferias </a><br></li>
                        <li><a href="hv/sat_manizales/QRosarioSanMarcosLeon.pdf" target="_blank" class="hv"> Q. El Rosario- San Marcos de León</a><br></li>
                        <li><a href="hv/sat_manizales/QTriunfoMiradorVillapilar.pdf" target="_blank" class="hv"> Q. El Triunfo- Mirador de Villapilar</a><br></li>
                        <li><a href="hv/sat_manizales/QFranciaPuentes.pdf" target="_blank" class="hv">Q. La Francia- Los Puentes</a><br></li>
                        <li><a href="hv/sat_manizales/QManzanaresIBC.pdf" target="_blank" class="hv">Q. Manzanares- IBC</a><br></li>
                        <li><a href="hv/sat_manizales/QLasPavasAutopistaCafe.pdf" target="_blank" class="hv">Q. Las Pavas- Autopistas del Café</a></li>
                        <li><p>Q. Marmato Planta CHEC</p></li>
                        <li><a href="hv/sat_manizales/QOlivaresAguasManizales.pdf" target="_blank" class="hv">Q. Olivares -Aguas de Manizales</a><br></li>
                        <li><a href="hv/sat_manizales/QPalograndeTerminal.pdf" target="_blank" class="hv">Q. Palogrande terminal de Transportes</a><br></li>
                        <li><a href="hv/sat_manizales/QSalinasRellenoSanitarioEmas.pdf" target="_blank" class="hv">Q. Salinas-Relleno sanitario EMAS</a><br></li>
                        <li><a href="hv/sat_manizales/QElGuamoCDISanSebastian.pdf" target="_blank" class="hv">Q. El Guamo- CDI San Sebastián</a><br></li>
                        <li><a href="hv/sat_manizales/QGuamoLavaderoPuentes.pdf" target="_blank" class="hv">Q. El Guamo- Lavadero los Puentes</a><br></li>
                        <li><a href="hv/sat_manizales/QGuayabalRecinto.pdf" target="_blank" class="hv">Q. Guayabal- Recinto del pensamiento</a><br></li>
                    </div>
                    <div class="col-xs-4">
                        <li><a href="hv/sat_manizales/QManizalesSkinco.pdf" target="_blank" class="hv"> Q. Manizales- SKINCO</a><br></li>
                        <li><a href="hv/sat_manizales/QOlivaresBocatomaRioBLanco.pdf" target="_blank" class="hv">Q. Olivares- Bocatoma río blanco</a><br></li>
                        <li><a href="hv/sat_manizales/QOlivaresBomberosVoluntarios.pdf" target="_blank" class="hv"> Q. Olivares- Bomberos voluntarios</a></li>
                        <li><p>Antenas-Alto del Guamo</p></li>
                        <li><a href="hv/sat_manizales/RioChinchinaBosquePopular.pdf" target="_blank" class="hv">Río Chinchiná bosque popular</a><br></li>
                        <li><a href="hv/udeger/BomberosFundadores.pdf" target="_blank" class="hv">Bomberos fundadores- SAT</a><br></li>
                        <li><a href="hv/sat_manizales/PeralonsoChec.pdf" target="_blank" class="hv">Peralonso-CHEC</a><br></li>
                        <li><a href="hv/corpocaldas/MarquetaliaAlcaldia.pdf" target="_blank" class="hv"> Marquetalia- Alcaldía</a><br></li>
                        <li><a href="hv/corpocaldas/CentralCaldas.pdf" target="_blank" class="hv">Central Caldas</a><br></li>
                        <li><a href="hv/corpocaldas/CentralNevados.pdf" target="_blank" class="hv">Central Nevados</a></li>
                        <li><p> El Cisne P.N.N.N.</p></li>
                        <li> <a href="hv/corpocaldas/RepetidoraCorpocaldas.pdf" target="_blank" class="hv">Repetidora CORPOCALDAS</a><br></li>
                        <li><a href="hv/corpocaldas/RepetidoraElRecreo.pdf" target="_blank" class="hv">Repetidora el Recreo</a><br></li>
                        <li><a href="hv/corpocaldas/NeiraHogares.pdf" target="_blank" class="hv">Neira- Hogares Juveniles</a><br></li>
                        <li><a href="hv/corpocaldas/VillamariaHospital.pdf" target="_blank" class="hv">Villamaría- Hospital</a><br></li>
                        <li><a href="hv/corpocaldas/LiceoIsabel.pdf" target="_blank" class="hv">Liceo Isabel la Católica</a><br></li>
                        <li><a href="hv/corpocaldas/Manzanares.pdf" target="_blank" class="hv">Manzanares</a><br></li>
                        <li><a href="hv/corpocaldas/MarulandaElParamo.pdf" target="_blank" class="hv">Marulanda - El Páramo</a><br></li>
                        <li><a href="hv/corpocaldas/QMolinosPNNN.pdf" target="_blank" class="hv">Q. MolinosP.N.N.N.</a><br></li>
                        <li><a href="hv/corpocaldas/QNereidasPNNN.pdf" target="_blank" class="hv">Quebrada Nereidas P.N.N.N.</a><br></li>
                        <li> <a href="hv/corpocaldas/QTesorito.pdf" target="_blank" class="hv">Q. Tesorito</a><br></li>
                        <li><a href="hv/corpocaldas/QOlivaresPopal.pdf" target="_blank" class="hv">Q. Olivares - El Popal</a><br></li>
                        <li><a href="hv/corpocaldas/RioDonaJuana.pdf" target="_blank" class="hv">Río Doña Juana</a><br></li>
                        <li><a href="hv/corpocaldas/RioGuacaicaJordan.pdf" target="_blank" class="hv">Río Guacaica - El Jordan</a><br></li>
                        <li><a href="hv/corpocaldas/RioGuacaicaChec.pdf" target="_blank" class="hv">Río Guacaica - CHEC</a><br></li>
                        <li><a href="hv/corpocaldas/RioPacora.pdf" target="_blank" class="hv">Río Pácora</a><br></li>
                    </div>
                    <div class="col-xs-4">
                        <li><a href="hv/corpocaldas/RioPensilvaniaMicro.pdf" target="_blank" class="hv">Río Pensilvania - Microcentral</a><br></li>
                        <li><a href="hv/corpocaldas/RioPozo.pdf" target="_blank" class="hv">Río Pozo</a><br></li>
                        <li><a href="hv/corpocaldas/RioclaroGuayana.pdf" target="_blank" class="hv">Río Rioclaro- La Guayana</a><br></li>
                        <li><a href="hv/corpocaldas/RSantoDomingoManzanares.pdf" target="_blank" class="hv">Río Santo Domingo- Manzanares</a><br></li>
                        <li><a href="hv/corpocaldas/RioSupiaPiononos.pdf" target="_blank" class="hv">Río Supía- Los Piononos</a><br></li>
                        <li><a href="hv/corpocaldas/RioSupiaSupia.pdf" target="_blank" class="hv">Río Supía- Supía</a><br></li>
                        <li><a href="hv/corpocaldas/SalaminaChec.pdf" target="_blank" class="hv">Salamina - CHEC</a><br></li>
                        <li><a href="hv/corpocaldas/SanJose.pdf" target="_blank" class="hv">San José</a><br></li>
                        <li><a href="hv/corpocaldas/RioTapias.pdf" target="_blank" class="hv">Río Tapias</a><br></li>
                        <li><a href="hv/corpocaldas/CumandayPNNN.pdf" target="_blank" class="hv">Cumanday P.N.N.N</a><br></li>
                        <li><a href="hv/corpocaldas/RioClaroPNNN.pdf" target="_blank" class="hv">Río Rioclaro P.N.N.N</a><br></li>
                        <li><a href="hv/corpocaldas/RioRisaraldaPalmera.pdf" target="_blank" class="hv">Río Risaralda- La Palmera</a><br></li>
                        <li><a href="hv/corpocaldas/LiceoIsabel.pdf" target="_blank" class="hv">Liceo Isabel la Católica</a></li>
                        <li><p>Milán- INVERMEC</p></li>
                        <li><a href="hv/corpocaldas/Est-01-Jardín_Botánico.pdf" target="_blank" class="hv">Jardín Botánico</a><br></li>
                        <li><a href="hv/corpocaldas/Est-02-Velódromo.pdf" target="_blank" class="hv">Velódromo</a><br></li>
                        <li><a href="hv/corpocaldas/Est-03-Avenida_Paralela.pdf" target="_blank" class="hv">Avenida Paralela</a><br></li>
                        <li><a href="hv/corpocaldas/Est-04-Parque_la_estrella.pdf" target="_blank" class="hv">Parque la estrella</a><br></li>
                        <li><a href="hv/corpocaldas/Est-05-Auditorio_UN.pdf" target="_blank" class="hv">Auditorio UN</a><br></li>
                        <li><a href="hv/corpocaldas/Est-06-Patinódromo_UDP.pdf" target="_blank" class="hv">Patinódromo UDP</a><br></li>
                        <li><a href="hv/corpocaldas/Pal-01-Conexión_Palermo-Fátima.pdf" target="_blank" class="hv">Conexión Palermo-Fátima</a><br></li>
                        <li><a href="hv/corpocaldas/Pal-02-Biblioteca_Salmona.pdf" target="_blank" class="hv">Biblioteca Salmona</a><br></li>
                        <li><a href="hv/corpocaldas/Pal-03-Parque_de_las_garzas.pdf" target="_blank" class="hv">Parque de Las Garzas</a><br></li>
                        <li><a href="hv/corpocaldas/Pal-04-Cancha_la_Italia.pdf" target="_blank" class="hv">Cancha la Italia</a><br></li>
                        <li><a href="hv/corpocaldas/Pal-05-CAI_de_Palermo.pdf" target="_blank" class="hv">CAI de Palermo</a><br></li>
                        <li><a href="hv/corpocaldas/Pal-06-Escuela_de_Enfermería.pdf" target="_blank" class="hv">Escuela de Enfermería</a><br></li>
                    </div>
                </div>
            </div>

        </ul>
    </div>

    <a data-fancybox data-animation-duration="700" data-src="#ModalAlcaldia" href="javascript:;">
        <img src="imagenes/botalcaldia.png" onmouseover="this.src='imagenes/botalcaldiah.png';"
             onmouseout="this.src='imagenes/botalcaldia.png';">
    </a>
    <div style="display: none;" id="ModalAlcaldia" class="animated-modal div-modal">
        <div class="titulo">
            <h1><strong>Estaciones</strong></h1>
        </div>
        <br>
        <div class="title-modal">
            <h3><strong>Alcaldía de Manizales</strong></h3>
        </div>
        <br>
        <ul class="hv">
            <li><a href="hv/alcaldia/alcazares.pdf" target="_blank" class="hv">Alcázares</a><br></li>
            <li><a href="hv/alcaldia/aranjuez.pdf" target="_blank" class="hv">Aranjuez</a><br></li>
            <li><a href="hv/alcaldia/bosquesnorte.pdf" target="_blank" class="hv">Bosques del norte</a><br></li>
            <li><a href="hv/alcaldia/centralugr.pdf" target="_blank" class="hv">Central UGR</a><br></li>
            <li><a href="hv/alcaldia/checuribe.pdf" target="_blank" class="hv">CHEC-Uribe</a><br></li>
            <li><a href="hv/alcaldia/elcarmen.pdf" target="_blank" class="hv">El Carmen</a><br></li>
            <li><a href="hv/alcaldia/lanubia.pdf" target="_blank" class="hv">La Nubia</a><br></li>
            <li><a href="hv/alcaldia/hospitaldecaldas.pdf" target="_blank" class="hv">Hospital de Caldas</a><br></li>
            <li><a href="hv/alcaldia/ingeominas.pdf" target="_blank" class="hv">Ingeominas</a><br></li>
            <li><a href="hv/alcaldia/lapalma.pdf" target="_blank" class="hv">La Palma</a><br></li>
            <li><a href="hv/alcaldia/milanplantaniza.pdf" target="_blank" class="hv">Milan- Planta Niza</a><br></li>
            <li><a href="hv/alcaldia/qpalogranderuta30.pdf" target="_blank" class="hv">Q. Palogrande- Ruta 30</a><br></li>
            <li><a href="hv/alcaldia/yarumos.pdf" target="_blank" class="hv">Yarumos</a><br></li>
        </ul>
    </div>

    <a data-fancybox data-animation-duration="700" data-src="#ModalChec" href="javascript:;">
        <img src="imagenes/botchec.png" onmouseover="this.src='imagenes/botchech.png';"
             onmouseout="this.src='imagenes/botchec.png';">
    </a><br>

    <div style="display: none;" id="ModalChec" class="animated-modal div-modal">
        <div class="titulo">
            <h1><strong>Estaciones</strong></h1>
        </div>
        <br>
        <div class="title-modal">
            <h3><strong>Central Hidroeléctrica de Caldas</strong></h3>
            <h3><strong> S.A E.S.P (CHEC)</strong></h3>
        </div>
        <br>
        <ul class="hv">
            <li><p>Central CHEC</p></li>
            <li><p>Subestación Campoalegre</p></li>
            <li><p>Subestación Guacaica</p></li>
            <li><p>Subestación la Esmeralda</p></li>
            <li><p>Subestación la Estrella</p></li>
            <li><p>Subestación Montevideo</p></li>
            <li><p>Subestación municipal</p></li>
            <li><p>Subestación San Francisco</p></li>
            <li><p>Subestación Sancancio</p></li>
            <li><p>Pirineos</p></li>
            <li><p>Q. Nereidas- CHEC</p></li>
        </ul>
    </div>

    <a data-fancybox data-animation-duration="700" data-src="#ModalGobernacion" href="javascript:;">
        <img src="imagenes/botgobernacion.png" onmouseover="this.src='imagenes/botgobernacionh.png';"
             onmouseout="this.src='imagenes/botgobernacion.png';">
    </a>

    <div style="display: none;" id="ModalGobernacion" class="animated-modal div-modal">
        <div class="titulo">
            <h1><strong>Estaciones</strong></h1>
        </div>
        <br>
        <div class="title-modal">
            <h3><strong>Gobernación de Caldas (UDEGER)</strong></h3>
        </div>
        <br>
        <ul class="hv">
            <li><p>Cenicafé</p></li>
            <li><a href="hv/udeger/CentralUdeger.pdf" target="_blank" class="hv">Central UDEGER</a><br></li>
            <li><a href="hv/udeger/BomberosFundadores.pdf" target="_blank" class="hv">Bomberos Fundadores- UDEGER</a><br></li>
            <li><a href="hv/udeger/ElPescadorAlarma.pdf" target="_blank" class="hv">El Pescador</a><br></li>
            <li><a href="hv/udeger/LaManuelaAlarma.pdf" target="_blank" class="hv">La Manuela</a><br></li>
            <li><a href="hv/udeger/MolinosAlarma.pdf" target="_blank" class="hv">Molinos</a><br></li>
            <li><a href="hv/udeger/MonteVideoAlarma.pdf" target="_blank" class="hv">Montevideo</a><br></li>
            <li><a href="hv/udeger/RioClaroLaBatea.pdf" target="_blank" class="hv">Río Rioclaro- la Batea</a><br></li>
            <li><a href="hv/udeger/RioClaroAlarma.pdf" target="_blank" class="hv">Rioclaro</a><br></li>
            <li><a href="hv/udeger/SantaguedaAlarma.pdf" target="_blank" class="hv">Santágueda</a><br></li>
            <li><a href="hv/udeger/ElDestierroAlarma.pdf" target="_blank" class="hv">El Destierro</a><br></li>
            <li><a href="hv/udeger/RepetidoraChipre.pdf" target="_blank" class="hv">Repetidora Chipre</a><br></li>
            <li><a href="hv/udeger/RioChinchinaBosque.pdf" target="_blank" class="hv">Río Chinchiná el Bosque</a></li>
            <li><p>Río Chinchiná Jardines</p></li>
            <li><p>Supía- Bomberos</p></li>
        </ul>
    </div>

    <a data-fancybox data-animation-duration="700" data-src="#ModalUnal" href="javascript:;">
        <img src="imagenes/botunal.png" onmouseover="this.src='imagenes/botunalh.png';"
             onmouseout="this.src='imagenes/botunal.png';">
    </a><br>

    <div style="display: none;" id="ModalUnal" class="animated-modal div-modal">
        <div class="titulo">
            <h1><strong>Estaciones</strong></h1>
        </div>
        <br>
        <div class="title-modal">
            <h3><strong>Universidad Nacional de Colombia</strong></h3>
        </div>
        <br>
        <ul class="hv">
            <li><a href="hv/Universidad_Nacional/Gobernación de Caldas.pdf" target="_blank" class="hv">Gobernación de Caldas</a><br></li>
            <li><a href="hv/Universidad_Nacional/La Nubia.pdf" target="_blank" class="hv">La Nubia</a><br></li>
            <li><a href="hv/Universidad_Nacional/Palogrande.pdf" target="_blank" class="hv">Palogrande</a><br></li>
            <li><a href="hv/Universidad_Nacional/Maltería.pdf" target="_blank" class="hv"> Maltería</a><br></li>
            <li><a href="hv/Universidad_Nacional/Milán.pdf" target="_blank" class="hv">Milán</a><br></li>
            <li><a href="hv/Universidad_Nacional/La Dorada.pdf" target="_blank" class="hv">La Dorada</a></li>
            <li><p>Liceo</p></li>
            <li><p>Móvil (Gobernación)</p></li>
        </ul>
    </div>

    <a data-fancybox data-animation-duration="700" data-src="#ModalEmas" class="ult-modal" href="javascript:;">
        <img src="imagenes/botemas.png" onmouseover="this.src='imagenes/botemash.png';"
             onmouseout="this.src='imagenes/botemas.png';">
    </a>

    <div style="display: none;" id="ModalEmas" class="animated-modal div-modal">
        <div class="titulo">
            <h1><strong>Estaciones</strong></h1>
        </div>
        <br>
        <div class="title-modal">
            <h3><strong>EMAS</strong></h3>
        </div>
        <br>
        <ul class="hv">
            <li><p>EMAS</p></li>
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
