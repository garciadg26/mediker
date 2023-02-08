
    <?php
        $color_white = "si";
        $producto = "Oxitoplex";
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
                    <p>Registro: Q-0694-047</p>
                    <br>

                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>
                        Oxitocico sintético de utilidad como coadyuvante en casos de inercia uterina, para acelerar el parto normal en cerdas, perras y gatas; atonía uterina postparto, metritis, endometritis, piometra y retención placentaria, así como en casos de mastitis, ya que favorece el vaciado de la glándula, estimulando la bajada de leche y facilitando el paso de esta a los conductos excretores en vacas con retención láctea, haciendo más eficiente el ordeño y aumentando la rentabilidad del hato.<br>
                        Auxiliar en la terapia de agalactia de la cerda recién parida y para incrementar el número de lechones al parto.
                    </p>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 1 ml contiene:<br>
                        Oxitocina sintética 20 Ul<br>
                        Vehículo c.b.p.: 1 ml.
                    </p>
                    
                    <h6 class="tit_tercero">Usos y Dosis:</h6>
                    <p>
                        Vaca y Yegua: 5 a 7 ml equivalente a 100 a 140 Ul<br>
                        Oveja y cabra: 1 a 2 ml equivalente a 20 a 40 Ul<br>
                        Cerda: 3 a 5 ml equivalente a 60 a 100 Ul<br>
                        Perra: 0.5 a 1 ml equivalente a 10 a 20 Ul<br>
                        Gata: 0.3 a 0.5 ml equivalente a 6 a 10 Ul<br>
                        Coneja: 0.3 a 0.6 ml de 6 a 12 Ul<br>
                        Para incrementar el número de lechones al parto. Aplicar 1 ml por cerda 15 minutos antes de la inseminación o agregar 0.5 al semen antes de introducir la pipeta.
                    </p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>
                        No deberá utilizarse este producto 1 día antes del sacrificio de los animales destinados al consumo humano.<br>
                        No utilizar para el consumo humano ni industrializar la leche proveniente d elos animales tratados hasta 24 horas después del último tratamiento.<br>
                        No administrar este producto a equinos que se destinen al consumo humano.
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
                    <img class="img-fluid" src="Public/images/oxitoplex-th.jpg" alt="">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/Hormonales-Oxitoplex.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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