
    <?php
        $color_white = "si";
        $producto = "Soldex MDKR 50%";
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
                    <p>Registro: Q-0694-030 / Suero glucosado al 50% en solución inyectable.</p>
                    <br>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>

                    <p>Cada 1 ml contiene:<br>
                    Dextrosa anhidra 0.5 g<br>
                    Cloruro de Sodio 4.75 mg<br>
                    Cloruro de Potasio 2.50 mg<br>
                    Vehículo c.b.p. 1 ml</p>
                    
                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>SOLDEX MDKR 50% está recomendado en la deshidratación simple por pérdida de agua. La administración de SOLDEX MDKR 50% repone el agua y al mismo tiempo estabiliza la presión osmótica del organismo. La administración de SOLDEX MDKR 50% permite la recuperación hepática en caso de daño del órgano por afecciones como hepatitis aguda, ictericia e insuficiencia hepática SOLDEX MDKR 50% puede ser administrado cuando existe deficiencia de carbohidratos metabolizables en la dieta, lo cual induce la formación de cuerpos cetónicos en exceso, ya que actúa como agente anticetónico.</p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>

                    <p>Bovinos y Equinos: 250 a 500 ml.<br>
                    Especies menores: 1 ml por kilogramo de peso corporal.</p>
                    
                    <h6 class="tit_tercero">Vía de Administración:</h6>
                    <p>Endovenosa e intraperitoneal.<br>
                    Para administrar por vía subcutánea o intramuscular, debe diluír 1 parte de SOLDEX MDKR 50% con 5 partes de solución fisiológica.</p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>No se use esta solución, si no es transparente y exenta de sedimento.<br>
                    Almacenar en un lugar fresco, seco y protegido de la luz. </p>
                    
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
                    <img class="img-fluid" src="Public/images/soldex-50-mdkr.jpg" alt="">
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