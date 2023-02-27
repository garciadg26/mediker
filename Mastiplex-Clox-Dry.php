
    <?php
        $color_white = "si";
        $producto = "Mastiplex Clox Dry";
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
                    <p>Registro: Q-0694-077</p>
                    <br>
                    


        
                    

 
                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>
                        MASTIPEX CLOX DRY, es un producto de uso intramamario, formulado a base de Ampicilina y Cloxacilina, potente combinación de amplio espectro útil para el control de la mayoría de los patógenos causantes de la mastitis gram negativos y gram positivos que se presentan en el período seco (especialmente: Staphylococcus aureus, Streptococcus uberis y Actinomyces pyogenes). <br>
                        Altamente efectivo para el control y tratamiento de la mastitis subclínica que se puede presentar al momento del secado, ofrece protección contra las infecciones que se presentan en éste período.
                    </p>

                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>Después de ordeñar a fondo la ubre, debe desinfectarse por separado cada pezón con una solución antiséptica y posteriormente introducir el contenido de una jeringa en cada cuarto.</p>

                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 8 g contiene: <br>
                        Cloxacilina: 890 mg. <br>
                        Ampicilina 440 mg. <br>
                        Vehículo c.b.p.: 8 g.
                    </p>


                    
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
                        <!-- <div class="item_especies">
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
                    <img class="img-fluid" src="Public/images/mastiplex-clox-dry-detalle.jpg" alt="">
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