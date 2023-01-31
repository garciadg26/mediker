
    <?php $title = "Productos | Mediker - Comercializadora Pecuaria de México" ?>
    <?php include_once "Public/includes/header.php"; ?>
</head>
<body>

    <!-- MENÚ DE NAVEGACIÓN -->
    <?php include_once "Public/includes/nav.php"; ?>

    <!-- ESPACIO MENU FIXED -->
    <div class="space_fixed_grey"></div>

    <!-- BREADCRUMB -->
    <section id="breadcrumb" class="section_breadcrumb bg_breadcrumb">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
                        <li class="breadcrumb-item active" aria-current="page">DISTRIBUIDORES</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

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
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">INSA SALUD ANIMAL</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <a href="#" class="txt_general">Temascaltepec #17 Col. Moctezuma Xalapa, Ver. C.P. 91096</a>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="#" class="txt_general">228-154-9013</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:insasaludanimal@gmail.com" class="txt_general">insasaludanimal@gmail.com</a>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">GUADALUPE HINOJOS MEDRANO</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <a href="#" class="txt_general">11 1/2 Nte. #22 Col. Del Empleado Delicias, Chih. C.P. 33059</a>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="#" class="txt_general">639-172-6592</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:insasaludanimal@gmail.com" class="txt_general">gpehinojos@prodigy.net.mx</a>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">COMERCIALIZADORA SG</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <a href="#" class="txt_general">Colonial Santiago #329 Col. San Miguel Guadalupe, N.L. C.P. 67114</a>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="#" class="txt_general">812-150-5691</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:insasaludanimal@gmail.com" class="txt_general">comercializadora-sg@hotmail.com</a>
                        </div>
                    </article>
                </div>
            </div>
            <!-- 02 FILA -->
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">LEONARDO GARCÍA VILLARREAL</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <a href="#" class="txt_general">Rio Cimarrón #108 Col. Privada de Santa Rosa Apodaca, N.L. C.P. 66610</a>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="#" class="txt_general">811-545-2832</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:insasaludanimal@gmail.com" class="txt_general">legaro78@hotmail.com</a>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">AGROVETERINARIA MAYTE S.A. DE C.V.</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <a href="#" class="txt_general">Santa Rita #155 Col. Nueva Sta, Maria Tlaquepaque, Jal. C.P. 45530</a>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="#" class="txt_general">331-478-1844</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:insasaludanimal@gmail.com" class="txt_general">comercializadoramayte@hotmail.com</a>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">INSUMOS AGROVETERINARIOS Y MASCOTAS</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <a href="#" class="txt_general">115 Ote. #1422-2 Col. Los Heroes de Puebla Pebla, Pue. C.P. 72590</a>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="#" class="txt_general">771-219-9591</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:insasaludanimal@gmail.com" class="txt_general">reyesvsc@hotmail.com</a>
                            <a href="mailto:insasaludanimal@gmail.com" class="txt_general">cepales@hotmail.com</a>
                        </div>
                    </article>
                </div>
            </div>
            <!-- 03 FILA -->
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">GUIZA DISTRIBUIDORA S.A. DE C.V.</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <a href="#" class="txt_general">Anacleto González Flores #1174-A Col. La Loma Tepatitlan, Jal. C.P. 47645</a>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="#" class="txt_general">378-116-6244</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:insasaludanimal@gmail.com" class="txt_general">guiza@prodigy.net.mx</a>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">LUIS FERNANDO MARÍN ESTRADA</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <a href="#" class="txt_general">Rayon #1445 Col. Centro Cuauhtémoc, Chih. C.P. 31500</a>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="#" class="txt_general">625-106-9482</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:insasaludanimal@gmail.com" class="txt_general">nutrimar.2018@gmail.com</a>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">INFARVET S.A. DE C.V.</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <a href="#" class="txt_general">Misioneros #253 Col. Misión de San Carlos Querétaro, Qro. C.P. 76903</a>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="#" class="txt_general">442-110-4027</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:insasaludanimal@gmail.com" class="txt_general">administracion@grupoinfarvet.com</a>
                            <a href="mailto:insasaludanimal@gmail.com" class="txt_general">j.cano@grupoinfarvet.com</a>
                        </div>
                    </article>
                </div>
            </div>
            <!-- 04 FILA -->
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">ISA DE AGUASCALIENTES S.A. DE C.V.</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <a href="#" class="txt_general">Acacia #524 Col. Las Arboledas Aguascalientes, Ags. C.P. 20020</a>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="#" class="txt_general">449-254-5056</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:insasaludanimal@gmail.com" class="txt_general">isaveterinaria@outlook.com</a>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">ALMA DELIA PEÑA MARTÍNEZ</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <a href="#" class="txt_general">5 de Mayo #203 Col. Centro Tlalixcoyan, Ver. C.P 95222</a>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="#" class="txt_general">235-103-0318</a>
                            <a href="#" class="txt_general">285-103-3108</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:insasaludanimal@gmail.com" class="txt_general">almadelia1976@hotmail.com</a>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">JORGE ANTONIO MENDOZA TOLEDO</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <a href="#" class="txt_general">5a Pte. Norte #83 Col. Santo Domingo Cintalapa de Figueroa , Chis. C.P. 30400</a>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="#" class="txt_general">971-142-3122</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:insasaludanimal@gmail.com" class="txt_general">jorgetol3@hotmail.com</a>
                        </div>
                    </article>
                </div>
            </div>
            <!-- 05 FILA -->
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">ROMOVET S. DE R.L. DE C.V.</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <a href="#" class="txt_general">Del Palmar #49 Col. Valle de los Sauces Morelia, Mich. C.P. 58190</a>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="#" class="txt_general">443-160-4471</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:insasaludanimal@gmail.com" class="txt_general">romovet_morelia@hotmail.com</a>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">DISTRIBUIDORA EQUINA SMC S.A. de C.V.</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <a href="#" class="txt_general">Cajeme #1118 Col. Electricista Ciudad Obregon, Son. C.P. 85040</a>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="#" class="txt_general">644-407-0031</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:insasaludanimal@gmail.com" class="txt_general">jlconcilion@hotmail.com</a>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">COMERCIALIZADORA PECUARIA S.A DE C.V.</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <a href="#" class="txt_general">Calz. de las Águilas #925 Col Ampliacion las Águilas Álvaro Obregon, Cdmx. C.P. 01759</a>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="#" class="txt_general">554-069-689</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:insasaludanimal@gmail.com" class="txt_general">samuel@comercializadorapecuaria.com</a>
                        </div>
                    </article>
                </div>
            </div>
            <!-- 06 FILA -->
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">RAÚL PEREZ LÓPEZ</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <a href="#" class="txt_general">Hidalgo s/n Col. Lealtad Soconusco, Ver. C.P. 96170</a>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="#" class="txt_general">924-147-3898</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:insasaludanimal@gmail.com" class="txt_general">proveedoravet@outlook.com</a>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <article class="card_product">
                        <div class="cont_card_icon">
                            <img src="Public/images/svg/icon_mediker_distribuidores.svg" alt="Mediker icono de una vaca lechera">
                            <h3 class="tit_cuarto">BALMA S.A.</h3>
                            <h5 class="tit_tercero"><?php echo $direccion ?></h5>
                            <a href="#" class="txt_general">Calzada Atanasio TZUL 21-00 OFIBODEGA 516 Col Zona 12 Empresarial El Cortijo II Guatemala, Guatemala</a>
                            <h5 class="tit_tercero"><?php echo $telefono ?></h5>
                            <a href="#" class="txt_general">Tel. +50 224-62-6983 ó +50 224-62-6986</a>
                            <h5 class="tit_tercero"><?php echo $correo ?></h5>
                            <a href="mailto:insasaludanimal@gmail.com" class="txt_general">rony.matzer@proveavicola.com</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php include_once "Public/includes/footer.php"; ?>
    <script type="text/javascript" src="Public/js/pagination.js"></script>

</body>
</html>