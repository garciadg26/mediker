
    <?php
        $color_white = "si";
        $producto = "Electrolitos MDKR";
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
                    <p>Registro: Q-0694-051</p>
                    <br>
                    


 
                    

 

                    <p>Electrolitos y minerales para el balance hidro-electrolítico.</p>

                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>Electrolitos Mediker es una fórmula que contiene electrolitos y minerales traza que sirven como soporte para lograr el balance hidro-electrolitico de los animales en producción, o que se encuentren bajo un régimen de ejercicio extenuante, en condiciones de clima caluroso, además de que sirven para mantener un soporte cardiovascular inmune y neurológico normales.</p>

                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 100 g contienen: <br>
                        Cloruro de Sodio 22.720 g <br>
                        Cloruro de Potasio 11.400 g <br>
                        Gluconato de Calcio 0.036 g <br>
                        Sulfato de Cobalto 0.00001 g <br>
                        Sulfato de zinc 2.500 g <br>
                        Sulfato de manganeso 0.120 g <br>
                        Sulfato ferroso 0.005 g <br>
                        Dextrosa 15 g <br>
                        Vehículo c.b.p. 100 g
                    </p>

                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>Disolver un gramo de ELECTROLITOS MEDIKER por litro de agua de bebida, durante el tiempo necesario hasta lograr la recuperación de los animales.</p>

                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>Precauciones especiales para la destrucción de los medicamentos no utilizados o envases vacíos: Todo producto veterinario no utilizados o los residuos derivados del mismo deberán eliminarse de conformidad con las normativas locales. </p>
                    

                    


                    
                    <h6 class="tit_tercero">Especies:</h6>
                    <div class="con_especies">
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/gato.svg" alt="">
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/perro.svg" alt="">
                        </div> -->
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
                    <img class="img-fluid" src="Public/images/electrolitos-mdkr.jpg" alt="Mediker electrolitos-mdkr">
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