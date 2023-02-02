
    <?php
        $color_white = "si";
        $producto = "Neumoplex Plus MDKR";
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
                    
                    <p>Registro: Q-0694-058 / Combinación de Quimioterápico con Expectorante.</p>
                    
                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>NEUMOPLEX PLUS MDKR es una combinación de dos activos antimicrobianos (sulfametoxazol y trimetoprim) diseñada para el tratamiento de enfermedades infecciosas en el aparato respiratorio.</p>
                    
                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>Entre las enfermedades que pueden ser prevenidas y tratadas se encuentran:<br>
                    Aves:<br>
                    Aerosaculitis y E.R.C. complicada con E. coli, salpingitis, onfalitis, tifus aviar, salmonelosis, pulorosis, coriza, cólera aviar, septicemia por enterobacterias.<br>
                    Cerdos:<br>
                    Colibacilosis, entero toxemia, colibacilar, neumonía, rinitis atrófica y compleja M. M. A.<br>
                    Bovinos:<br>
                    Enteritis bacterianas, disentería colibacilar, bronconeumonía bacteriana, infecciones del ombligo, gabarro.</p>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>Cada 1 ml contiene:<br>
                    Sulfametoxazol 100 mg<br>
                    Trimetoprim 20 mg<br>
                    Vehículo c.b.p.: 1 ml</p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>Aves: 0.4 – 0.8 ml/kg de peso (equivalente a 50 – 100 mg/kg de peso) administrar dos veces al día.<br>
                    Cerdos: 2 ml/kg de peso (equivalente a 240 mg/kg de peso), repetir la dosis a intervalos de 24 – 48 horas.<br>
                    Becerros: 0.1 ml/kg de peso (equivalente a 15 mg/kg de peso), durante 5 – 7 días.</p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>No administrar este producto 7 días antes del sacrificio de los animales destinados al consumo humano. No administrar en aves de postura. Se tiene que proveer agua en cantidad y calidad suficiente durante el tratamiento de los animales. Almacenar en un lugar fresco, seco y protegido de la luz. No se deje al alcance de los niños ni de los animales domésticos.</p>
                    <p>Precauciones especiales para la destrucción de los medicamentos no utilizados o envases vacíos: Todo medicamento veterinario no utilizado o los residuos derivados del mismo deberán eliminarse de conformidad con las normativas locales. </p>
                    
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
                        <div class="item_especies">
                            <img src="Public/images/svg/vaca.svg" alt="">
                        </div>
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/caballo.svg" alt="">
                        </div> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="Public/images/neumoplex-plus-mdkr-tb.jpg" alt="">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/Productos-Solubles-Neumoplex-Plus.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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