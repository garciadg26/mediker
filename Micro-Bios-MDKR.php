
    <?php
        $color_white = "si";
        $producto = "Micro-Bios MDKR";
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

                    <h6 class="tit_titulo">Descripción:</h6>
                    <p>
                        Es un desinfectante mixto, soluble en agua, formulado con base a la combinación de cresoles, formaldehido, isopropanol y cuaternario de amonio, que ofrece un amplio efecto bactericida, viricida, fungicida y prolongada actividad residual.<br>
                        Está indicado para desinfectar superficies como pisos y paredes de bodegas, corrales, mesas de trabajo de material no corrosible, superficies exteriores de vehículos, calzado de hule, vados y tapetes sanitarios. Desinfección de casetas y áreas donde exista materia orgánica.
                    </p>
                    
                    <h6 class="tit_titulo">Fórmula:</h6>
                    <p>
                        Cada 1000 ml contiene:<br>
                        Formalina 560 ml<br>
                        Isopropanol 120 ml<br>
                        Cresoles 100 g<br>
                        Cloruro de Benzalconio 35 g<br>
                        Vehículo c.b.p.: 1000 ml.
                    </p>
                    
                    <h6 class="tit_titulo">Dilución:</h6>
                    <p>
                        Desinfección normal: 1 L/200 L de agua (1 ml/200 ml de agua).<br>
                        Desinfección enérgica: 1 L/100 L de agua (1 ml/100 ml de agua).<br>
                        Activo en presencia de materia orgánica. Aplicar al remover camas y en vados sanitarios. No en presencia de animales.
                    </p>
                        
                    <h6 class="tit_titulo">Equipo de protección personal:</h6>
                    <p>Utilice guantes y gafas de protección al manipular el producto. El producto tiene aroma característico para evidenciar su presencia en zonas de aplicación, el cual desaparece posteriormente. La protección respiratoria sólo puede considerarse recomendable.</p>
                    
                    <h6 class="tit_titulo">Advertencias:</h6>
                    <p>En caso de ingesta o algún contacto con ojos o piel, obtenga atención medica inmediata. </p>

                    <!-- <h6 class="tit_tercero">Especies:</h6>
                    <div class="con_especies"> -->
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
                -->
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="Public/images/micro-bios-mdkr-1.jpg" alt="">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/desinfectante-Micro-Bios.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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