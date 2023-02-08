
    <?php
        $color_white = "si";
        $producto = "Piroplex";
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
                        Registro: Q-0694-043
                    </p>
                    <br>
 

 
                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>La dipirona es un fármaco antiinflamatorio no esteroide (AINE), no opiáceo, empleado como analgésico, antipirético y espasmódico en una extensa variedad de patologías, entre ellas el dolor abdominal agudo, espasmos de la musculatura gastrointestinal, traumatismos, atristis, neuritis, dolor postoperatorio, dolor en las vías biliar y urinaria.</p>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 1 ml contiene:<br>
                        Dipirona sódica; 500 mg.<br>
                        Vehículo c.b.p.: 1 ml.
                    </p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>
                        Bovinos: 50 mg/kg de peso (equivalente a 5 ml por 50 kg de peso) cada 24 hrs.<br>
                        Porcinos: 50 mg/kg de peso (equivalente a 5 ml por 50 kg de peso) cada 24 hrs.<br>
                        Equinos: 22 mg/kg de peso (equivalente a 2.2 ml por 50 kg de peso) cada 24 hrs.<br>
                        Caninos: 25 mg/kg de peso (equivalente a 0.5 ml por 10 kg de peso).<br>
                        Felinos: 10 mg/kg de peso (equivalente a 0.1 ml por 5 kg de peso) por un período máximo de 5 días.
                    </p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>
                        No mezclar con clorpromazina, barbitúricos o fenilbutazona, ya que puede incluir hipotermia severa. No administre este producto 35 días antes del sacrificio de los animales destinados para el consumo humano.<br>
                        No se administre este producto en equinos para consumo humano. No debe consumirse la leche de los animales tratados hasta después de 7 días de la última aplicación.<br>
                        Consérvese el producto en lugar fresco y seco. No se deje al alcance de los niños. Producto exclusivo para uso veterinario. 
                    </p>

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
                    <img class="img-fluid" src="Public/images/piroplex-1.jpg" alt="">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/Antiinflamatorio-Piroplex.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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