
    <?php
        $color_white = "si";
        $producto = "Endectoplex TF";
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
                    <p>Registro: Q-0694-075</p>
                    <br>
                    


                    
                    

                    

                    
                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>Es un antiparasitario de acción total, antihelmíntico parenteral de amplio espectro para el control y tratamiento simultáneao de las parasitósis causadas por nematodos, fasciola hepática (formas adultas y chupadores de sangre y larvas de mosca. Contiene como principios activos a la ivermectina que químicamente pertenece al grupo de las avermectinas y triclabendazol que es un benzimidazol.</p>

                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 1 ml contienen: <br>
                        Triclabendazol 240 mg Ivermectina 4 mg <br>
                        Vehículo c.b.p. 1 ml
                    </p>

                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>Bovinos, ovinos y caprinos: 1.0 ml por cada 20 Kg de peso. Se recomienda dar tratamientos cada 8 - 10 semanas durante las épocas de alta infestación o en las zonas de alta incidencia de fasciolasis se recomienda dar tratamiento cada 5 - 6 semanas.</p>

                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>No ser usado en tratamientos por infestaciones por garrapatas. Período de retiro en carne 28 días. Conservar el producto en un lugar fresco y seco. No usar en animales productores de leche para el consumo humano. </p>

                    

                    
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
                        <!-- <div class="item_especies">
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
                    <img class="img-fluid" src="Public/images/endectoplex-tf-detalle.jpg" alt="Mediker endectoplex tf">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/desparasitante-EndectoplexTF.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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