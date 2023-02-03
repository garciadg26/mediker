
    <?php
        $color_white = "si";
        $producto = "Sulfaplex Inyectable";
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
                    <p>Registro: Q-0694-045</p>
                    <br>
                    

                                        

 
                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>Sulfaplex Inyectable es la combinación de sulfametoxazol y trimetoprim para lograr un efecto sinérgico bactericida. Proporciona un amplio espectro de actividad antibacteriana, elevada distribución tisular y baja toxicidad. Sulfaplex Inyectable es recomendado en la terapia de cerdos y bovinos contra procesos infecciosos generados por bacterias susceptibles a la fórmula como: Actinobacillus pleuropneumoniae, Pasteurella multocida, Pasteurella haemolytica, Bordetella bronchiseptica, así como algunas especies de Staphylococcus y Corynebacterium.</p>

                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 1 ml contiene: <br>
                        Sulfametoxazol: 200 mg. <br>
                        Trimetoprint: 40 mg. <br>
                        Vehículo c.b.p.: 1 ml.
                    </p>

                    <h6 class="tit_tercero">Dosis y Vía de administración:</h6>
                    <p>
                        Bovinos (Carnes y leche): 25-44 mg/Kg (equivalente a 1.5-2.7 ml/ 15 Kg de peso), cada 24 horas, por intramuscular o intravenosa. <br>
                        Becerros: 48 mg/Kg (equivalente a 2 ml/ 10 Kg de peso), cada 24 horas, por intramuscular o intravenosa. <br>
                        Equinos: 22 mg/Kg (equivalente a 1.4 ml/ 15 Kg de peso), cada 24 horas por intramuscular. <br>
                        Potros: 15 mg/Kg (equivalente a 1.2 ml / 20 Kg de peso) cada 24 horas por intramuscular. <br>
                        Porcinos: 48 mg/Kg (equivalente a 3 ml/ 15 Kg de peso) cada 24 horas por intramuscular. <br>
                        Ovinos (carne) y Caprinos (carne y leche), 15-20 mg/Kg (equivalente a 3 a 5 ml) dosis unica por vía intramuscular o intravenosa.
                    </p>

                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>No administre este producto 5 días antes del sacrificio de animales destinados al consumo humano. Almacenar en un lugar fresco y seco, protegido de la luz. </p>



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
                    <img class="img-fluid" src="Public/images/sulfaplex-inyectable.jpg" alt="Mediker sulfaplex inyectable">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/Antibiotico-Sulfaplex-Inyectable.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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