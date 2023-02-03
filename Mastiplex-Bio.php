
    <?php
        $color_white = "si";
        $producto = "Mastiplex Bio";
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
                    <p>Registro: Q-0694-</p>
                    <br>
                    



                    

 

                    <p>Infusión intramamaria 100% Natural.</p>

                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>
                        Es una combinación farmacéutica a base de extractos de plantas, efectiva para el tratamiento de mastitis con amplio espectro antimicrobiano y propiedades antiinflamatorias y antiproliferativas sin causar efectos indeseables en el animal y además no altera la calidad de la leche por lo que ofrece CERO horas de tiempo de retiro. <br>
                        La fórmula de Mastiplex Bio, esta optimizada con un excipiente que incrementa la eficacia de sus ingredientes.
                    </p>

                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 8 g contiene: <br>
                        Extracto Aloe Vera 960 mg <br>
                        Extracto Maguey 20 mg <br>
                        Extracto Árbol de Te 12 mg <br>
                        Extracto Consuelda 12 mg <br>
                        Extracto Limón 12 mg <br>
                        Vehículo c.b.p.: 8 g.
                    </p>

                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>Aplicar un tubo de Mastiplex Bio cada 12 horas en el cuarto afectado después de la ordeña, durante 3 días consecutivos.</p>

                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>Consérvese en un lugar fresco, seco y protegido de la luz. </p>



                    
                    <h6 class="tit_tercero">Especies:</h6>
                    <div class="con_especies">
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/gato.svg" alt="">
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/perro.svg" alt="">
                        </div> -->
                        <div class="item_especies">
                            <img src="Public/images/svg/cabra.svg" alt="">
                        </div>
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/borrego.svg" alt="">
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/gallina.svg" alt="">
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/cerdito.svg" alt="">
                        </div> -->
                        <div class="item_especies">
                            <img src="Public/images/svg/vaca.svg" alt="">
                        </div>
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/caballo.svg" alt="">
                        </div> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="Public/images/mastiplex-bio-detalle.jpg" alt="">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/MASTIPLEX-BIO.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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