
    <?php
        $color_white = "si";
        $producto = "Neumoplex Plus PX";
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
                    <p>Registro: Q-0694-066</p>
                    <br>

 
                    

 
                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>NEUMOPLEX PLUS PX es una premezcla diseñada para ser administrada a través del alimento en los animales. NEUMOPLEX PLUS PX está elaborada a base de dos antimicrobianos de amplio espectro (Sulfacloropiridazina y Trimetoprim) indicado para el tratamiento de infecciones bacterianas ocasionadas por microorganismos susceptibles a la fórmula, en aves, cerdos y bovinos.</p>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>Cada 100 g contiene:<br>
                    Sulfacloropiridazina Sódica 10 g<br>
                    Trimetoprim 2 g<br>
                    Vehículo c.b.p.: 100 g.</p>
                    
                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>NEUMOPLEX PLUS PX está especialmente formulado para prevenir y tratar las siguientes enfermedades: Aves: Aerosaculitis y E.R.C. complicada con E. coli, salpingitis, onfalitis, tifus aviar, salmonelosis, pulorosis, coriza, cólera aviar, septicemia por enterobacterias.<br>
                    Cerdos: Colibacilosis, enterotoxemia colibacilar, neumonía, rinitis atrófica y complejo M.M.A.<br>
                    Bovinos: Enteritis bacterianas, disentería colibacilar, bronconeumonía bacteriana, infecciones del ombligo, gabarro, entre otras.</p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>Aves: 1 a 3 kgs. Por tonelada de alimento.
                    Cerdos y Bovinos: 4-11 kilogramos por tonelada de alimento.</p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>En aves y cerdos no proporcionar el producto 4 días previos al sacrificio de los animales destinados al consumo humano. En bovinos para consumo humano no administrar este producto 7 días previos al sacrificio. Manténgase este producto en un lugar fresco y seco protegido de la luz solar directa.  </p>
                    
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
                        </div> -->
                        <div class="item_especies">
                            <img src="Public/images/svg/gallina.svg" alt="">
                        </div>
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
                    <img class="img-fluid" src="Public/images/neumoplex-plus-px.jpg" alt="">
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