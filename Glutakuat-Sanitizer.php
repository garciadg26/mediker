
    <?php
        $color_white = "si";
        $producto = "Glutakuat Sanitizer MDKR";
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
                    <p>Registro: FNQ-096</p>
                    <br>

 
                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>Glutakuat Sanitizer MDKR es un poderoso liquido desinfectante concentrado a base de Glutaraldehido y Cuaternarios de amonio de la 4ta y 5ta generación, cuya mezcla provee un amplio espectro contra las bacterias gram positivas, gram negativas, virus lipofilicos, virus hidrofilicos, virus de influenza aviar (H5 y H7), Newcastle, Influenza AH1N1, parvovirus, micoplasmas, hongos y más.</p>

                    <h6 class="tit_tercero">Uso en instalaciones pecuarias tales como:</h6>
                    <p>
                        Casetas avícolas, criadoras, comederos, bebederos y cortinas.<br>
                        Incubadoras, huevo, nacedoras, charolas y todas las superficies generales de la instalación.<br>
                        Granjas porcinas, maternidades, jaulas, drenajes, muros y pasillos.<br>
                        Establos, salas de ordeña, procesadoras de lácteos.<br>
                        Rastros, corrales de recepción, áreas de matanza y jaulas de transporte.<br>
                        Vehículos de todo tipo en su exterior e interior en zonas de carga, remolques, andenes.<br>
                        Tapetes, vados y arcos sanitarios de casetas, granjas y todo tipo de instalaciones pecuarias.
                    </p>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 100 ml contienen:<br>
                        Glutaraldehido 40 %<br>
                        Cuaternarios de amonio 6 %<br>
                        Vehículo c.b.p. 100 ml
                    </p>
                    
                    <h6 class="tit_tercero">Indicaciones y Dilución:</h6>
                    <p>
                        Antes de aplicar Glutakuat Sanitizer MDKR asegúrese de que las superficies estén lo más libre posible de cualquier carga residual tal como sólido, polvo, materia orgánica.<br>
                        Diluya 1 litro de Glutakuat Sanitizer MDKR por cada 1000 litros de agua para desinfección general ó 1 litro en 500 litros de agua como solución de choque o enérgica. Por aspersión utilice directamente el producto sobre las superficie a tratar. Útil en arco sanitario para lavar equipos. 
                    </p>

                    <!-- <h6 class="tit_tercero">Especies:</h6>
                    <div class="con_especies"> -->
                        <!-- <div class="item_especies">
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
                -->
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="Public/images/glutakuat-sanitizer-mdkr_.jpg" alt="">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/Glutakuat-sanitizer.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
                            </div>
                        </div>
                        <div class="col-md-6 btn_center">
                            <div class="content_btn">
                                <a href="contacto.php" class="btn_gen btn_secundario">Contacto</a>
                            </div>
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