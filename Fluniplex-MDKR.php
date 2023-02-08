
    <?php
        $color_white = "si";
        $producto = "Fluniplex MDKR";
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
                    <p>
                        Registro: Q 0694-025
                    </p>
                    <br>
 

 
                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>Es un antiinflamatorio, antipirético, analgésico no esteroidal, no abortivo. Su mecanismo de acción se considera como el resultado de la disminución de la síntesis de prostaglandinas mediadoras de la respuesta inflamatoria y del complejo químico del dolor.</p>
                    <p>Puede administrarse en animales de cualquier edad, estado fisiológico e incluso en hembras gestantes.</p>
                    <p>Bovinos: Tratamiento de soporte en infecciones. Diarreas neonatales del ternero. Tratamiento del dolor agudo causado por cirugía, heridas, lesiones del aparato locomotor y cólicos. Cuadros shock endotóxico producido por procesos infecciosos virales o bacterianos. Coadyuvante en el tratamiento de la parvovirosis canina.</p>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 1 ml contiene:<br>
                        Meglumina de Flunixin 50 mg.<br>
                        Vehículo c.b.p.: 1 ml.
                    </p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>
                        Bovinos 1 a 2 ml. por cada 45 Kg.<br>
                        Terneros 2 a 3 ml. (dosis única).<br>
                        Cerdos 2 ml. / 45 Kg.<br>
                        Equinos 1 ml. / 45 Kg.<br>
                        Aplicar hasta 3 tratamientos considerando los intervalos recomendados.
                    </p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>No se ha determinado el efecto sobre la gestación. No administrar en animales de menos de 3 días de edad. No consumir la carne de animales tratados hasta después de 24 horas en bovinos y 21 días en porcinos, después de la última aplicación.</p>
                    <p>No consumir la leche de animales tratados hasta 12 horas después de la última aplicación. </p>

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
                        </div> -->
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
                    <img class="img-fluid" src="Public/images/fluniplex_1.jpg" alt="">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/FLUNIPLEX-MDKR.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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