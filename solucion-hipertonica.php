
    <?php
        $color_white = "si";
        $producto = "Solución Hipertónica MDKR";
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
                    <p>Registro: Q-0694-031 / Solución Hipertónica de Cloruro de Sodio</p>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>Cada 100 ml contiene:<br>
                    Cloruro de Sodio 7.5 g<br>
                    Vehículo c.b.p. 100 ml</p>
                    
                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>SOLUCIÓN HIPERTÓNICA MDKR induce un aumento rápido del volumen plasmático y de la presión arterial media, al atraer el agua de los espacios intracelulares, intersticial y del tracto gastrointestinal al espacio intravascular, por lo que está indicado en estados de deshidratación, diarreas y la corrección de otras patologías que soliciten este efecto.</p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>100 a 200 ml por cada 100 kg de peso corporal. La frecuencia de uso es de acuerdo al criterio del médico veterinario.</p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>No se use esta solución si no es transparente y exenta de sedimento.<br>
                    No deben administrarse soluciones hipertónicas en pacientes con hipernatremia, hipercalemia o cuando no se ha corregido la hemorragia.<br>
                    Almacenar en un lugar fresco, seco y protegido de la luz.<br>
                    No se deje al alcance de los niños, ni de los animales domésticos. </p>
                    
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
                    <img class="img-fluid" src="Public/images/solucion-hipertonica-mdkr.jpg" alt="">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/Sueros-Hipertonica.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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