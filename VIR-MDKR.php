
    <?php
        $color_white = "si";
        $producto = "VIR MDKR";
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
                    <p>
                        VIR MDKR es un desinfectante formulado con ácidos orgánicos, peróxidos, surfactantes y un sistema amortiguador inorgánico. Efectivo contra un gran espectro de microorganismos patógenos que causan enfermedades en aves, cerdos, bovinos, equinos y animales domésticos.<br>
                        Posee el más amplio espectro contra virus, bacterias, hongos, esporas, micoplasma y algas. Altamente versátil: Puede ser usado en desifección de superfrcies, equipos y estructuras, vehículos, sistemas de agua y aire y huevos.
                    </p>
                    
                    <h6 class="tit_tercero">Composición:</h6>
                    <p>Componentes Peroxigénicos, Surfactantes, Ácidos Orgánicos y un Sistema de Amortiguador Inorgánico.</p>
                    
                    <h6 class="tit_tercero">Dilución:</h6>
                    <p>100/1:200 (5 a 10 gramos de VIR MDKR por cada litro de agua).</p>
                    
                    <h6 class="tit_tercero">Propiedades generales:</h6>
                    <p>
                        Potente eficacia contra bacterias, virus y hongos (incluyendo la influenza aviar altamente patogénica (h5n1)). Rápida acción: una solución al 1% puede eliminar bacterias de 1 a 3 minutos de tiempo en contacto e inactivar al resistente parvovirus en menos de 10 minutos.<br>
                        Actúa en presencia de materia orgánica: efectividad probada independientemente en superficies porosas, con agua duras, a bajas temperaturas y en presencia de desafío orgánico de animales.<br>
                        Seguridad excepcional hacia humanos y animales.<br>
                        No contaminante, no corrosivo, ni irritante.<br>
                        Fácil de preparar y fácilmente soluble en agua.<br>
                        Biodegradable.
                    </p>
                    
                    <p>
                        Antes de cualquier tratamiento desinfectante, es muy importante hacer una buena limpieza, esto permite un mejor efecto del desinfectante y un control más efectivo de los patógenos.<br>
                        No se necesita equipo de protección, se puede aplicar en presencia de animales, útil para prevenir brotes postvacunales. 
                    </p>

                    <!-- <h6 class="tit_tercero">Especies:</h6>
                    <div class="con_especies"> -->
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
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/vaca.svg" alt="">
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/caballo.svg" alt="">
                        </div>
                    </div>
                -->
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="Public/images/vir-mdkra.jpg" alt="">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/Vir-MDKR.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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