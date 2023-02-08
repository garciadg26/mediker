
    <?php
        $color_white = "si";
        $producto = "Inversol Soluble 1%";
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
                    <p>Registro: Q-0694-013</p>
                    <br>
 

                    
                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>INVERSOL 1% está indicado para el control de los principales parásitos internos y externos de las gallináceas. Los parásitos internos sobre los que actúa pertenecen a los géneros Heterakis, Caplillaria, y Áscaris. En el caso de parásitos externos actúa sobre ácaros (Ornithonissus Sylvarium y Dermanissus gallinarum), garrapatas del género Argas, chinches de las aves (Cimex lectularius) y a todas las especies de piojos picadores.</p>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 1 ml contienen:
                        Ivermectina 10 mg
                        Vehículo c.b.p. 1 ml
                    </p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>De 40 a 60 ml por cada 1000 kg de peso vivo a tratar (equivalente de 400 a 600 mcg por kilo de peso corporal), durante dos días consecutivos. En casos preventivos es suficiente con dos días de tratamiento, dos semanas después, también por dos días a la dosis recomendada.</>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>No utilizar este producto 7 días antes del sacrificio de los animales destinados al consumo humano. No se requiere tiempo de retiro para el consumo del huevo de las aves tratadas. Los envases vacíos no deben arrojarse a los mantos acuíferos (lagos, ríos). Almacenar en un lugar fresco, seco y protegido de la luz. </p>
                    
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
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/cerdito.svg" alt="">
                        </div> -->
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/vaca.svg" alt="">
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/caballo.svg" alt="">
                        </div> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="Public/images/inversol-1-1.jpg" alt="">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/Desparasitante-Soluble-Inversol-soluble-1-1.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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