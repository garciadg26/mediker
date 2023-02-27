
    <?php
        $color_white = "si";
        $producto = "Betaplex";
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
                    <p>Registro: Q-0694-040</p>
                    <br>
                    

                                        

 
                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>BETAPLEX es útil en apdecimientos causados por bacterias susceptibles a la penicilina, como: Queratoconjuntivitis infecciosa bovina, neumonía bacteriana, mastitis, metritis, pasteurolosis neumónica, carbón sintomático, edema maligno, entre otros.</p>

                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 1 ml contiene: <br>
                        Penicilina G Procainica 300,000 Ul. <br>
                        Vehículo c.b.p.: 1 ml.
                    </p>

                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>
                        Bovinos, ovinos y caprinos: de 7 ml a 11 ml por cada 50 kg de peso (equivalente a 44,000 a 66,000 Ul/Kg de peso) cada 24 horas. <br>
                        Porcinos: 6.5 ml por cada 50 kg de peso (equivalente a 40,000 Ul/Kg de peso) cada 24 horas. <br>
                        Equinos: de 3.5 ml a 7 ml por cada 50 kg de peso (equivalente a 22,000 a 44,000 Ul/kg de peso) cada 12 horas. <br>
                        Caninos domésticos: de 0.5 ml a 1.0 ml por cada 10 kgs de peso (equivalente a 20,000 a 40,000 Ul/kg de peso) cada 12-24 horas. <br>
                        Administrar de 3 a 5 días. No administrar mas de 10 ml en el mismo sitio de aplicación.
                    </p>

                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>
                        No consumir la carne (bovino) hasta 10 días después de la última aplicación. La leche para consumo humano podrá ser utilizada 72 horas después de la última aplicación. <br>
                        No consumir la carne (ovinos y caprinos) hasta 8 días después de la última aplicación. <br>
                        No consumir la carne (cerdos) hasta 6 días después de la última aplicación. <br>
                        No administrar en equinos destinados para consumo. No aplicar por vía intravenosa. <br>
                        Contraindicado en casos de hipersensibilidad de la penicilina y/o cefalosorinas. La administración de este producto puede causar ocasionalmente en cerdos lactantes y de engorda efectos secundarios. <br>
                        No se recomienda su manejo si es sensible a las penicilinas y cefalosporinas. Agitar antes de usarse para homogenizar suspensión. 
                    </p>




                    <h6 class="tit_tercero">Especies:</h6>
                    <div class="con_especies">
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/gato.svg" alt="">
                        </div> -->
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
                    <img class="img-fluid" src="Public/images/betaplex.jpg" alt="Mediker betaplex">
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