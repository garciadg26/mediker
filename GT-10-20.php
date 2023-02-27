
    <?php
        $color_white = "si";
        $producto = "GT 10-20";
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
                    <p>Registro: Q-0694-095</p>
                    <br>

                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>Combinación antibiótica de amplio espectro para el control y tratamiento de enfermedades infecciosas de los animales, ocasionadas por bacterias gram (+) y gram (-), susceptibles a los componentes de la fórmula.</p>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>
                   <p>
                        Cada 1 ml contiene:
                        Tilosina tartrato: 200 mg.
                        Gentamicina sulfato: 100 mg.
                        Vehículo c.b.p.: 1 ml.
                   </p>
                    
                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>Útil en el tratamiento de infecciones causadas por microorganismos sensibles a la tilosina-gentamicina: Infecciones respiratorias, digestivas, de glándula mamaria, tracto urogenital, artritis, cutáneas y sistémicas.</p>
                    
                    <h6 class="tit_tercero">Vía de Administración:</h6>
                    <p>
                        Aves: Oral en agua de bebida.
                        Otras especies: Intramuscular profunda.
                    </p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>
                        Aves: 2.5 ml por lt de agua de bebida por 3 a 5 días.
                        Otras especies: 1 ml por cada 20 kg de peso por 3 a 5 días.
                    </p>
                    
                    <h6 class="tit_tercero">Presentación:</h6>
                    <p>Frasco de 500 ml.</p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>No se administre a hembras lactantes. Producto para uso veterinario exclusivamente. Consulte al Médico Veterinario. Su venta requiere receta médica. Mantener fuera del alcance de los niños y animales domésticos. </p>
                    
                    <h6 class="tit_tercero">Especies:</h6>
                    <div class="con_especies">
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/gato.svg" alt="">
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/perro.svg" alt="">
                        </div>-->
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
                    <img class="img-fluid" src="Public/images/GT-10-2011.jpg" alt="">
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