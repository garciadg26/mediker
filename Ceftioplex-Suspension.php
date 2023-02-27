
    <?php
        $color_white = "si";
        $producto = "Ceftioplex Suspensión";
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
                    <p>Registro: Q-0694-048</p>
                    <br>


                    <p>Antimicrobiano de amplio espectro en suspensión.</p>
                   
                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>Para el tratamiento y control de enfermedades respiratorias, mastitis, metritis y todas aquellas infecciones causadas por microorganismos susceptibles a la acción del Ceftiofur.</p>
                    
                    <h6 class="tit_tercero">Especies:</h6>
                    <p>Bovinos, porcinos, equinos, caninos, aves, ovinos y caprinos.</p>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 100 ml contiene:<br>
                        Ceftiofur HCI 5g<br>
                        Vehículo c.b.p.: 100 ml.
                    </p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>
                        Bovinos: de 2 a 4 ml/100 kg de peso.<br>
                        Porcinos: de 1 a 3 ml/50 kg de peso.<br>
                        Equinos: de 2 a 3 ml/50 kg de peso.<br>
                        Caninos: 1 ml/25 kg de peso.<br>
                        Aves: de 2 a 3 mg/kg de peso.<br>
                        Ovinos: 1 ml/10 kg de peso.<br>
                        Caprinos: 1 ml/10 kg de peso.<br>
                        Se sugiere dar el tratamiento por un período de tres a cinco días.
                    </p>
                    
                    <h6 class="tit_tercero">Vía de Administración:</h6>
                    <p>Subcutánea e intramuscular.</p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>Los animales no deben ser sacrificados para el consumo humano durante el tratamiento. No administrar 2 días antes del sacrificio de los animales destinados para consumo humano. Consérvese en lugar fresco, seco y protegido de la luz. </p>
                                        
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
                    <img class="img-fluid" src="Public/images/ceftioplex-suspension2.jpg" alt="">
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