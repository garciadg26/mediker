
    <?php
        $color_white = "si";
        $producto = "Fosfoplex E 10%";
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
                    <p>Registro: Q-0694-012</p>
                    <br>
                    



                    

 
                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>
                        Antibiótico de amplio espectro que alcanza a las dosis indicadas, altos niveles terapéuticos. Su distribución en el organismo hace que este indicado en todas las afecciones espécificas e inespecíficas causadas por organismos sensibles a la fosfomicina o a la espiramicina. <br>
                        Bovinos: Mastitis, neumonías, bronconeumonías, metritis, gastroenteritis, queratoconjuntivitis. <br>
                        Cerdos: Síndrome MMA, neumonía enzoótica, rinitis atrófica, colibacilosis, disentería, diarreas inespecíficas.
                    </p>

                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 1 ml contiene: <br>
                        Fosfomicina sódica: 100 mg. <br>
                        Vehículo c.b.p.: 1 ml.
                    </p>

                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>
                        Bovinos (carne y leche): 0.2 ml/kg de peso (equivalente a 20 mg/kg de peso). <br>
                        Porcinos: 0.15 ml/kg de peso (equivalente a 15 mg/kg de peso). <br>
                        Aves (pollo de engorda y polla de reemplazo): 0.1 ml/kg de peso (equivalente a 10 mg/kg de peso).
                    </p>

                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>No destinar a consumo humano la carne de los animales tratados hasta 14 días después de la última aplicación. No destinar a la industria y consumo humano la leche de los animales tratados hasta 3 días después de la última aplicación. </p>



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
                    <img class="img-fluid" src="Public/images/fosfoplex-e-10.jpg" alt="Mediker fosfoplex e 10">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/Antimicrobiano-Fosfoplex-E10.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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