
    <?php
        $color_white = "si";
        $producto = "Birds Far";
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
                    <!-- <p>Registro: Q-0694-029</p> -->
                    <br>
                
                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>Repelente biodegradable, ideal para repeler a las aves que anidan en estructuras, techos, interiores, granjas avícolas, salas de ordeña, graneros, plazas públicas y campanarios, sembradíos, plantas de alimentos, silos y árboles frutales.<br>
                    Repele palomos, gaviotas, garzas, cuervos, urracas, gorriones, estominos, golondrinas en los graneros, pájaros acuáticos, pájaros carpinterios, predadores, etc.</p>
                    
                    <h6 class="tit_tercero">Ingrediente Activo:</h6>
                    <p>Es una enzima de las uvas de Concord que es el antranilato de metilo.<br>
                    En los Estados Unidos es reconocido por la FDA y EPA como un producto generalmente seguro de usar (GRAS) y de riesgo reducido.</p>
                    
                    <h6 class="tit_tercero">Método:</h6>
                    <p>El sistema trigesimal de las aves es irritado a través del olor BIRDS FAR, completamente compatible con el medio ambiente y no daña a las aves, ni estructuras y superficies donde se aplica. La efectividad de la vida del producto va a depender mucho de la porosidad y de la superficie donde se aplique y de la luz del sol ya que estos determinan la durabilidad de BIRDS FAR.</p>
                    
                    <h6 class="tit_tercero">Aplicación:</h6>
                    <p>
                        Pintado (máxima eficacia), o por aspersión (1:1 diluirlo en agua). En superficies porosas aplique el producto de forma intensa ya que este sea absorbido. BIRDS FAR es efectivo en todo tipo de superficies. No es tóxico y no causa daño a estructuras metálicas, mampostería, o metales de adorno. No mancha. No deja olor desagradable. Debe aplicarse una segunda y tercera vez en un período no mayor a ocho días y después de una aplicación por mes es suficiente para mantener alejadas a las aves.<br>
                        Se puede usar en cualquier condición ambiental, interiores o exteriores y prácticamente en cualquier lugar.
                    </p>

                    <!-- <h6 class="tit_tercero">Especies:</h6>
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
                    </div> -->
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="Public/images/repelente-birds-far.jpg" alt="">
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