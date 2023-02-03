
    <?php
        $color_white = "si";
        $producto = "Oxitetra Premix 50%";
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
                    <p>Registro: Q-0694-038</p>
                    <br>
                    

                
                    <p>Antibiótico de amplio espectro en premezcla al 50% de Oxitetraciclina</p>

                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>OXITETRA 50% PREMIX contiene un antibiótico bacteriostático de amplio espectro del grupo de las tetraciclinas, cuya actividad incluye efectos bactericidas sobre grampositivas y gramnegativas, micoplasmas, rickettsias, espiroquetas y actinomicetos. Debido a su eficiente absorción en el tracto intestinal, está diseñada especialmente para ser administrado en el alimento y generar óptimos niveles en plasma y tejidos.</p>

                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 100 g contiene: <br>
                        Oxitetraciclina 50 g <br>
                        Vehículo c.b.p.: 100 g.
                    </p>

                    <h6 class="tit_tercero">Indicaciones de Uso:</h6>
                    <p>OXITETRA 50% PREMIX es recomendado en el tratamiento terapéutico de enfermedades respiratorias y digestivas cuyos agentes etiológicos sean sensibles a la fórmula como en coriza infecciosa, cólera aviar y micoplasmosis; y en cerdos como erisipela porcina, infecciones respiratorias, pasteurelosis neumónica, neumonía enzoótica, leptospirosis, estreptococos, neumococos, clostridios, actinobacilos, además de Bordetella spp., Escherichia coli, Kiebsiella pneumoniae, Haemophilus pertussis, Mycoplasma spp., Lawsonia intracelularis.</p>

                    <h6 class="tit_tercero">Dosis:</h6>
                    <p> Aves: 400 a 800 g/tonelada de alimento, lo que representa 20 – 40 mg/kg de peso. <br>
                        Porcinos: 400 a 800 g/tonelada de alimento, lo que representa 20 – 40 mg/kg de peso.
                    </p>

                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>
                        No administre este producto 30 días antes del sacrificio de animales destinados al consumo humano. <br>
                        No se administre en conjunto con sales de calcio o metales pesados. <br>
                        No consumir los huevos de las aves tratadas con este producto, hasta 24 horas después del tratamiento. 
                    </p>
                    
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
                    <img class="img-fluid" src="Public/images/oxitetra-50-premix.jpg" alt="">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/OXITETRA-PREMIX-50.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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