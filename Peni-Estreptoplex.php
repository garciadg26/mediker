
    <?php
        $color_white = "si";
        $producto = "Peni Estreptoplex";
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
                    <p>Registro: Q-0694-095</p>
                    <br>


 
                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>Potente combinación de antibióticos de amplio espectro combinada con un antiinflamatorio esferoidal y un analgésico-antipirético, que facilita el manejo y tratamiento de infecciones comunes en el ganado.</p>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 100 g contiene:<br>
                        Penicilina G potásica: 200,000 UI<br>
                        Penicilina G benzatínica: 100,000 UI<br>
                        Estreptomicina Sulfato: 200 mg<br>
                        Dexametasona 21 fosfato: 1 mg<br>
                        Dipirona Sódica: 40 mg.
                    </p>
                    
                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>Útil como tratamiento de primera elección para infecciones provocadas por patógenos sensibles a la fórmula como: Pasteurella app., Clostridium spp., Streptococcus spp., Staphylococcus spp., Listeria app., Mycobacterium app., Corynebacterium app., Shigella spp., Actinobacillus spp., Leptospira spp., Actinomyces spp., Haemophilus spp., Erysipelothrix spp., y afecciones de los tractos digestivo, respiratorio, de glándula mamaria, sistema articular, del tracto reproductivo y cuidado post-operatorio.</p>
                    
                    <h6 class="tit_tercero">Vía de Administración:</h6>
                    <p>Intramuscular.</p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>1 ml por cada 20 kg de peso, por 3 a 5 días.</p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                   <p> No se administre a hembras gestantes. Agítese antes de usarse. Producto para uso veterinario exclusivamente. Consulte al Médico Veterinario. Su venta requiere receta médica. Mantener fuera del alcance de los niños y animales domésticos.</p>
                    
                    <h6 class="tit_tercero">Período de Retiro:</h6>
                    <p>
                        Carne: 10 días.<br>
                        Leche: 5 días.
                    </p> 
                    
                    <h6 class="tit_tercero">Especies:</h6>
                    <div class="con_especies">
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/gato.svg" alt="">
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/perro.svg" alt="">
                        </div>-->
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
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/caballo.svg" alt="">
                        </div> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="Public/images/peni-estreptoplex1.jpg" alt="">
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