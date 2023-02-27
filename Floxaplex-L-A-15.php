
    <?php
        $color_white = "si";
        $producto = "Floxaplex L.A. 15%";
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
                    <p>Registro: Q-0694-019</p>
                    <br>


 
                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>Para el tratamiento y control de infecciones respiratorias, digestivas, de la glándula mamaria, aparato genitourinario, infecciones septicémicas, purulentas, provocados por gérmenes Gram positivos, Gram negativos y Mycoplasmas, sensibles a la acción de la fórmula en concentración suficiente para una sola aplicación.</p>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 1 ml contiene:<br>
                        Enrofloxacina base 150 mg.<br>
                        Vehículo c.b.p.: 1 ml.
                    </p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>
                        Bovinos, porcinos, caprinos y ovinos: 1 ml por cada 60 kg de peso (2.5 mg/kg) cada 12 o 24 horas, a criterio del médico veterinario.<br>
                        Dosis Única: 3 ml por cada 60 kg de peso (7.5 mg/kg de peso).
                    </p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>No se administre este producto 5 días antes del sacrificio de animales destinados al consumo humano. No utilizar para consumo humano la leche de los animales tratados hasta 4 días después de la última aplicación. Consérvese en lugar fresco, seco y protegido de la luz. </p>
                                        
                    <h6 class="tit_tercero">Especies:</h6>
                    <div class="con_especies">
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/gato.svg" alt="">
                        </div> -->
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/perro.svg" alt="">
                        </div> -->
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
                    <img class="img-fluid" src="Public/images/floxaplex-la-15-1.jpg" alt="">
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