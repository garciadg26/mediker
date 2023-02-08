
    <?php
        $color_white = "si";
        $producto = "Cocciplex 2.5%";
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
                    <p>Registro: Q-0694-065</p>
                    <br>
 
                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>
                        COCCIPLEX 2.5% es un nuevo anticoccidiano altamente efectivo contra todas las coccidias aviares, actuando incluso contra aquellas resistentes a otros compuestos.
                        Pertenece al grupo químico de las triazinonas simétricas, los anticoccidianos más modernos empleados para el control de eimerias.
                        Ejerce un efecto coccidicida en todos los estadíos de desarrollo intracelular de la coccidia, como son la ezquizogonia y la gametogonia.
                    </p>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 100 ml contienen:
                        Toltrazuril 2.5 g
                        Trimetoprim 0.5 g
                        Vehículo c.b.p. 100 ml
                    </p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>La dosificación de rutina en aves corresponde a 1 litro de Cocciplex 2.5% por 1,000 litros de agua de bebida (25 ppm) durante 2 días continuos. Esta dosis equivale, con los consumos de agua promedio a 7 mg/kg de peso corporal.</p>
                    
                    <h6 class="tit_tercero">Administración:</h6>
                    <p>Oral, diluído en agua de bebida.</p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>Sin diluír es fuertemente alcalino, por lo que debe evitarse el contacto con la piel, mucosas y ojos. No deben consumirse carne o huevos procedentes de animales tratados con este producto, hasta 14 ddias después de la última aplicación. Manténgase fuera del alcance de los niños. </p>
                    
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
                        <div class="item_especies">
                            <img src="Public/images/svg/vaca.svg" alt="">
                        </div>
                        <!--
                        <div class="item_especies">
                            <img src="Public/images/svg/caballo.svg" alt="">
                        </div> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="Public/images/cocciplex-2-5.jpg" alt="">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/Desparasitante-Soluble-Cocciplex-25.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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