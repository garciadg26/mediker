
    <?php
        $color_white = "si";
        $producto = "Doxiplex 20% Soluble";
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
                    <p>Registro: Q-0694-035</p>
                    <br>
 
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>Cada 100 ml contiene:<br>
                    Doxiciclina (Hidroclorato) 20 g<br>
                    Vehículo c.b.p.: 100 ml</p>
                    
                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>Aves: Contra enfermedad respiratoria crónica y complicaciones bacterianas, colibacilosis.<br>
                    Cerdos: Síndrome mastitis metritis agalactia (M. M. A.).<br>
                    Bovinos: Abortos clamidiosídicos y otras complicaciones bacterianas susceptibles a la doxiciclina.<br>
                    Especies: Aves, cerdos y bovinos.</p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>Aves: 20 mg por kg de peso vivo.<br>
                    Terneros, cerdos y otras especies: 10 mg por kg de peso vivo.</p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>Manténgase fuera del alcance de los niños. No es de uso humano. Almacenar en lugar fresco seco y protegido de la luz. </p>
                    
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
                    <img class="img-fluid" src="Public/images/doxiplex-20-soluble.jpg" alt="">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/Premezcla-Neumoplex-Plus-PX.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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