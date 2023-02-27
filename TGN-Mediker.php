
    <?php
        $color_white = "si";
        $producto = "TGN Mediker";
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
                    <br>

                    <h6 class="tit_tercerio">Descripción:</h6>
                    <p>Combinación de antibióticos de amplio espectro, útil en el control y tratamiento de enfermedades ocasionadas por patógenos susceptibles al efecto quimioterápico de la fórmula, que afectan a bovinos y porcinos.</p>
                    
                    <h6 class="tit_tercerio">Fórmula:</h6>
                    <p>
                        Cada 100 g contiene:
                        Tilosina tartrato: 10.0%
                        Gentamicina sulfato: 1.2 %
                        Neomicina sulfato: 1.2 %.
                    </p>
                    
                    <h6 class="tit_tercerio">Indicaciones:</h6>
                    <p>Indicada para infecciones ocasionadas por bacterias gram (-) y gram (+) que afecten a tejidos de vías digestivas (enteritis neurótica, salmonelosis, diarreas por infecciones combinadas, etc.), respiratorias (rinitis, faringitis, bronquitis, neumonía, etc.), de tracto reproductivo (metritis), y glándula mamaria (mastitis, síndrome MMA).</p>
                    
                    <h6 class="tit_tercero">Vía de Administración:</h6>
                    <p>Intramuscular o subcutánea.</p>
                    
                    <h6 class="tit_tercerio">Dosis:</h6>
                    <p>Bovinos y cerdos: 1 ml por cada 10 kg de peso.</p>
                    
                    <h6 class="tit_tercerio">Presentación:</h6>
                   <p> Frasco de 250 ml.</p>
                    
                    <h6 class="tit_tercerio">Advertencias:</h6>
                    <p>Producto para uso veterinario exclusivamente. Consulte al Médico Veterinario. Su venta requiere receta médica. Mantener fuera del alcance de los niños y animales domésticos.</p>
                    
                    <h6 class="tit_tercerio">Período de Retiro:</h6>
                    <p>
                        Carne: 28 días<br>
                        Leche: 5 días. 
                    </p>
                    
                    <h6 class="tit_tercero">Especies:</h6>
                    <div class="con_especies">
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
                        </div>-->
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
                    <img class="img-fluid" src="Public/images/TGN-Mediker1.jpg" alt="">
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