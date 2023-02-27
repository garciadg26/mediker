
    <?php
        $color_white = "si";
        $producto = "Prostaplex D";
        $categoria = $_GET['cat'];
        $categoria =str_replace('-', ' ', $categoria);
        $categoria_url = $_GET['cat'];
        $title = "$producto | Mediker - Comercializadora Pecuaria de México";
    ?>
    <?php include_once "Public/includes/header.php" ?>

</head>
<body>

    <?php include_once "Public/includes/nav.php"; ?>

    <!-- ESPACIO MENU FIXED -->
    <div class="space_fixed"></div>

    <!-- BREADCRUMB -->
    <section id="breadcrumb" class="section_breadcrumb">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <?php include "Public/includes/breadcrumb.php"; ?>
                </nav>
            </div>
        </div>
    </section>

    <!-- INFORMACIÓN -->
    <section id="info_producto" class="info_producto">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col_left_pto_descrp">
                    <h1 class="tit_secundario"><?php echo $producto; ?></h1>
                    <p>Registro: Q-0694-022</p>
                    <br>
 
                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>El principio activo de esta formulación es un análogo sintético de las prostaglandinas, estructuralmente relacionado con la PG2ALFA endógena producida fisiológicamente por la hembra reproductora. Es óptimamente dextrógira, por lo tanto, existe una afinidad entre los receptores del aparato reproductor y aquellas prostaglandinas con isomería dextrógira.</p>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 100 ml contiene:<br>
                        D-Clprostenol. 75 mcg.<br>
                        Vehículo c.b.p.: 100 ml.
                    </p>
                    
                    <h6 class="tit_tercero">Receptores:</h6>
                    <p>Ovario y útero</p>
                    
                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>
                        Inducción al estro.<br>
                        Sincronización de estro.<br>
                        Inducción al parto.<br>
                        Patología del útero: (Endometritis, Piométra, Retención de placenta, Quistes)<br>
                        Interrupción de la gestación. Expulsión de fetos momificados.
                    </p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>Conservar en lugar fresco inferior a 25°C. No administrar en hembras gestantes, amenos que desee inducir el parto o el aborto. Contraindicado en animales con problemas respiratorios agudos o crónicos.</p>
                    
                    <h6 class="tit_tercero">Precauciones:</h6>
                    <p>Inyectar de forma aséptica. Mujeres embarazadas, asmáticos y sujetos con enfermedades bronquiales o respiratorias, manipular con cuidado este producto. Este producto es fácilmente absorbido por la piel, puede causar aborto y/o broncoespasmo. No tiene periodo de retiro. </p>
                    
                    <h6 class="tit_tercero">Especies:</h6>
                    <div class="con_especies">
                        <div class="item_especies">
                            <img src="Public/images/svg/gato.svg" alt="">
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/perro.svg" alt="">
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/cabra.svg" alt="">
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/borrego.svg" alt="">
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/gallina.svg" alt="">
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/cerdito.svg" alt="">
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/vaca.svg" alt="">
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/caballo.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="Public/images/prostaplex-d-th.jpg" alt="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content_btn">
                                <button type="button" class="btn_gen btn_principal" data-toggle="modal" data-target="#exampleModal">Descargar ficha técnica</button>
                            </div>
                            <!-- MODAL -->
                            <?php include_once "Public/includes/modalDownload.php"; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php include_once "Public/includes/footer.php"; ?>
</body>
</html>