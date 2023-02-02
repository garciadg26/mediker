
    <?php
        $color_white = "si";
        $producto = "Agua Estéril MDKR";
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
                    <p>Registro: Q-0694-026 / Agua Estéril Libre de Pirógenos.</p>
                    <br>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>

                    <p>Cada 1000 ml contiene:
                    Agua estéril calidad inyectable 1000 ml</p>

                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>Indicada como diluyente de medicamentos y para irrigación de áreas quirúrgicas, heridas y limpieza de material e instrumental quirúrgico.</p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>Como reconstituyente o dilución para el medicamento que se pretenda utilizar y de las indicaciones del Médico Veterinario. Para irrigación, es a través de la aplicación directa del agua sobre los tejidos y realizando aspiraciones suaves. No existe una dosis específica y puede variar de acuerdo a la indicación terapéutica, por lo tanto se utiliza de acuerdo a las necesidades de cada caso en particular.</p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>La administración directa por vía intravenosa, produce hemólisis.</p>
                    <p>Precauciones especiales para la destrucción de los medicamentos no utilizados o envases vacíos:</p>
                    <p>Todo medicamento veterinario no utilizado o los residuos derivados del mismo, deberán eliminarse de conformidad con las normativas locales. </p>
                    
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
                    <img class="img-fluid" src="Public/images/agua-esteril-mdkr.jpg" alt="">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/Agua-Esteril-MDKR.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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