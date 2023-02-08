
    <?php
        $color_white = "si";
        $producto = "Dexaplex MDKR";
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
                    <p>Registro: Q-0694-042</p>
                    <br>
 
                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>
                        Dexaplex es una solución inyectable de dexametasona, potente antiflamatorio esteroidal que no interviene en el balance electrolítico ni con el balance hidrolítico del animal.<br>
                        El producto posee propiedades antialergénicas y gluconeogénicas.<br>
                        Dexaplex esta indicado en procesos inflamatorios, hipoglucemia, alergias, eczemas y dermatitis.<br>
                        Se indica en choque quirúrgico y septicémico.<br>
                        Antiflamatorio de elección para articulaciones y ligamentos.
                    </p>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 1 ml contiene:<br>
                        Dexametasona 21 fosfato sódico 2mg.<br>
                        Vehículo c.b.p.: 1 ml.
                    </p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>
                        Bovinos: .06 a 2mg/kg de peso<br>
                        Equinos: .05 a .2 mg/kg de peso<br>
                        Porcinos: 1 a 10 mg/kg de peso<br>
                        Ovinos y caprinos: .75 mg/kg de peso<br>
                        Perros y gatos: 0.125 mg/kg de peso
                    </p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>
                        No enviar al sacrificio a los animales tratados hasta 30 días posteriores a la ultima aplicación.<br>
                        No destinar para consumo humano la leche de los animales tratados hasta 3 días posteriores a la última aplicación.<br>
                        Prohibido el uso de este producto en equinos destinados al consumo humano.<br>
                        No se recomienda su aplicación en animales inmunocomprometidos. 
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
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/gallina.svg" alt="">
                        </div> -->
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
                    <img class="img-fluid" src="Public/images/dexaplex-mdkr_11.jpg" alt="">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/Dexaplex.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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