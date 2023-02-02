
    <?php
        $color_white = "si";
        $producto = "Buffer 7.5% MDKR";
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
                    <p>Registro: Q-0694-074 / Solución para tratamiento de la acidodis metabólica.</p>
                    <br>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>Cada 1 ml contiene:<br>
                    Bicarbonato de Sodio 75 mg<br>
                    Vehículo c.b.p.: 1 ml</p>
                    
                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>Está indicado para el tratamiento de la acidosis metabólica en bovinos, equinos, borregos, cerdos y caninos dependiendo del factor causal (enfermedad renal severa, diabetes no controlada, circulación extracorpórea, insuficiencia circulatoria debida a shock o deshidratación severa, paro cardíaco, acidosis láctica primaria).</p>
                    <p>Es alcalinizante de la orina. Se emplea también en casos de diarrea severa en la que hay pérdidas significativas de bicarbonato.</p>
                    <p>Se indica asi mismo, para el tratamiento de la intoxicación por barbituricos, salicilatos o de alcohol metílico y en reacciones hemolíticas que requieren alcalinización de la orina para disminuir la nefrotoxicidad de los pigmentos de la sangre.</p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>2-5 mEq/kg de PV ó 2-5 ml/kg dependiendo de la severidad de la acidosis en un período de 4-8 horas y deacuerdo a las indicaciones del Médico Veterinario.</p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>Administar con extrema precaución en pacientes con falla cardiaca congestiva, cirrosis, deficiencia renal asociada a la coriticoterapia, pacientes con alcalosis respiratoria y metabólica, hipocalcemia o hipoclorhidria.</p>
                    <p>Debe evitar añadir a soluciones parenterales que contengan calcio. Los aditivos pueden ser incompatibles.</p>
                    <p>Una terapia agresiva de Buffer 7.5% MDKR puede resultar en alcalosis metabólica (asociada a calambres, irritabilidad y tetania) e hipernatremia. </p>
                    
                    <h6 class="tit_tercero">Especies:</h6>
                    <div class="con_especies">
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/gato.svg" alt="">
                        </div> -->
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
                    <img class="img-fluid" src="Public/images/buffer-mdkr.jpg" alt="">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/Sueros-Buffer.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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