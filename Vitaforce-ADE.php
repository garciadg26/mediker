
    <?php
        $color_white = "si";
        $producto = "Vitaforce ADE";
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
                    <p>Registro: Q-0694-076</p>
                    <br>
                    


 
                    

                    

 
                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>VITAFORCE ADE está indicado para la prevención y tratamiento de las deficiencias y carencias del complejo de vitaminas liposolubles A, D y E. Previene y coadyuva en el tratamiento de enfermedades infecciosas estimulando una mejor respuesta a la medicación, así como también en estados de estrés como: transportación, vacunación, desparasitaciones, cambios climáticos, etc. Recomendado como estimulante general del apetito y desarrollo corporal.</p>

                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 5 ml contienen: <br>
                        Vitamina A: 500,000 U.I. <br>
                        Vitamina D: 75,000 U.I. <br>
                        Vitamina E: 50 U.I. <br>
                        Vehículo c.b.p. 5 ml
                    </p>

                    <h6 class="tit_tercero">Dosis y Administración:</h6>
                    <p>
                        Bovinos (leche y carne) y equinos (no destinados al consumo humano): 4 a 6 ml. <br>
                        Becerros y potros: 2 a 3 ml. <br>
                        Ovinos, caprinos y porcinos: 3 a 4 ml. <br>
                        Cabritos, corderos y lechones: 0.5 a 2 ml. <br>
                        Caninos y felinos: 0.3 a 0.5 ml.
                    </p>

                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>Manténgase fuera del alcance de los niños y animales domésticos. Conservese en un lugar fresco y seco. Protéjase de la luz solar directa y desecho por medio de la incineración. </p>

                    


                    
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
                        <!-- <div class="item_especies">
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
                    <img class="img-fluid" src="Public/images/vitaforce-ade.jpg" alt="Mediker vitaforce-ade">
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