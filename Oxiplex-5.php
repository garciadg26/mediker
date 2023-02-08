
    <?php
        $color_white = "si";
        $producto = "Oxiplex 5%";
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
                    <p>Registro: Q-0694-046</p>
                    <br>


                    
                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>
                        Antibiótico de la familia de las tetraciclinas, de amplio espectro. Se puede utilizar en enfermedades infecciosas causadas por gérmenes sensibles a la fórmula. Su difusión es buena en todos los tejidos por lo que es una primera elección en varias patologías del sistema reproductor, sistema digestivo, sistema respiratorio y mastitis.<br>
                        La oxitetraciclina ha demostrado ser efectiva contra:<br>
                        Bordetella spp., Corynebacterium spp. Erysipelothrix fhusopatiae, Escherichia colli, Histophilus somnus, Manhemia haemolytica, Pasteurella multocida, Salmonella spp., Staphylococcus aureus, Staphylococcus spp., streptococcus agalactie, Streptococcus spp., Anaplasma spp.
                    </p>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 1 ml contiene:
                        Oxitetraciclina: 50 mg.
                        Vehículo c.b.p.: 1 ml.
                    </>
                    
                    <h6 class="tit_tercero">Dosis y vía de administración:</h6>
                    <p>
                        Bovinos carnes y leche: 5 a 10 mg/kg intramuscular. 2.5 a 5 mg/kg intravenosa.<br>
                        Porcino: 4.4 mg/kg intramuscular o intravenosa<br>
                        Ovinos y caprinos: 4.4 - 11 mg/kg intramuscular o intravenosa<br>
                        Administrar la dosis indicada por especie de 3 a 7 días por especie cada 24 horas. 
                    </p>
                                        
                    <h6 class="tit_tercero">Especies:</h6>
                    <div class="con_especies">
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/gato.svg" alt="">
                        </div> -->
                        <!-- <div class="item_especies">
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
                    <img class="img-fluid" src="Public/images/oxiplex-5-a.jpg" alt="">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/Antibiotico-Oxiplex-5.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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