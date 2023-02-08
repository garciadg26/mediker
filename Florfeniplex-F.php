
    <?php
        $color_white = "si";
        $producto = "Florfeniplex F";
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
                    <p>Registro: Q-0694-069</p>
                    <br>
 

 
                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>Es un antibiótico de amplio espectro combinado con meglumina de flunixin para controlar los procesos de dolor, fiebre e inflamación. Sirve para el tratamiento y control de la neumonía en la recepción del ganado en el corral de engorda y porcinos para el tratamiento y el control de enfermedades causadas por bacterias sensibles a la fórmula. Está indicado para el tratamiento y control de enfermedades respiratorias en el ganado bovino y porcino causados por Mannheimia haemolytica (Pasteurella haemolytica), Pasteurella multocida, Haemophilus somni, Actinobacillus pleuropneumoniae, Actinomyces (corynebacterium) pyogenes, Mycoplasma hypopneumoniae, Mycoplasma hyohánus, Salmonella cholerasuis y Streptococcus suis Tipo II.</>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 1 ml contiene:
                        Florfenicol: 400 mg.
                        Flunixin meglumine: 36.5 mg.
                        Vehículo c.b.p.: 1 ml.
                    </p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>
                        Bovino intramuscular: Administrar 1 ml por cada 20 kg de peso (20 mg/kg de peso). Se recomienda una segunda aplicación a las 48 horas. Bovinos subcutánea: Administrar 1 ml por cada 10 kg de peso (40 mg/kg de peso) como única aplicación. La duración del tratamiento será a recomendación del Médico Veterinario.
                        Cerdos: 1 ml/20 kg (15 mg/kg) vía IM. Una segunda dosis debe ser administrada 48 horas después. La inyección debe ser colocada sólo en el cuello- No administrar más de 10 ml de producto en cada sitio.
                    </p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>
                        Período de retiro:
                        Carne, 38 días. No se administre en animales menores a 6 semanas. No se administre en vacas en lactación. No se administre en terneros destinados al consumo. Manténgase en un lugar fresco y seco. 
                    </p>
                                        
                    <h6 class="tit_tercero">Especies:</h6>
                    <div class="con_especies">
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/gato.svg" alt="">
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/perro.svg" alt="">
                        </div>-->
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/cabra.svg" alt="">
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/borrego.svg" alt="">
                        </div> -->
                        <!-- <div class="item_especies">
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
                    <img class="img-fluid" src="Public/images/florfeniplex-f2.jpg" alt="">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/Antibiotico-Florfeniplex-F.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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