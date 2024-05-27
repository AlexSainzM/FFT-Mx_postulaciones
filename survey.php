<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Alejandro Sainz Morales, FFT-Mx team and Bootstrap contributors">
        <meta name="generator" content="Alejandro 0.0.1">
        <title>FFT-Mx - Elecciones 2024</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/starter-template/">

        

        <!-- Bootstrap core CSS -->
        <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        </style>

        
        <!-- Custom styles for this template -->
        <link href="./styles/indexstyles.css" rel="stylesheet">
    </head>

    <body>

        <!--Contenedor principal del body-->
        
        <div class="col-lg-8 mx-auto p-3 py-md-5">
            
            <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                <img src="./assets/img/LogoFFT.gif" alt="FFT-MX-LOGO"  height="40" class="me-2">
                <span class="fs-4">FFT México</span>
                </a>
            </header>

            <main>

                <!--Botón del modal-->
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8 align-self-start">
                            <h3>Comité de trabajadores</h3>
                            <p class="fs-6 col-md-8">Elecciones 2024</p>
                        </div>
                        
                        <div class="col-md-4 align-self-end">
                            <div class="mb-5">
                                <button type="button" class="btn btn-lg px-4 buttonFFTGreen" data-bs-toggle="modal" data-bs-target="#staticBackdropLive" onclick="" id="boton11">
                                    Ver instrucciones
                                </button>
                              </div>
                        </div>
                    </div>
                </div>

                <!--Vista del modal con instrucciones-->
                <div class="modal fade" id="staticBackdropLive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLiveLabel">Te pedimos participar con responsabilidad en este ejercicio</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <p class="col-md-12">En este proceso, <strong>solo podran participar</strong>  personal con contrato indeterminado - <strong>PLANTA</strong></p>
                          <p class="col-md-12">Puestos a cubrir:</p>
                          <ul>                    
                            <li>1 Presindente</li>
                            <li>1 Secretario</li>
                            <li>4 Auxiliares</li>
                          </ul>
                          <p class="col-md-12">Deberás elegir a 3 trabajadores(as) del área <strong>Técnico - Administrativa</strong> de las siguientes areas:</p>
                          <div class="col-md-12">
                            <div class="row align-items-center">
                              <div class="col">
                                <ul>
                                  <li>Ingeniería Electrica</li>
                                  <li>Ingeniería Mécanica</li>
                                  <li>Gestión de proyectos</li>
                                  <li>Seguridad Industrial</li>
                                  <li>Flota de vehículos</li>
                                  <li>Contabilidad</li>                        
                                </ul>
                              </div>
                              <div class="col">
                                <ul>
                                  <li>Compras</li>
                                  <li>Controlling</li>
                                  <li>Ventas</li>
                                  <li>Calculación</li>
                                  <li>IT</li>
                                  <li>Gestión de la calidad</li>
                                </ul>
                              </div>                      
                            </div>
                            
                          </div>
        
                          <p class="col-md-12">Deberás elegir a 3 trabajadores(as) del área <strong>Productiva</strong> de las siguientes áreas:</p>
                          <div class="col-md-12">
                            <div class="row align-items-center">
                              <div class="col">
                                <ul>
                                  <li>Área Técnica</li>
                                  <li>Fabricación</li>
                                  <li>Ensamble de componentes</li>
                                  <li>Control de calidad</li>
                                </ul>
                              </div>
                              <div class="col">
                                <ul>                          
                                  <li>Logística</li>                        
                                  <li>Operaciones de ensamble</li>
                                  <li>Almacén</li>
                                  <li>Gestión de facilidades</li>
                                  <li>Calidad de producto</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          
                          <p class="col-md-12"><Strong>Puedes postularte a ti mismo</Strong></p>
                        </div>
                        <div class="modal-footer">
                          
                          <button type="button" class="btn btn-secondary mb-3" data-bs-dismiss="modal">Cerrar</button>
                          <!--Botones del Modal deshabilidatados
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Understood</button>
                          -->
                        </div>
                      </div>
                    </div>
                </div>

                

                <form action="./includes/formhandler.inc.php" method="post" class="needs-validation"  novalidate id="nominacionesFFTForm"> <!--action="https://formspree.io/f/mwkgzebo"
                    method="POST"-->
                    <div class="bd-example">
                        
                        <div class="accordion" id="accordionExample">

                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <h5>¿A quíen deseas nominar como presidente?</h5>
                                    </button>
                                </h4>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    
                                        <h6 class="mb-3 strong">Puedes nominar solo a una persona como <strong>presidente</strong> ya sea del personal del <strong>Área Técnico - Administrativa o de Producción.</strong></h6>

                                        <p class="mb-3 ">Escribe sobre cualquiera de los campos para buscar y haz doble clic sobre el nombre la persona que deseas nominar.</p>

                                        <hr class="my-4">

                                        <div class="col-md-12">
                                            <div class="row align-items-center">
                                                
                                                <div class="col">
                                                        <label for="inputATPresidente" class="form-label">Personal Técnico - Administrativo</label>
                                                        <input class="form-control" list="listaAT" id="inputATPresidente" name="inputATPresidente" placeholder="Escribe para buscar..." onchange="inputsDeshabilitadosPresAT()" >
                                                        <datalist id="listaAT">
                                                            <option value='ACOSTA MAGAÑA SAMUEL'>
                                                            <option value='AGUILAR SANTOS JAIME'>
                                                            <option value='AGUILERA MENDEZ JOSE AUGUSTO'>
                                                            <option value='ALMARAZ PEREZ GABRIEL'>
                                                            <option value='ALONSO ORTIZ ISAI'>
                                                            <option value='ALONSO RAZO MANUEL CARLOS'>
                                                            <option value='ANZALDO GARCIA JUAN RICARDO'>
                                                            <option value='ARELLANO CRUZ JONATAN URIEL'>
                                                            <option value='ARMENTA AGUILAR ERIKA'>
                                                            <option value='ARROYO CORONA AMBAR PENELOPE '>
                                                            <option value='AVENDAÑO SOSA EDUARDO'>
                                                            <option value='BADILLO PEREZ RACIEL'>
                                                            <option value='BAEZ BAGATELLA MAYAM LUCERO'>
                                                            <option value='BARBOSA SANCHEZ CRISTHIAN HAZEL'>
                                                            <option value='BARRANCO VARGAS KAREN'>
                                                            <option value='BRIONES MORALES ESTHEFANIA '>
                                                            <option value='CABILDO TEPECH GRACIELA '>
                                                            <option value='CABRERA DURAN ALFREDO '>
                                                            <option value='CAMACHO ALVAREZ SANDRA'>
                                                            <option value='CARLOCK TAPIA MIGUEL FERNANDO'>
                                                            <option value='CARRASCO ILLESCAS OSCAR '>
                                                            <option value='CARRERA BONILLA MERARI ARISAI '>
                                                            <option value='CARRILLO GARCIA JORGE MANUEL'>
                                                            <option value='CASTILLO AGUIRRE ARTURO'>
                                                            <option value='CASTILLO ESPINOZA ERICK'>
                                                            <option value='CASTILLO ORTEGA MARIA FERNANDA'>
                                                            <option value='CASTILLO RAMIREZ MARCO ANTONIO'>
                                                            <option value='CASTRO BUENDIA JONY RAUL'>
                                                            <option value='CASTRO GONZALEZ ANA PATRICIA '>
                                                            <option value='CASTRO LEZAMA DANIELA'>
                                                            <option value='CELIS PALACIOS JOSE'>
                                                            <option value='CERVANTES AQUINO FRANCISCO'>
                                                            <option value='CERVANTES TELLEZ MARTHA PATRICIA'>
                                                            <option value='CHAVARRIAZ HERNANDEZ JOSE LORENZO MEREGILDO'>
                                                            <option value='CHAVARRIAZ SARMIENTO GUSTAVO'>
                                                            <option value='CIGARRERO QUINTANA EMMANUEL'>
                                                            <option value='CONDE CRUZ IGNACIO'>
                                                            <option value='CORDERO RUIZ JOSE ANTONIO'>
                                                            <option value='CORONA GONZALEZ ARELI GLORIA'>
                                                            <option value='CORONA PEREZ AGUSTIN'>
                                                            <option value='CORTES ALDAMA OSCAR'>
                                                            <option value='CORTES GARCIA CHRISTIAN'>
                                                            <option value='COYOTL TOXCOYOA ISRAEL'>
                                                            <option value='CRUZ COATL FRANCISCO JAVIER'>
                                                            <option value='CRUZ CORTES HUGO'>
                                                            <option value='CRUZ DIAZ RAFAEL'>
                                                            <option value='CRUZ GARCIA JENNYFER'>
                                                            <option value='CRUZ SANTIAGO JUAN CARLOS'>
                                                            <option value='CUAUTLE MENDEZ LEON DANIEL'>
                                                            <option value='CUAZITL ALVARADO ULISES'>
                                                            <option value='DE LA CONCHA CRISANTOS MIGUEL ANGEL'>
                                                            <option value='DE LA ROSA RODRIGUEZ UBALDO'>
                                                            <option value='DEL RIVERO ALVARADO LESLIE'>
                                                            <option value='DETTMANN JOERG'>
                                                            <option value='DIAZ FERNANDEZ DE LARA LUIS FERNANDO '>
                                                            <option value='DIAZ SALINAS ERICKA'>
                                                            <option value='DOMINGUEZ CAZARES ELIAS'>
                                                            <option value='DOMINGUEZ DELGADO BIBIANA CONCEPCION'>
                                                            <option value='DUKANOVIC ALJOSA'>
                                                            <option value='ESPAÑA LUNA JOSE ABRAHAM'>
                                                            <option value='FERNANDEZ CAMPOS CARLOS ISRAEL'>
                                                            <option value='FLORES CONTRERAS ANA LAURA'>
                                                            <option value='FLORES HERRERA ITZEL'>
                                                            <option value='FLORES RAMIREZ ADALBERTO'>
                                                            <option value='FLORES SERRANO HECTOR MIGUEL'>
                                                            <option value='GALEAZZI RODRIGUEZ JAIME'>
                                                            <option value='GARCIA AGUILAR HILCE ESTEFANIA'>
                                                            <option value='GARCIA FIGUEROA MIRYAM'>
                                                            <option value='GARCIA GALAN JUAN LUIS'>
                                                            <option value='GARCIA TORRES CARLOS ALBERTO'>
                                                            <option value='GARCIA XAHUENTITLA ANDRES'>
                                                            <option value='GARRIDO LEON JOSE FRANCISCO'>
                                                            <option value='GASPAR RODRIGUEZ JOAQUIN'>
                                                            <option value='GOMEZ JUAREZ EDGAR NOEL'>
                                                            <option value='GOMEZ PEREZ SERGIO'>
                                                            <option value='GONZALEZ GUTIERREZ LUIS MARIO'>
                                                            <option value='GONZALEZ JIMENEZ DALILA'>
                                                            <option value='GONZALEZ MARQUEZ ALEJANDRA'>
                                                            <option value='GONZALEZ MERLO SANTOS OMAR'>
                                                            <option value='GONZALEZ ORDAZ JUAN'>
                                                            <option value='GONZALEZ TOZCANO GERARDO'>
                                                            <option value='GÖRLICH FLORIAN MANUEL'>
                                                            <option value='GUERRA RAMOS FABIAN'>
                                                            <option value='GUERRERO MARTINEZ GEOVANNI'>
                                                            <option value='GUTIERREZ LOPEZ BEATRIZ'>
                                                            <option value='GUTIERREZ REVELES ABRAHAM'>
                                                            <option value='GUZMAN TORRES LUIS ALBERTO'>
                                                            <option value='HERNANDEZ HERNANDEZ FRANCISCO ALDAIR'>
                                                            <option value='HERNANDEZ HERNANDEZ JORGE ABRAHAM'>
                                                            <option value='HERNANDEZ HERRERA JORGE'>
                                                            <option value='HERNANDEZ LOPEZ RAFAEL '>
                                                            <option value='HERNANDEZ REYES AXL FERNANDO '>
                                                            <option value='HERNANDEZ SALAS HUGO'>
                                                            <option value='HUERTA MALDONADO VANESA'>
                                                            <option value='ISLAS ROMERO SUSANA'>
                                                            <option value='IZQUIERDO GONZALEZ MANUEL'>
                                                            <option value='JAIMES VILCHIS YARITZEL'>
                                                            <option value='JIMENEZ FERNANDEZ ANGELICA'>
                                                            <option value='LARA ROSADO ROBERTO MIGUEL'>
                                                            <option value='LARIOS PEREZ AMOS  '>
                                                            <option value='LAVANDEROS ORTEGA ERICK FORTINO'>
                                                            <option value='LEYVA CHINCOYA ALEJANDRA'>
                                                            <option value='LIMA BECERRA JUAN MANUEL'>
                                                            <option value='LIMA GUZMAN MARIA JOSE '>
                                                            <option value='LOPEZ CHAZARI ARIAN'>
                                                            <option value='LOPEZ LOPEZ JANETT'>
                                                            <option value='LOPEZ MARQUEZ MARIA ERIKA'>
                                                            <option value='LOPEZ NIEVES ALEJANDRO '>
                                                            <option value='LOPEZ REYNOSO JORGE'>
                                                            <option value='LOZANO ESPINOSA ARMANDO'>
                                                            <option value='LUMBRERAS ROMERO JUAN CARLOS '>
                                                            <option value='LUNA REYES SERGIO'>
                                                            <option value='MALDONADO GONZALEZ CARLOS JOSE '>
                                                            <option value='MANCILLA HERNANDEZ ELEAZAR'>
                                                            <option value='MARCIAL PAZ SERGIO'>
                                                            <option value='MARTINEZ ALVARADO CESAR'>
                                                            <option value='MARTINEZ BAUTISTA ISAID'>
                                                            <option value='MARTINEZ FLORES NEGGIE '>
                                                            <option value='MARTINEZ GARZON JOSE JAVIER'>
                                                            <option value='MARTINEZ RODRIGUEZ HUGO '>
                                                            <option value='MARTINEZ SANCHEZ BRIAN '>
                                                            <option value='MATIAS ROSAS GUADALUPE'>
                                                            <option value='MEDINA TENORIO OMAR'>
                                                            <option value='MEDRANO MENESES IRVING'>
                                                            <option value='MENDEZ CORONA ISRAEL'>
                                                            <option value='MENDOZA FLORES VICTOR MANUEL'>
                                                            <option value='MENDOZA GARCIA LUIS ALBERTO'>
                                                            <option value='MENDOZA GUTIERREZ JOSE EMILIANO'>
                                                            <option value='MENDOZA ISIDRO OSTERBEG '>
                                                            <option value='MOHNHAUPT KNUT TORSTEN'>
                                                            <option value='MOLINA GARCIA GONZALO'>
                                                            <option value='MONDRAGON GUTIERREZ ROBERTO'>
                                                            <option value='MONTERO COPOYA EDGAR FRANCISCO'>
                                                            <option value='MORALES BARRANCO MARIA FERNANDA '>
                                                            <option value='MORALES ORTIZ ANAHI'>
                                                            <option value='MORAN CERON PARIS ALONSO'>
                                                            <option value='MORENO DE JESUS HEBER'>
                                                            <option value='MORENO HUERTA JAVIER'>
                                                            <option value='MORENO SABINAS JESUS FABIAN'>
                                                            <option value='MUÑOZ TOXQUI HUGO '>
                                                            <option value='NAVA CENTENO EDUARDO'>
                                                            <option value='ORDOÑEZ LOPEZ RAFAEL'>
                                                            <option value='OTERO PORTADA MARIO EDUARDO '>
                                                            <option value='PADILLA LEON ALBERTO MIGUEL'>
                                                            <option value='PEÑA AREVALO CRISTIAN'>
                                                            <option value='PEÑA SANDOVAL RICARDO PATRICIO'>
                                                            <option value='PEÑALOZA CABALLERO LAURA GUADALUPE '>
                                                            <option value='PEREZ ELIZONDO MARCO ANTONIO'>
                                                            <option value='PEREZ GIL ISMAEL'>
                                                            <option value='PEREZ PROMOTOR RICARDO'>
                                                            <option value='PINEDA GUERRERO JOSE MANUEL'>
                                                            <option value='PORRAS FLORES IGNACIO'>
                                                            <option value='PORRAS FLORES JESUS EDGARDO'>
                                                            <option value='PORRAS ISLAS MIGUEL ANGEL'>
                                                            <option value='PRIEGO JIMENEZ PAOLA NOHEMI'>
                                                            <option value='QUIJANO MEZA LUIS ADAN'>
                                                            <option value='QUIROZ BAUTISTA MOISES ABRAHAM'>
                                                            <option value='RAMIREZ BARRANCO SOLEDAD'>
                                                            <option value='RAMIREZ LUNA ANAYELLI'>
                                                            <option value='RAMIREZ MATA EDDER'>
                                                            <option value='RAMIREZ MOLINA JUAN MIGUEL'>
                                                            <option value='RAMIREZ ORTIZ MATIAS ALBERTANO'>
                                                            <option value='RAMIREZ PALACIOS JARED'>
                                                            <option value='RAMIREZ PEREZ OMAR'>
                                                            <option value='RAMIREZ TREJO EDSON'>
                                                            <option value='RAMIREZ VAZQUEZ DAVID'>
                                                            <option value='REYES RAMIREZ ERICK'>
                                                            <option value='REYES RAMIREZ RICARDO '>
                                                            <option value='RICO ZARAGOZA MANUEL'>
                                                            <option value='RIOS PEREZ RAFAEL'>
                                                            <option value='ROBLES SANCHEZ YUSEFF'>
                                                            <option value='RODEA OLIVARES OSCAR '>
                                                            <option value='RODRIGUEZ CARREON MIGUEL ANGEL'>
                                                            <option value='RODRIGUEZ CASTILLO DANIEL'>
                                                            <option value='RODRIGUEZ CORONA ANDREA '>
                                                            <option value='RODRIGUEZ GARCIA DAVID RICARDO'>
                                                            <option value='RODRIGUEZ HONORATO SAID URIEL'>
                                                            <option value='RODRIGUEZ JUAREZ JOSE RENE'>
                                                            <option value='RODRIGUEZ MARTINEZ ARTURO'>
                                                            <option value='RODRIGUEZ MENDEZ MARIO ALBERTO'>
                                                            <option value='RODRIGUEZ NETZAHUAL JUAN JESUS'>
                                                            <option value='RODRIGUEZ SOLANO MARTIN'>
                                                            <option value='RODRIGUEZ TOLEDO RICARDO'>
                                                            <option value='ROJAS CASTRO MARIA DE LOURDES'>
                                                            <option value='ROJAS LOPEZ ALEJANDRO'>
                                                            <option value='ROMERO VAZQUEZ MAYRA BELEN '>
                                                            <option value='ROSAS ARELLANO KORAL'>
                                                            <option value='ROUSTAND CRUZ EFREN '>
                                                            <option value='RUIZ FALCON MIGUEL ANGEL'>
                                                            <option value='RUIZ RIOS JESUS RAFAEL'>
                                                            <option value='SANCHEZ AGUIRRE RAMON ANTONIO'>
                                                            <option value='SANCHEZ CONTRERAS LUIS JAIR'>
                                                            <option value='SANCHEZ GONZALEZ LUIS ENRIQUE'>
                                                            <option value='SANCHEZ HERNANDEZ JESUS'>
                                                            <option value='SANCHEZ ISLAS MARTIN DE JESUS'>
                                                            <option value='SANCHEZ PATRICIO LUIS MARIO'>
                                                            <option value='SANCHEZ VARGAS CESAR IVAN'>
                                                            <option value='SANDOVAL AVILA MARTIN'>
                                                            <option value='SANDOVAL MORA RICARDO ANTONIO'>
                                                            <option value='SANDOVAL SANCHEZ JOSE FRANCISCO'>
                                                            <option value='SECUNDINO VARGAS JOSE ANTONIO'>
                                                            <option value='SEGUNDO GONZALEZ NAILEA ITZEL'>
                                                            <option value='SEIFERT SEBASTIAN'>
                                                            <option value='SORIANO BARBOSA ROBERTO'>
                                                            <option value='STECKIEWICZ DARIUSZ RYSZARD'>
                                                            <option value='TAPIA ESPINOZA SURI SARAID'>
                                                            <option value='TEODORO GONZALEZ ISRAEL'>
                                                            <option value='TOBON GONZALEZ ALEJANDRA'>
                                                            <option value='TOLAMA TEHUITZIL JUAN CARLOS'>
                                                            <option value='TORRES JIMENEZ JOSUE'>
                                                            <option value='TOXQUI FLORES LUIS ALBERTO'>
                                                            <option value='TREJO DE LOS SANTOS RAUL'>
                                                            <option value='TRUJILLO GONZALEZ LETICIA '>
                                                            <option value='UC-YAM CALDERON FREDDY '>
                                                            <option value='URRUTIA MELENDEZ DIEGO'>
                                                            <option value='VALERA LEON ELUZAI'>
                                                            <option value='VARILLAS GERARDO PEDRO'>
                                                            <option value='VASQUEZ JARQUIN GREGORIO JACOBO'>
                                                            <option value='VAZQUEZ ORTEGA JULIETA NAYELI'>
                                                            <option value='VAZQUEZ RAMOS JOSE AGUSTIN'>
                                                            <option value='VAZQUEZ SALINAS JOSE EDUARDO '>
                                                            <option value='VELAZQUEZ RODRIGUEZ ALDAHIR ALBERTO  '>
                                                            <option value='VELEZ GAONA DAYANA KATHERINE'>
                                                            <option value='VILLEGAS ARELLANO YAZMIN '>
                                                            <option value='WEBER TIM'>
                                                            <option value='XOCHITEMOL AHUATZI ARTURO'>
                                                            <option value='ZAMORA HUERTA OMAR'>
                                                            <option value='ZAVALA RAMOS GABRIEL '>
                                                            <option value='ZUÑIGA ROSAS OSCAR ISAID'>

                                                        </datalist>
                                                </div>
                                                
                                                <div class="col">
                                                        <label for="inputProdPresidente" class="form-label">Personal Producción</label>
                                                        <input class="form-control" list="listaProd" id="inputProdPresidente" name="inputProdPresidente" placeholder="Escribe para buscar..." onchange="inputsDeshabilitadosPresPR()">
                                                        <datalist id="listaProd">
                                                            <option value='AGUIRRE LOPEZ JORGE'>
                                                            <option value='AGUIRRE LOPEZ OSCAR'>
                                                            <option value='AMADOR CONTRERAS ALEJANDRO '>
                                                            <option value='AMARO CALZADA ANGEL SANTOS'>
                                                            <option value='ARANA ZACARIAS OSCAR'>
                                                            <option value='ARCE PEREZ CARLOS ULISES'>
                                                            <option value='ARCE PEREZ CELSO JAHIR'>
                                                            <option value='ARRAZOLA RODRIGUEZ RAZIEL'>
                                                            <option value='AYALA MORA OSCAR URIEL'>
                                                            <option value='BENITEZ AQUINO RICARDO'>
                                                            <option value='CABRERA BORJAS JORGE RUBEN'>
                                                            <option value='CAMACHO AGUIRRE TANIA BELEN'>
                                                            <option value='CANDIA CABRERA JOHNNY'>
                                                            <option value='CASTILLO SANCHEZ PABLO'>
                                                            <option value='CASTRO SANCHEZ JOSE DIEGO BERNARDO'>
                                                            <option value='CID HERNANDEZ ANDRES ORLANDO'>
                                                            <option value='CONTRERAS RAMIREZ VERONICA SHEILA '>
                                                            <option value='CORTES CRUZ CARLOS'>
                                                            <option value='CORTES CRUZ LEONARDO'>
                                                            <option value='CORTES VIÑAS SHERILYN NUBIA '>
                                                            <option value='CORTINA GODOS MIGUEL ANGEL'>
                                                            <option value='CRUZ EVARISTO ANA MARIA'>
                                                            <option value='DE JESUS CUELLAR RICARDO'>
                                                            <option value='DE LA ROSA DE VICTORIO JOSE'>
                                                            <option value='FLORES CALIXTO JORGE ARMANDO'>
                                                            <option value='FLORES CANO MANUEL'>
                                                            <option value='FLORES GARCIA OSCAR '>
                                                            <option value='FLORES PEREZ JOSE GERARDO'>
                                                            <option value='FLORES ROMERO BRANDON'>
                                                            <option value='FLORES ROMERO CRISTHIAN'>
                                                            <option value='FLORES TEMICH ROBERTO'>
                                                            <option value='FUENTES CASTILLO ADOLFO'>
                                                            <option value='GALAN COYOTL RIGOBERTO'>
                                                            <option value='GARATE GARCIA RICARDO'>
                                                            <option value='GARCIA DAVILA OMAR'>
                                                            <option value='GARCIA LORENZO HECTOR DANIEL '>
                                                            <option value='GARCIA NETZAHUALT JONATHAN'>
                                                            <option value='GARCIA RAMOS BRYAN'>
                                                            <option value='GOMEZ VAZQUEZ RICARDO '>
                                                            <option value='GONZALEZ ALVAREZ SILVIANO'>
                                                            <option value='GONZALEZ ENCISO EDGAR'>
                                                            <option value='GONZALEZ HERRERA DAHIR '>
                                                            <option value='GONZALEZ RAMOS JUAN JONATHAN'>
                                                            <option value='GORDIAN GARCIA JOSE PEDRO'>
                                                            <option value='GRACIDAS ROJAS ALAN PABLO'>
                                                            <option value='GUZMAN MENDEZ SERGIO'>
                                                            <option value='HERNANDEZ DAMIAN MIGUEL'>
                                                            <option value='HERNÁNDEZ ESTRADA CESAR'>
                                                            <option value='HERNANDEZ GALINDO ERICKA MARICRUZ'>
                                                            <option value='HERNANDEZ GARCIA JAIR'>
                                                            <option value='HERNANDEZ MAIMONE MIGUEL ANGEL'>
                                                            <option value='HERNANDEZ RAMIREZ MARCOS '>
                                                            <option value='HERRERA RODRIGUEZ JONATHAN'>
                                                            <option value='HUEYOPA CUEVAS JORGE DAVID'>
                                                            <option value='IBARRA GARCIA MOISES'>
                                                            <option value='IZQUIERDO GONZALEZ JESUS ANTONIO'>
                                                            <option value='IZQUIERDO USCANGA ROBERTO'>
                                                            <option value='JIMENEZ NAVARRO ANGEL ADRIAN'>
                                                            <option value='JIMENEZ PEREZ ALEJANDRO'>
                                                            <option value='JUAREZ BLANCO JUAN CARLOS'>
                                                            <option value='JUAREZ CUETO ABDIEL '>
                                                            <option value='LANG JORG'>
                                                            <option value='LOPEZ AVILA JOSE ANTONIO'>
                                                            <option value='LOPEZ PEREZ JOSE FERNANDO'>
                                                            <option value='MALDONADO ALEJOS ALAN IVAN'>
                                                            <option value='MARBAN GONZALEZ CARLOS'>
                                                            <option value='MARQUEZ MENDEZ PAULINA IRANDY'>
                                                            <option value='MARTINEZ CARRILLO VALENTIN'>
                                                            <option value='MARTINEZ PEREZ BENITO'>
                                                            <option value='MARTINEZ SALAZAR ALEJANDRO'>
                                                            <option value='MAURICIO DOMINGUEZ JOSE PERFECTO'>
                                                            <option value='MEDINA DE ANDA ALAN'>
                                                            <option value='MEJORADA MANZANO MIGUEL ANGEL'>
                                                            <option value='MENDEZ LOZANO GUSTAVO'>
                                                            <option value='MENDEZ MORAN GUSTAVO'>
                                                            <option value='MENDIZABAL HERNANDEZ RAUL'>
                                                            <option value='MEZA ROJAS ANGEL MANUEL'>
                                                            <option value='MICHICOL FLORES CLEMENTE'>
                                                            <option value='MINO SIERRA ALDAIR ALBERTO '>
                                                            <option value='MONTAÑO HERRERA HOMERO'>
                                                            <option value='MOONEY FRANCIS JOSEPH'>
                                                            <option value='MORALES ALVAREZ ALEXIS '>
                                                            <option value='MURILLO HERRERIAS JESUS'>
                                                            <option value='ORDAZ CUELLAR MARCO ANTONIO'>
                                                            <option value='ORDOÑEZ CARREOLA ARTURO'>
                                                            <option value='ORTEGA ESCALANTE EMMANUEL'>
                                                            <option value='ORTEGA GARCIA JAVIER'>
                                                            <option value='PAZ ROJAS EDUARDO'>
                                                            <option value='PEREZ MEDINA OMAR'>
                                                            <option value='PEREZ MENDEZ SAUL'>
                                                            <option value='PEREZ PINEDA MARTIN'>
                                                            <option value='PEREZ SORIANO MIGUEL ANGEL'>
                                                            <option value='PIRIN FERNANDEZ VICTOR ANTONIO'>
                                                            <option value='POLANCO RODRIGUEZ RAUL'>
                                                            <option value='QUITERIO MARTINEZ BRANDO '>
                                                            <option value='RAMIREZ OLAYO MIGUEL'>
                                                            <option value='RODRIGUEZ NICOLAS MARIANO '>
                                                            <option value='ROJAS SANCHEZ SERGIO'>
                                                            <option value='ROMAN JIMENEZ ALEJANDRO '>
                                                            <option value='ROSAS LOPEZ ISMAEL'>
                                                            <option value='RUANO POZOS LIZETH GABRIELA'>
                                                            <option value='SALDAÑA BELLO SALVADOR EDUARDO'>
                                                            <option value='SALDIVAR MENDOZA RENE'>
                                                            <option value='SANCHEZ GASPARIANO ROGELIO MIGUEL'>
                                                            <option value='SANCHEZ LIMON JUAN MANUEL'>
                                                            <option value='SANCHEZ OLVERA JESSICA'>
                                                            <option value='SANCHEZ PEREZ ISMAEL'>
                                                            <option value='SANCHEZ PETRIZ MICHEL OMAR'>
                                                            <option value='SANCHEZ REYES AGUSTIN'>
                                                            <option value='SANCHEZ REYES VALENTIN'>
                                                            <option value='SANCHEZ SANCHEZ CRISTIAN ALBERTO'>
                                                            <option value='SANCHEZ ZEPEDA JOSE CARLOS FELIX'>
                                                            <option value='SANDOVAL RODRIGUEZ JOSE VICTOR MANUEL'>
                                                            <option value='SANTIAGO JAIME OSCAR EMILIO'>
                                                            <option value='SEDEÑO REYES ISRAEL'>
                                                            <option value='SEGURA BONILLA FRANCISCO JAVIER'>
                                                            <option value='SILVA GASCA LUIS MANUEL'>
                                                            <option value='SILVA MARTINEZ J. NATIVIDAD'>
                                                            <option value='SORIA CALDERON HUGO'>
                                                            <option value='TLACHINO RAMIREZ JUAN'>
                                                            <option value='VALDEZ PANECATL LUIS FELIPE '>
                                                            <option value='VALENCIA SANCHEZ JUAN PABLO'>
                                                            <option value='VALLADARES HERNANDEZ HECTOR MANUEL '>
                                                            <option value='VAZQUEZ MENDEZ JOSE FRANCISCO'>
                                                            <option value='VAZQUEZ PEREZ LUIS EFREN '>
                                                            <option value='VAZQUEZ ZAMORA ISRAEL'>
                                                            <option value='VELAZQUEZ GONZALEZ HUGO'>
                                                            <option value='VIDAL LARA EMANUEL'>
                                                            <option value='VILLEGAS MORENO FRANCISCO JAVIER'>
                                                            <option value='ZAMORANO RESENDIZ ADOLFO'>
                                                            <option value='ZITLATL COATL JUAN CARLOS '>
                                                            <option value='ZITLE ARROYO ELIAS TROYANO'>
                                                        </datalist>
                                                </div>                      
                                            </div>
                                            
                                        </div>


                                        <hr class="my-4">

                                        <button class="w-100 btn btn-lg buttonFFTGreen mb-3"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <h5>Siguiente</h5>
                                        </button>
                                
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <h5>¿A quíen deseas nominar como secretario?</h5>
                                    </button>
                                </h4>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    
                                        <h6 class="mb-3 strong">Puedes nominar solo a una persona como <strong>secretario</strong> ya sea del personal del <strong>Área Técnico - Administrativa o de Producción.</strong></h6>

                                        <p class="mb-3 ">Escribe sobre cualquiera de los campos para buscar y haz doble clic sobre el nombre la persona que deseas nominar.</p>

                                        <hr class="my-4">


                                        <div class="col-md-12">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                        <label for="inputATSecretario" class="form-label">Personal Técnico - Administrativo</label>
                                                        <input class="form-control" list="listaAT" id="inputATSecretario" name="inputATSecretario" placeholder="Escribe para buscar..." onchange="inputsDeshabilitadosSecAT()">                                                        
                                                </div>
                                                
                                                <div class="col">
                                                        <label for="inputProdSecretario" class="form-label">Personal Producción</label>
                                                        <input class="form-control" list="listaProd" id="inputProdSecretario" name="inputProdSecretario" placeholder="Escribe para buscar..." onchange="inputsDeshabilitadosSecPR()">                                                        
                                                </div>                       
                                            </div>
                                            
                                        </div>


                                        <hr class="my-4">

                                        <button class="w-100 btn btn-lg buttonFFTGreen mb-3"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <h5>Siguiente</h5>
                                        </button>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <h5>¿A quienes deseas nominar como auxiliares?</h5>
                                    </button>
                                </h4>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        
                                        <h6 class="mb-3">Puedes nominar a <strong>4 personas como auxiliares ya sea del personal del área Técnico - Administrativa o de Producción.</strong></h6>

                                        <h6 class="mb-3"><Strong>Recuerda que al final deberás haber escogido a 3 personas del área Técnico - Administrativa y a 3 del area de Producción.</Strong></h6>

                                        <hr class="my-4">

                                        <h6 class="mb-3"><Strong>Auxiliar 1</Strong></h6>


                                        <div class="col-md-12">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                        <label for="inputATAuxiliar1" class="form-label">Personal Técnico - Administrativo</label>
                                                        <input class="form-control" list="listaAT" id="inputATAuxiliar1" name="inputATAuxiliar1" placeholder="Escribe para buscar..." onchange="inputsDeshabilitadosAux1AT()">                                        
                                                </div>
                                                <div class="col">
                                                        <label for="inputProdAuxiliar1" class="form-label">Personal Producción</label>
                                                        <input class="form-control" list="listaProd" id="inputProdAuxiliar1" name="inputProdAuxiliar1" placeholder="Escribe para buscar..." onchange="inputsDeshabilitadosAux1PR()">                                            
                                                </div>                      
                                            </div>
                                            
                                        </div>

                                        <hr class="my-4">

                                        <h6 class="mb-3"><Strong>Auxiliar 2</Strong></h6>

                                        <div class="col-md-12">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                        <label for="inputATAuxiliar2" class="form-label">Personal Técnico - Administrativo</label>
                                                        <input class="form-control" list="listaAT" id="inputATAuxiliar2" name="inputATAuxiliar2" placeholder="Escribe para buscar..." onchange="inputsDeshabilitadosAux2AT()">
                                                </div>
                                                <div class="col">
                                                        <label for="inputProdAuxiliar2" class="form-label">Personal Producción</label>
                                                        <input class="form-control" list="listaProd" id="inputProdAuxiliar2" name="inputProdAuxiliar2" placeholder="Escribe para buscar..." onchange="inputsDeshabilitadosAux2PR()">
                                                </div>                      
                                            </div>
                                            
                                        </div>

                                        <hr class="my-4">

                                        <h6 class="mb-3"><Strong>Auxiliar 3</Strong></h6>

                                        <div class="col-md-12">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                        <label for="inputATAuxiliar3" class="form-label">Personal Técnico - Administrativo</label>
                                                        <input class="form-control" list="listaAT" id="inputATAuxiliar3" name="inputATAuxiliar3" placeholder="Escribe para buscar..." onchange="inputsDeshabilitadosAux3AT()">                                                        
                                                </div>
                                                <div class="col">
                                                        <label for="inputProdAuxiliar3" class="form-label">Personal Producción</label>
                                                        <input class="form-control" list="listaProd" id="inputProdAuxiliar3" name="inputProdAuxiliar3" placeholder="Escribe para buscar..." onchange="inputsDeshabilitadosAux3PR()">                                                        
                                                </div>                      
                                            </div>
                                            
                                        </div>

                                        <hr class="my-4">

                                        <h6 class="mb-3"><Strong>Auxiliar 4</Strong></h6>

                                        <div class="col-md-12">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                        <label for="inputATAuxiliar4" class="form-label">Personal Técnico - Administrativo</label>
                                                        <input class="form-control" list="listaAT" id="inputATAuxiliar4" name="inputATAuxiliar4" placeholder="Escribe para buscar..." onchange="inputsDeshabilitadosAux4AT()">                                                        
                                                </div>
                                                <div class="col">
                                                        <label for="inputProdAuxiliar4" class="form-label">Personal Producción</label>
                                                        <input class="form-control" list="listaProd" id="inputProdAuxiliar4" name="inputProdAuxiliar4" placeholder="Escribe para buscar..." onchange="inputsDeshabilitadosAux4PR()">                                                        
                                                </div>                      
                                            </div>
                                            
                                        </div>


                                        <hr class="my-4">

                                      
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-lg px-4 buttonFFTGreen" data-bs-toggle="modal" data-bs-target="#staticBackdropLive2" onclick="botonSubmit()" id="boton11">
                                                Validar mis respuestas. 
                                            </button>
                                        </div>
                                              

                                        <!--Vista del modal con instrucciones-->
                                        <div class="modal fade" id="staticBackdropLive2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLiveLabel">Si no esta habilitado el botón de envío. Por favor revisa tus respuestas.</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                               
                                                <button class="w-100 btn btn-lg buttonFFTGreen mb-3"  type="submit" id="botonEnviarCuestionario" onclick="">
                                                <h5>Enviar Cuestionario</h5>
                                                </button>

                                                </div>
                                                <div class="modal-footer">
                                                
                                                <button type="button" class="btn btn-secondary mb-3" data-bs-dismiss="modal">Cerrar</button>
                                                <!--Botones del Modal deshabilidatados
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Understood</button>
                                                -->
                                                </div>
                                            </div>
                                            </div>
                                        </div>

                                        

                                    </div>
                                </div>
                            
                            </div>

                        </div>
                    
                    </div>
                </form>

            </main>

            <footer class="pt-5 my-5 text-muted border-top">
                FFT México S.A. de C.V. &middot; &copy; 2024
            </footer>

        </div>

        <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="./script.js"></script>

    </body>

</html>


<!-- 
    Si, me terminé de dar cuenta
-->