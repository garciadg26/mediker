
    <?php
        $color_white = "si";
        $producto = "Inversol Soluble 3.2%";
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
                    <p>Registro: Q-0694-013</p>
                    <br>
 
                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>INVERSOL 3.2% está indicado para el control de los principales parásitos internos y externos de gallináceas. Los parásitos internos y externos sobre los que actúa, pertenecen a los géneros Heterakis, Capillaria y Ascaris. En el caso de parásitos externos, actúa sobre ácaros (ornithonyssussylvarium y dermanissusgallinarum), garrapatas de género Argas, chinches de las aves (Cimex lectularius) y a todas las especies de piojos picadores.</p>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 1000 ml contienen:<br>
                        Ivermectina 32 g<br>
                        Vehículo c.b.p. 1000 ml
                    </p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>12.75 a 18.75 ml por cada 100 kg de peso vivo a tratar (Equivalente de 400 a 600 mcg por kg de peso corporal) durante dos días consecutivos. En casos preventivos es suficiente con dos días de tratamiento. En parasitosis clínicas, repetir el tratamiento dos semanas después, también por dos días a la dosis recomendada.</p>
                    
                    <h6 class="tit_tercero">Vía de Administración:</h6>
                    <p>
                        Oral, diluido en el agua de bebida que consumirán las aves a tratar.<br>
                        Dos horas antes de administrar el producto, suspenda el acceso al consumo de agua a las aves a tratar. Una vez establecida la cantidad de INVERSOL 3.2% que se va a utilizar para el tratamiento, se deberá mezclar con la cuarta parte del total de agua que las aves consumen en un día.
                    </p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>
                        No se administre el producto 7 días previos al sacrificio de los animales tratados, destinados al consumo humano. No requiere tiempo de retiro para el consumo del huevo de las aves tratadas.<br>
                        La Ivermectina es tóxica para los organismos acuáticos como los peces, se recomienda incinerar los frascos vacíos o con sobrante.<br>
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
                        </div> -->
                        <div class="item_especies">
                            <img src="Public/images/svg/gallina.svg" alt="">
                        </div>
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/cerdito.svg" alt="">
                        </div> -->
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/vaca.svg" alt="">
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/caballo.svg" alt="">
                        </div> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="Public/images/inversol-3-2.jpg" alt="">
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