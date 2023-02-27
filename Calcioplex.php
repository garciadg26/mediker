
    <?php
        $color_white = "si";
        $producto = "Calcioplex";
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
                    <p>Registro: Q-0694-029</p>
                    <br>
                
 
                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>Calcio Concentrado Reconstituyente</p>
                    
                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>Calcioplex es una fórmula diseñada para corregir las deficiencias de calcio en animales en preparto y el puerperio. Corrige también deficiencias de magnesio y fósforo que se cursan en el postparto. Aporta cantidades de glucosa para que el animal tenga suficiente energía en lo que corrige su ingesta. La relación Ca, P, y Mg está cuidadosamente llevada para un éxito terapéutico.</p>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>Cada 100 ml contiene:<br>
                    Borogluconato de calcio 26 g.<br>
                    Dextrosa 15 g.<br>
                    Borogluconato de magnesio 6.0 g.<br>
                    Fósforo elemental 0.5 g.<br>
                    Vehículo c.b.p.: 100 ml.</p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>Bovinos: 500 ml.<br>
                    Equinos: 125 a 250 ml.<br>
                    Ovinos y Caprinos: 50 a 125 ml.<br>
                    Caninos: 10 a 40 ml.<br>
                    Felinos: 5 a 15 ml.</p> 

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
                    <img class="img-fluid" src="Public/images/calcioplex.jpg" alt="">
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