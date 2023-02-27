
    <?php
        $color_white = "si";
        $producto = "Pulmoplex Inyectable";
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
                    <p>Registro: Q-0694-001</p>
                    <br>
                    

                                        

                    

 
                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>
                        Es una solución estéril de Tilmicosina, para ser administrada vía subcutánea. La Tilmicosina es un antibiótico macrólido desarrollado a partir de la Tilosina para ser utilizado en medicina veterinaria. <br>
                        Tiene una excelente actividad contra bacterias gram(+) y una muy significativa actividad frente a bacterias gram(-) y Micoplasmas. Como todos los macrólidos, es bacteriostática y a altas concentraciones puede llegar a ser bactericida.
                    </p>

                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 1 ml contiene: <br>
                        Fosfato de Tilmicosina: 300 mg <br>
                        Vehículo c.b.p.: 1 ml.
                    </p>

                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>
                        10 mg/kg equivalen a 1 ml por cada 30 kg de peso, como dosis única. <br>
                        No administre mas de 15-25 ml por sitio de aplicación, acorde al peso o el tamaño del animal. El tratamiento puede repetirse a la 72 horas a criterio del médico veterinario.
                    </p>

                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>
                        No usar en humanos. <br>
                        No administrar en cerdos. <br>
                        No administrar en caballos. <br>
                        No administrar por vía intravenosa.
                    </p>

                    <p>Consérvese en un lugar fresco, seco y protegido de la luz. </p>



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
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/cerdito.svg" alt="">
                        </div> -->
                        <div class="item_especies">
                            <img src="Public/images/svg/vaca.svg" alt="">
                        </div>
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/caballo.svg" alt="">
                        </div> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="Public/images/pulmoplex-inyectable.jpg" alt="Mediker pulmoplex inyectable">
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