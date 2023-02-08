
    <?php
        $color_white = "si";
        $producto = "Pulmoplex M";
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
                    <br>

                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>Potente combinación de un macrólido combinado con un desinflamatorio no esteroidal. Indicado para el tratamiento de enfermedades ocasionadas por microorganismos gram positivos y gram negativos, en especial enfermedades respiratorias de los bovinos (ERB) ocasionadas por Pasteurella haemolytica, queratoconjuntivitis infecciosa bovina, pododermatitis necrótica asociada con Fusobacterium necrophorum, y algunas otras infecciones que cursan con dolor, inflamación y fiebre.
                    De rápida respuesta y aplicación práctica para minimizar el manejo y reducir el estrés innecesario.</p>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>Cada 1 ml contiene:<br>
                    Tilmicosina fosfato: 300 mg<br>
                    Meglumina de flunixin: 75 mg<br>
                    Vehículo c.b.p.: 1 ml.</p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>10 mg/kg (1 ml por cada 30 kg de peso), como dosis única.<br>
                    No administre mas de 20 ml por sitio de aplicación. El tratamiento se puede repetir a las 48hr, según el criterio del Médico Veterinario.</p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>
                        No se administe por vía endovenosa.<br>
                        No administrar a cerdos ni equinos.<br>
                        No se administre este producto 28 días antes del sacrificio de animales destinados a consumo humano.<br>
                        No se recomienda su uso en ganado lechero en producción.<br>
                        Almacenar en un lugar fresco y seco y protegido de la luz. No se deje al alcance de los niños, ni animales domésticos.<br>
                        Producto exclusivo para uso veterinario.<br>
                        Todo medicamento no utilizado, los residuos o envases del mismo deberán eliminarse de conformidad con las normativas locales.<br>
                        Consérvese en un lugar fresco, seco y protegido de la luz.
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
                    <img class="img-fluid" src="Public/images/pulmoplex-M.jpg" alt="">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/Antibiotico-Pulmoplex-M.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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