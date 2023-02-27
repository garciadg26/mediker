
    <?php $title = "Productos | Mediker - Comercializadora Pecuaria de México" ?>
    <?php include_once "Public/includes/header.php"; ?>
</head>
<body>

    <!-- MENÚ DE NAVEGACIÓN -->
    <?php include_once "Public/includes/nav.php"; ?>

    <!-- ESPACIO MENU FIXED -->
    <div class="space_fixed_grey"></div>
    <!-- PRODUCTOS -->
    <section id="distribuidores" class="section_distri">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4 class="tit_secundario">DIRECTORIO Y MAPA DE DISTRIBUIDORES</h4>
                </div>
            </div>
            <?php
                // VARIABLES
             $direccion = "Dirección"; 
             $telefono = "Teléfono"; 
             $correo = "Correo"; 
            ?>
            <!-- 01 FILA -->
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">INSA SALUD ANIMAL</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <p class="txt_general">Temascaltepec #17 Col. Moctezuma Xalapa, Ver. C.P. 91096</p>
                            <!-- FINAL MODAL -->
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="tel:2281549013" class="txt_general">228-154-9013</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:insasaludanimal@gmail.com" class="txt_general">insasaludanimal@gmail.com</a>
                            <br>
                            <!-- BUTTON TRIGGER MODAL -->
                            <button type="button" class="btn_gen btn_principal" data-toggle="modal" data-target="#ventanaModal">
                                Ver mapa
                            </button>
                            <!-- INICIO MODAL -->
                            <div class="modal fade" id="ventanaModal" tabindex="-1" role="dialog" aria-labelledby="Mapa de ubicación" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">INSA SALUD ANIMAL</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d940.2106729096049!2d-96.87641261185261!3d19.505402599173646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85db33b4f4bcc059%3A0x97592d7d445e7972!2sC.%20Temascaltepec%2017%2C%20Pastoresa%2C%2091096%20Pacho%20Viejo%2C%20Ver.!5e0!3m2!1ses-419!2smx!4v1675959416918!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">GUADALUPE HINOJOS MEDRANO</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <p class="txt_general">11 1/2 Nte. #22 Col. Del Empleado Delicias, Chih. C.P. 33059</p>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="tel:6391726592" class="txt_general">639-172-6592</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:gpehinojos@prodigy.net.mx" class="txt_general">gpehinojos@prodigy.net.mx</a>
                            <br>
                            <!-- BUTTON TRIGGER MODAL -->
                            <button type="button" class="btn_gen btn_principal" data-toggle="modal" data-target="#guadalupeHinojos">
                                Ver mapa
                            </button>
                            <!-- INICIO MODAL -->
                            <div class="modal fade" id="guadalupeHinojos" tabindex="-1" role="dialog" aria-labelledby="Mapa de ubicación" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">GUADALUPE HINOJOS MEDRANO</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1617.7939209150275!2d-105.47981552850324!3d28.200485965447868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86eb15cac663fe45%3A0x77a1a788c534c189!2sCalle%2011%201%2F2%20Nte.%2022%2C%20Col%20del%20Empleado%2C%20Delicias%2C%20Chih.!5e0!3m2!1ses-419!2smx!4v1675961183363!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">COMERCIALIZADORA SG</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <p class="txt_general">Colonial Santiago #329 Col. San Miguel Guadalupe, N.L. C.P. 67114</p>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="tel:8121505691" class="txt_general">812-150-5691</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:comercializadora-sg@hotmail.com" class="txt_general">comercializadora-sg@hotmail.com</a>
                            <br>
                            <!-- BUTTON TRIGGER MODAL -->
                            <button type="button" class="btn_gen btn_principal" data-toggle="modal" data-target="#comercializadoraSG">
                                Ver mapa
                            </button>
                            <!-- INICIO MODAL -->
                            <div class="modal fade" id="comercializadoraSG" tabindex="-1" role="dialog" aria-labelledby="Mapa de ubicación" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">COMERCIALIZADORA SG</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3594.7220767760195!2d-100.19248371207868!3d25.71362436523132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662ea392e3b3afb%3A0x8ee96b189c2ebeee!2sColonial%20Santiago%20329%2C%20Colonial%20San%20Miguel%2C%2067113%20test%20city%2C%20N.L.!5e0!3m2!1ses-419!2smx!4v1675962090695!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- 02 FILA -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">LEONARDO GARCÍA VILLARREAL</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <p class="txt_general">Rio Cimarrón #108 Col. Privada de Santa Rosa Apodaca, N.L. C.P. 66610</p>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="tel:8115452832" class="txt_general">811-545-2832</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:legaro78@hotmail.com" class="txt_general">legaro78@hotmail.com</a>
                            <br>
                            <!-- BUTTON TRIGGER MODAL -->
                            <button type="button" class="btn_gen btn_principal" data-toggle="modal" data-target="#leonardoGarcia">
                                Ver mapa
                            </button>
                            <!-- INICIO MODAL -->
                            <div class="modal fade" id="leonardoGarcia" tabindex="-1" role="dialog" aria-labelledby="Mapa de ubicación" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">LEONARDO GARCÍA VILLARREAL</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1462.1405312395777!2d-100.22777649415127!3d25.806744350048437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662ecf1d65588cb%3A0x75a3fbc1b17d3996!2sR%C3%ADo%20Cimarr%C3%B3n%20108%2C%20Privadas%20de%20Santa%20Rosa%2C%2066610%20Prados%20de%20Santa%20Rosa%2C%20N.L.!5e0!3m2!1ses-419!2smx!4v1675962035752!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">AGROVETERINARIA MAYTE S.A. DE C.V.</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <p class="txt_general">Santa Rita #155 Col. Nueva Sta, Maria Tlaquepaque, Jal. C.P. 45530</p>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="tel:3314781844" class="txt_general">331-478-1844</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:comercializadoramayte@hotmail.com" class="txt_general">comercializadoramayte@hotmail.com</a>
                            <br>
                            <!-- BUTTON TRIGGER MODAL -->
                            <button type="button" class="btn_gen btn_principal" data-toggle="modal" data-target="#agroveterinariaMayte">
                                Ver mapa
                            </button>
                            <!-- INICIO MODAL -->
                            <div class="modal fade" id="agroveterinariaMayte" tabindex="-1" role="dialog" aria-labelledby="Mapa de ubicación" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">AGROVETERINARIA MAYTE S.A. DE C.V.</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d490.02338897423465!2d-103.38255605717683!3d20.607714143121168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ad0cd4635493%3A0x3cc2042f28010910!2sC.%20Sta.%20Rita%20Pte.%20155%2C%20Nueva%20Santa%20Mar%C3%ADa%2C%2045530%20San%20Pedro%20Tlaquepaque%2C%20Jal.!5e0!3m2!1ses-419!2smx!4v1675962227199!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">INSUMOS AGROVETERINARIOS Y MASCOTAS</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <p class="txt_general">115 Ote. #1422-2 Col. Los Heroes de Puebla Pebla, Pue. C.P. 72590</p>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="tel:7712199591" class="txt_general">771-219-9591</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:reyesvsc@hotmail.com" class="txt_general">reyesvsc@hotmail.com</a>
                            <a href="mailto:cepales@hotmail.com" class="txt_general">cepales@hotmail.com</a>
                            <br>
                            <!-- BUTTON TRIGGER MODAL -->
                            <button type="button" class="btn_gen btn_principal" data-toggle="modal" data-target="#insumosAgroveterianrios">
                                Ver mapa
                            </button>
                            <!-- INICIO MODAL -->
                            <div class="modal fade" id="insumosAgroveterianrios" tabindex="-1" role="dialog" aria-labelledby="Mapa de ubicación" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">INSUMOS AGROVETERINARIOS Y MASCOTAS</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d943.2597298922154!2d-98.21764497073713!3d18.97388849919668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfbf33c380b47f%3A0x9b7fb3e55305690a!2sC.%20115-A%20Ote.%201422%2C%20San%20Francisco%20Totimehuacan%2C%20Puebla%2C%20Pue.!5e0!3m2!1ses-419!2smx!4v1675962490103!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- 03 FILA -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">GUIZA DISTRIBUIDORA S.A. DE C.V.</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <p class="txt_general">Anacleto González Flores #1174-A Col. La Loma Tepatitlan, Jal. C.P. 47645</p>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="tel:3781166244" class="txt_general">378-116-6244</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:guiza@prodigy.net.mx" class="txt_general">guiza@prodigy.net.mx</a>
                            <br>
                            <!-- BUTTON TRIGGER MODAL -->
                            <button type="button" class="btn_gen btn_principal" data-toggle="modal" data-target="#guizaDistribuidora">
                                Ver mapa
                            </button>
                            <!-- INICIO MODAL -->
                            <div class="modal fade" id="guizaDistribuidora" tabindex="-1" role="dialog" aria-labelledby="Mapa de ubicación" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">GUIZA DISTRIBUIDORA S.A. DE C.V.</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3729.8553649868018!2d-102.76989108410802!3d20.797138486124382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429287bce0522e5%3A0xeb6d5f79e19b361d!2sBlvd.%20Lic.%20Anacleto%20Glez%20F.%20Sur%201174%2C%20Las%20Calles%20de%20Alcala%2C%2047655%20Tepatitl%C3%A1n%20de%20Morelos%2C%20Jal.!5e0!3m2!1ses-419!2smx!4v1675963722769!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">LUIS FERNANDO MARÍN ESTRADA</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <p class="txt_general">Rayon #1445 Col. Centro Cuauhtémoc, Chih. C.P. 31500</p>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="tel:6251069482" class="txt_general">625-106-9482</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:nutrimar.2018@gmail.com" class="txt_general">nutrimar.2018@gmail.com</a>
                            <br>
                            <!-- BUTTON TRIGGER MODAL -->
                            <button type="button" class="btn_gen btn_principal" data-toggle="modal" data-target="#luisFernandoMarin">
                                Ver mapa
                            </button>
                            <!-- INICIO MODAL -->
                            <div class="modal fade" id="luisFernandoMarin" tabindex="-1" role="dialog" aria-labelledby="Mapa de ubicación" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">LUIS FERNANDO MARÍN ESTRADA</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d447.9196442703869!2d-106.87092212876!3d28.400782488486332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86c1ca5425ecc49d%3A0xcbec517d7a2f0525!2sIgnacio%20L%C3%B3pez%20Rayon%201445%2C%20Zona%20Centro%2C%2031500%20Cd%20Cuauht%C3%A9moc%2C%20Chih.!5e0!3m2!1ses-419!2smx!4v1675963845075!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">INFARVET S.A. DE C.V.</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <p class="txt_general">Misioneros #253 Col. Misión de San Carlos Querétaro, Qro. C.P. 76903</p>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="tel:4421104027" class="txt_general">442-110-4027</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:administracion@grupoinfarvet.com" class="txt_general">administracion@grupoinfarvet.com</a>
                            <a href="mailto:j.cano@grupoinfarvet.com" class="txt_general">j.cano@grupoinfarvet.com</a>
                            <br>
                            <!-- BUTTON TRIGGER MODAL -->
                            <button type="button" class="btn_gen btn_principal" data-toggle="modal" data-target="#infarverSA">
                                Ver mapa
                            </button>
                            <!-- INICIO MODAL -->
                            <div class="modal fade" id="infarverSA" tabindex="-1" role="dialog" aria-labelledby="Mapa de ubicación" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">INFARVET S.A. DE C.V.</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d523.5960822031666!2d-100.39262958139349!3d20.54391013978329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d344ffaf13c677%3A0x92878c3f6a6e1357!2sC.%20Misioneros%20253%2C%20Mision%20de%20San%20Carlos%2C%2076190%20Candiles%2C%20Qro.!5e0!3m2!1ses-419!2smx!4v1675963972324!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- 04 FILA -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">ISA DE AGUASCALIENTES S.A. DE C.V.</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <p class="txt_general">Acacia #524 Col. Las Arboledas Aguascalientes, Ags. C.P. 20020</p>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="tel:4492545056" class="txt_general">449-254-5056</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:isaveterinaria@outlook.com" class="txt_general">isaveterinaria@outlook.com</a>
                            <br>
                            <!-- BUTTON TRIGGER MODAL -->
                            <button type="button" class="btn_gen btn_principal" data-toggle="modal" data-target="#isaDeAguascalientes">
                                Ver mapa
                            </button>
                            <!-- INICIO MODAL -->
                            <div class="modal fade" id="isaDeAguascalientes" tabindex="-1" role="dialog" aria-labelledby="Mapa de ubicación" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">ISA DE AGUASCALIENTES S.A. DE C.V.</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3701.849154186432!2d-102.30481518409638!3d21.90188378553196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429eef64d12eb5d%3A0x8ff52086238fa41c!2sAcacia%20524%2C%20Las%20Arboledas%2C%2020020%20Aguascalientes%2C%20Ags.!5e0!3m2!1ses-419!2smx!4v1675964148846!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">ALMA DELIA PEÑA MARTÍNEZ</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <p class="txt_general">5 de Mayo #203 Col. Centro Tlalixcoyan, Ver. C.P 95222</p>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="tel:235-103-0318" class="txt_general">235-103-0318</a><br>
                            <a href="tel:285-103-3108" class="txt_general">285-103-3108</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:almadelia1976@hotmail.com" class="txt_general">almadelia1976@hotmail.com</a>
                            <br>
                            <!-- BUTTON TRIGGER MODAL -->
                            <button type="button" class="btn_gen btn_principal" data-toggle="modal" data-target="#almaDeliaPenia">
                                Ver mapa
                            </button>
                            <!-- INICIO MODAL -->
                            <div class="modal fade" id="almaDeliaPenia" tabindex="-1" role="dialog" aria-labelledby="Mapa de ubicación" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">ALMA DELIA PEÑA MARTÍNEZ</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d379.5094459166466!2d-96.06245101346688!3d18.80203407300657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1675963599912!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">JORGE ANTONIO MENDOZA TOLEDO</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <p class="txt_general">5a Pte. Norte #83 Col. Santo Domingo Cintalapa de Figueroa , Chis. C.P. 30400</p>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="tel:971-142-3122" class="txt_general">971-142-3122</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:jorgetol3@hotmail.com" class="txt_general">jorgetol3@hotmail.com</a>
                            <br>
                            <!-- BUTTON TRIGGER MODAL -->
                            <button type="button" class="btn_gen btn_principal" data-toggle="modal" data-target="#jorgeAntonioMendoza">
                                Ver mapa
                            </button>
                            <!-- INICIO MODAL -->
                            <div class="modal fade" id="jorgeAntonioMendoza" tabindex="-1" role="dialog" aria-labelledby="Mapa de ubicación" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">JORGE ANTONIO MENDOZA TOLEDO</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.629124777071!2d-93.72830778394672!3d16.69543242678322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85eca7e12daae6cb%3A0x3c7daa51f4f5697b!2sCalle%20Quinta%20Pte.%2083%2C%20Santo%20Domingo%2C%2030410%20Cintalapa%20de%20Figueroa%2C%20Chis.!5e0!3m2!1ses-419!2smx!4v1675962314407!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- 05 FILA -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">ROMOVET S. DE R.L. DE C.V.</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <p class="txt_general">Del Palmar #49 Col. Valle de los Sauces Morelia, Mich. C.P. 58190</p>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="tel:4431604471" class="txt_general">443-160-4471</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:romovet_morelia@hotmail.com" class="txt_general">romovet_morelia@hotmail.com</a>
                            <br>
                            <!-- BUTTON TRIGGER MODAL -->
                            <button type="button" class="btn_gen btn_principal" data-toggle="modal" data-target="#romoverSDERL">
                                Ver mapa
                            </button>
                            <!-- INICIO MODAL -->
                            <div class="modal fade" id="romoverSDERL" tabindex="-1" role="dialog" aria-labelledby="Mapa de ubicación" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">ROMOVET S. DE R.L. DE C.V.</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4710.819868391485!2d-101.2799388879297!3d19.699930505669265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0968dee8d28f%3A0x4a366b70e821a861!2sValle%20de%20los%20Sauces%2C%2058337%20Morelia%2C%20Mich.!5e0!3m2!1ses-419!2smx!4v1675962215317!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">DISTRIBUIDORA EQUINA SMC S.A. de C.V.</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <p class="txt_general">Cajeme #1118 Col. Electricista Ciudad Obregon, Son. C.P. 85040</p>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="tel:644-407-0031" class="txt_general">644-407-0031</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:jlconcilion@hotmail.com" class="txt_general">jlconcilion@hotmail.com</a>
                            <br>
                            <!-- BUTTON TRIGGER MODAL -->
                            <button type="button" class="btn_gen btn_principal" data-toggle="modal" data-target="#distribuidoraEquina">
                                Ver mapa
                            </button>
                            <!-- INICIO MODAL -->
                            <div class="modal fade" id="distribuidoraEquina" tabindex="-1" role="dialog" aria-labelledby="Mapa de ubicación" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">DISTRIBUIDORA EQUINA SMC S.A. de C.V.</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1936.1921235335992!2d-109.92849487950805!3d27.509510213646525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86c81596f988055b%3A0xdb4a8a591ed1a358!2sFarmacias%20Veterinar%C3%ADa%20San%20Mart%C3%ADn%20Caballero!5e0!3m2!1ses-419!2smx!4v1675962069983!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">COMERCIALIZADORA PECUARIA S.A DE C.V.</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <p class="txt_general">Calz. de las Águilas #925 Col Ampliacion las Águilas Álvaro Obregon, Cdmx. C.P. 01759</p>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="tel:554-069-689" class="txt_general">554-069-689</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:samuel@comercializadorapecuaria.com" class="txt_general">samuel@comercializadorapecuaria.com</a>
                            <br>
                            <!-- BUTTON TRIGGER MODAL -->
                            <button type="button" class="btn_gen btn_principal" data-toggle="modal" data-target="#comercializadoraPecu">
                                Ver mapa
                            </button>
                            <!-- INICIO MODAL -->
                            <div class="modal fade" id="comercializadoraPecu" tabindex="-1" role="dialog" aria-labelledby="Mapa de ubicación" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">COMERCIALIZADORA PECUARIA S.A DE C.V.</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.4280990190323!2d-99.21934552439056!3d19.35060756536236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2006ebfb3e35f%3A0x5c4c1d01dd1d603f!2sCalz.%20de%20las%20%C3%81guilas%20925%2C%20Amp%20%C3%81guilas%2C%20%C3%81lvaro%20Obreg%C3%B3n%2C%2001710%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1675961990749!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- 06 FILA -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">RAÚL PEREZ LÓPEZ</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <p class="txt_general">Hidalgo s/n Col. Lealtad Soconusco, Ver. C.P. 96170</p>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="tel:9241473898" class="txt_general">924-147-3898</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:proveedoravet@outlook.com" class="txt_general">proveedoravet@outlook.com</a>
                            <br>
                            <!-- BUTTON TRIGGER MODAL -->
                            <button type="button" class="btn_gen btn_principal" data-toggle="modal" data-target="#raulPerezLopez">
                                Ver mapa
                            </button>
                            <!-- INICIO MODAL -->
                            <div class="modal fade" id="raulPerezLopez" tabindex="-1" role="dialog" aria-labelledby="Mapa de ubicación" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">RAÚL PEREZ LÓPEZ</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3795.356947658266!2d-94.89718678394192!3d17.962122690699452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ea02ca99cca1a1%3A0x9660cfb0ffbe5ef6!2sHidalgo%2C%20Lealtad%2C%2096170%20Col%20Lealtad%2C%20Ver.!5e0!3m2!1ses-419!2smx!4v1675961886627!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">BALMA S.A.</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <p class="txt_general">Calzada Atanasio TZUL 21-00 OFIBODEGA 516 Col Zona 12 Empresarial El Cortijo II Guatemala, Guatemala</p>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="tel:224626983" class="txt_general">+50 224-62-6983</a><br>
                            <a href="tel:224626986" class="txt_general">+50 224-62-6986</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:rony.matzer@proveavicola.com" class="txt_general">rony.matzer@proveavicola.com</a>
                            <br>
                            <!-- BUTTON TRIGGER MODAL -->
                            <button type="button" class="btn_gen btn_principal" data-toggle="modal" data-target="#bulmaSA">
                                Ver mapa
                            </button>
                            <!-- INICIO MODAL -->
                            <div class="modal fade" id="bulmaSA" tabindex="-1" role="dialog" aria-labelledby="Mapa de ubicación" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">BALMA S.A.</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d965.2678142270122!2d-90.54163622334814!3d14.595015408805375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a16b8859c14b%3A0x33b704702c518702!2sProve-Av%C3%ADcola!5e0!3m2!1ses-419!2smx!4v1675961787593!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php include_once "Public/includes/footer.php"; ?>
    <script src="Public/js/popper.min.js"></script>
    

</body>
</html>