
    <?php
        $color_white = "si";
        $producto = "Tilosina 200 MDKR";
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
                    <p>Registro: Q-0694-033</p>
                    <br>
                    

                                        
                    

 
                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>
                        Tilosina 200 MDKR: Mezcla de macrólidos antimicrobianos producidos por ciertas cepas de Streptomyces fradiae. <br>
                        Actividad antimicrobiana: Bacterias gram positivas, Mycobacterium avium, streptoccocus del grupo C., S. agalactiae, S. dysgalactiae, S. uberis. <br>
                        Bacterias gram negativas: B. bronchiseptica, E. coli, Leptospira sp, M. bovis, P. haemolytica, P. multocida, Proteus sp, P. aeruginosa, Salmonella sp. Micoplasmas: M. agalactiae, M. capri. <br>
                        Tilosina 200 MDKR se recomienda como agente bacteriostático para combatir enfermedades respiratorias crónicas y otras infecciones causadas por Mycoplasma, bacterias gram positivas y algunas gram negativas. En bovinos, ovinos y caprinos, combate enfermedades como neumonía, difteria, metritis, en cerdos ataca la erisipela, artritis causada por micoplasmas, salmonelosis y casos de enteritis. <br>
                        En aves combate casos de sinusitis, sinovitis y micoplasmosis.
                    </p>

                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 1 ml contiene: <br>
                        Tratarto de Tilosina: 200mg. <br>
                        Vehículo c.b.p.: 1 ml.
                    </p>

                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>
                        Porcinos: 0.5 - 2.5 ml/50 kg de peso (equivalente a 2 - 10 mg/kg de peso) cada 24 horas durante 3 días. <br>
                        Bovinos: 1 - 2.5 ml/50 kg de peso (equivalente a 10 mg/kg de peso) cada 12 horas durante 5 días. <br>
                        Ovinos y caprinos: 1 ml/20 kg de peso (equivalente a 10 mg/kg de peso) cada 24 horas durante 5 días.
                    </p>

                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>No deberá administrarse este producto por lo menos 21 días antes del sacrificio de los animales destinados para consumo humano. La leche de las vacas tratadas no deberá destinarse a consumo humano hasta 5 días despues del último tratamiento. </p>



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
                    <img class="img-fluid" src="Public/images/tilosina-200-mdkr.jpg" alt="Mediker tilosina 200 mdkr">
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