
    <?php
        $color_white = "si";
        $producto = "Naturex Bio 20%";
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
                    <p>Registro: Q-0694-070</p>
                    <br>
                    

                

                    <p>Antibiótico de amplio espectro en premezcla al 20% para ser administrado en el alimento. Además contamos con presentación al 22%.</p>

                    <h6 class="tit_tercero">Fórmula:</h6>
                       <p>
                            Cada 1000 g contienen: <br>
                            Sulfato de Colistina 200 g <br>
                            (equivalente a 4,500,000 UI) <br>
                            Excipiente c.b.p.: 1000 g.
                       </p>
                    

                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>El SULFATO DE COLISTINA es un antibiótico cuya cualidad es absorberse en bajo grado a nivel intestinal, con un alto efecto local y alto nivel de seguridad y ofrecer bajo nivel de desarrollo de resistencia bacteriana. Efectivo contra bacterias gram negativas (E-coli, Salmonella spp., Klebsiella spp., Pasteurella spp., etc).</p>

                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>
                        Aves: La sugerencia es que se emplee a dosis de 0.5 kilos por tonelada de alimento como preventivo durante el consumo del alimento iniciador en pollo de engorda y reproductoras. <br>
                        Este período varía de entre 2 a 3 semanas. <br>
                        La dosis de 1 kilo de Naturex Bio 20% por tonelada de alimento, se sugiere emplearla durante 10 días en alimento en casos de elevada contaminación bacteriana y donde se requiera una dosis de choque. Ambas dosis se emplean exitosamente en postura comercial en el pico de producción para controlar contaminación digestiva y evitar mortalidades crónicas durante todo el ciclo de producción. <br>
                        Porcinos: 10 mg/Kg de peso vivo por dia, durante 7 a 10 días consecutivos. <br>
                        Lo que equivale a emplear 0.5 Kg de Naturex Bio 20% por tonelada de alimento.
                    </p>

                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>
                        No consumir la carne de los animales tratados si no hasta 15 días después de terminado el tratamiento. <br>
                        Consérvese en lugar fresco, seco y no expuesto a la luz solar directa. 
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
                        <div class="item_especies">
                            <img src="Public/images/svg/cerdito.svg" alt="">
                        </div>
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/vaca.svg" alt="">
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/caballo.svg" alt="">
                        </div> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="Public/images/naturex-bio-20.jpg" alt="">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/Premezcla-Naturex-Bio-20.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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