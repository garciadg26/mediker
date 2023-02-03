
    <?php
        $color_white = "si";
        $producto = "Florfeniplex D 30%";
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
                    <p>Registro: Q-0694-011</p>
                    <br>
                    

                    

 
                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>
                        Tratamiento y control de enfermedades causadas por bacterias susceptibles al florfenicol que cursan con procesos inflamatorios. <br>
                        Antibiótico bactericida de amplio espectro combinado con diclofenaco para controlar procesos infecciosos con dolor e inflamación. <br>
                        De primera elección para el tratamiento de infecciones respiratorias y pododermatitis (gabarro).
                    </p>

                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 1 ml contiene: <br>
                        Florfenicol: 300 mg. <br>
                        Diclofenaco: 4 mg. <br>
                        Vehículo c.b.p.: 1 ml.
                    </p>

                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>
                        Porcinos: 1 ml/30 Kg de peso, (10 mg/Kg), cada 24 horas por 3 aplicaciones. <br>
                        Bovinos: 1 ml/15 Kg de peso (20 mg/kg), se recomienda administrar una segunda dosis a las 48 horas. La duración del tratamiento, es a criterio del Médico Veterinario. <br>
                        No administre más de 10-25 ml por sitio de aplicación, acorde al peso o tamaño del animal.
                    </p>

                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>
                        Período de retiro: No administrar este producto 28 días antes del sacrificio de los animales destinados al consumo humano. <br>
                        No se emplee en bovinos en producción láctea. <br>
                        Almacenar en un lugar fresco, seco y protegido de la luz. 
                    </p>
                




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
                        </div>
                        <div class="item_especies">
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
                    <img class="img-fluid" src="Public/images/florfeniplex-d-30.jpg" alt="Mediker florfeniplex d 30">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/Antibiotico-FlorfeniplexD30.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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