
    <?php
        $color_white = "si";
        $producto = "Isosol MDKR";
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
                    <p>Registro: Q-0694-032
                    Suero Fisiológico.</p>
                    <br>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>Cada 1 ml contiene<br>
                    Cloruro de Sodio 0.9 g<br>
                    Vehículo c.b.p. 1 ml</p>

                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>Indicado en la rehidratación orgánica para favorecer el aumento de la presión sanguínea y hematopoyesis, así como diluyente de antibióticos, algunas vitaminas y hormonas y todos aquellos productos que así lo requieran.</p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>500 a 3000 ml en bovinos y equinos.<br>
                    2 ml por kg de peso corporal en borregos, cerdos, perros y gatos.</p>
                    
                    <h6 class="tit_tercero">Vía de Administración:</h6>
                    <p>Endovenosa, intramuscular, subcutánea, intraperitoneal y rectal.</p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>No se use esta solución si no es transparente y exenta de sedimento. Almacenar en un lugar fresco, seco y protegido de la luz. Precauciones especiales para la destrucción de los medicamentos no utilizados o envases vacíos: Todo medicamento veterinario no utilizado o los residuos derivados del mismo deberán eliminarse de conformidad con las normativas locales.</p>
                    
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
                    <img class="img-fluid" src="Public/images/isosol-mdkr.jpg" alt="">
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