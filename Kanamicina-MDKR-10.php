
    <?php
        $color_white = "si";
        $producto = "Kanamicina MDKR 10%";
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
                    <p>Registro: Q-0694-062</p>
                    <br>
                    

                    

 
                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>Indicado en el tratamiento de infecciones provocadas por gérmenes sensibles a la Kanamicina: Staphilococcus aureus, Proteus, Escherechia Coli, Shigellas, Mycobacterium, etc. Eficaz en el tratamiento de la mastitis, septicemias, nefritis, neumonías. Enteritis, actinobacilosis, etc.</p>

                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Kanamicina (como sulfato): 10g. <br>
                        Vehículo c.b.p.: 100 ml.
                    </p>

                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>
                        Para todas las especies: 1 ml/15 kg de peso vivo. <br>
                        Esta dosis pueden repetirse cada 12 o 24 horas según criterio profesional y gravedad de la afección.
                    </p>

                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>
                        No administre este producto 30 días antes del sacrificio de animales destinados al consumo humano. <br>
                        No utilizar para consumo humano la leche de los animales tratados hasta 4 días después de la última aplicación. <br>
                        Almacenar en un lugar fresco y seco, protegido de la luz. 
                    </p>






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
                        <div class="item_especies">
                            <img src="Public/images/svg/borrego.svg" alt="">
                        </div>
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/gallina.svg" alt="">
                        </div> -->
                        <div class="item_especies">
                            <img src="Public/images/svg/cerdito.svg" alt="">
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/vaca.svg" alt="">
                        </div>
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/caballo.svg" alt="">
                        </div> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="Public/images/kanamicina-mdkr-10.jpg" alt="Mediker kanamicina mdkr 10">
                    <div class="row">
                        <div class="col-md-6">
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