
    <?php
        $color_white = "si";
        $producto = "Florfenicol 2% PX";
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
                    <p>Registro: Q-0694-061</p>
                    <br>
                    

                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>Florfenicol Px 2% actúa contra bacterias Gram positivas (Staphylococcus spp., Streptoccoccus spp., Corynebacterium pyogenes y Clostridium spp.) y Gram negativas (E coli, Pasteurella spp., Haemophilus spp., y Actinobacillus pleuropneumoniae) todas estas de suma importancia en diversas etapas de la producción de aves y de porcinos.
                    Excelente opción para el tratamiento de problemas respiratorios de los cerdos dada su amplia distribución tanto en vías respiratorias altas como bajas. También puede ser empleado para el control de problemas infecciosos digestivos, provocados por las bacterias mencionadas.</p>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>Cada 100 g contiene:
                    Florfenicol 2 g
                    Vehículo c.b.p.: 100 g.</p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>Administrar de 1 a 2 Kg de Florfenicol Px 2% por cada tonelada de alimento (equivalente a 20 a 40 mg/Kg de peso), durante 2 a 4 días dependiendo de la etología del problema y a criterio del médico veterinario. Para apoyo a programas de destete temprano, administrar 2 Kg de Florfenicol Px 2% por tonelada de alimento, que equivale a una dosis de 40 ppm por tonelada de alimento durante dos o tres semanas.</p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>En cerdos no administrar 28 días antes del sacrificio de los animales destinados para consumo humano. No administre este producto en aves productoras de huevo. Consérvese bien tapado en un lugar seco y fresco. Manténgase fuera del alcance de los niños y de animales domésticos.
                    Precauciones especiales para la destrucción de los medicamentos no utilizados o envases vacíos: Todo medicamento veterinario no utilizado o los residuos derivados del mismo, deberán eliminarse de conformidad con las normativas locales.</p>
                    
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
                        </div> -->
                        <div class="item_especies">
                            <img src="Public/images/svg/gallina.svg" alt="">
                        </div>
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/cerdito.svg" alt="">
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/vaca.svg" alt="">
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/caballo.svg" alt="">
                        </div> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="Public/images/florfenicol-2-px.jpg" alt="">
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