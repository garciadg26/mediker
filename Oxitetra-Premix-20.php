
    <?php
        $color_white = "si";
        $producto = "Oxitetra 20% Premix";
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
                    <p>Registro: Q-0694-070</p>
                    <br>
                    

                
                    

                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>OXITETRA 20% PREMIX contiene un antibiótico bacteriostático de amplio espectro del grupo de las tetraciclinas, cuya actividad afecta bacterias grampositivas y gramnegativas, micoplasmas, ricketsias, espiroquetas y actinomicetos. Debido a su eficiente absorción en el tracto intestinal, está diseñado especialmente para ser administrado en el alimento y generar óptimos niveles en plasma y tejidos.</p>

                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 100 g contiene: <br>
                        Oxitetraciclina HCI 20 g <br>
                        Vehículo c.b.p.: 100 g.
                    </p>

                    <h6 class="tit_tercero">Indicaciones de Uso:</h6>
                    <p>OXITETRA 20% PREMIX es recomendado en el tratamiento terapéutico de enfermedades respiratorias y digestivas cuyos agentes etiológicos sean sensibles a la fórmula como en coriza infecciosa, cólera aviar y micoplasmosis, en cerdos como erisipela porcina, infecciones respiratorias, pasteurelosis, neumococos, clostridios, actinobacilos, además de Bordella spp, Escherichia coli, Klebsiella pneumoniae, Haemophilus pertussis, Mycoplasma spp, Lawsonia intracelularis.</p>

                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>
                        Aves: De 500 g a 1 Kg por tonelada de alimento, lo que representa 10 – 20 mg/kg de peso, dependiendo del consumo. <br>
                        Porcinos: De 500 g a 1 Kg por tonelada de alimento, lo que representa 10 – 20 mg/kg de peso, dependiendo del consumo. <br>
                        Bovinos: De 1 kg a 2 Kg por tonelada de alimento, lo que representa 10 – 20 mg/kg de peso, dependiendo del consumo.
                    </p>

                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>No administre este producto 30 días antes del sacrificio de animales destinados al consumo humano. No se administre en conjunto con sales de calcio o metales pesados. No consumir los huevos de las aves tratadas con este producto, hasta 24 horas después del tratamiento. </p>
                                        
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
                    <img class="img-fluid" src="Public/images/oxitetra-20-premix.jpg" alt="">
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