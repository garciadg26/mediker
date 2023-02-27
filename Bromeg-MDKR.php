
    <?php
        $color_white = "si";
        $producto = "Bromeg MDKR";
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
                    <p>Registro: Q-0694-057 / Expectorante y Mucolítico Soluble.</p>
                    <br>

                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>Cada 1000 ml contiene:<br>
                    Clorhidrato de Bromehexina 27g<br>
                    Guayfemesina 50g<br>
                    Vehículo c.b.p.: 1000 ml</p>
                    
                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>Bromeg MDKR contiene Clorhidrato de Bromehexina y Guayfemesina como agente mucolitico y expectorante. Es de rápida absorción con niveles máximos en plasma en menos de 6 horas. Contiene una combinación científicamente balanceada de Bromehexina y Gayfemisina.<br>
                    Efecto mucolítico: Reduce la viscosidad del moco en los pasajes aéreos con acción directa sobre los mucopolisacáridos.<br>
                    Efecto secretolítico: Incrementa el volumen de las secreciones bronquiales.<br>
                    Efecto expectorante: La combinación de Guayfemesina con el Clorhidrato de Bromehexina facilita la eliminación del moco.<br>
                    Beneficios por el uso de BROMEG MDKR: Auxiliar en el tratamiento de las enfermedades infecciosas que cursan con producción de moco que dificulta la respiración como: Laringotraqueitis, Bronquitis, Coriza, así como reacciones postvacunales respiratorias.</p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>Aves: 100 ml de BROMEG MDKR por 100 L de agua, durante 5 a 7 días continuos.<br>
                    Porcinos: 100 ml de BROMEG MDKR por 1000 L de agua durante 5 a 7 días continuos.<br>
                    Bovinos, ovinos, equinos: 2 ml de BROMEG MDKR por 20 – 40 Kg de peso vivo (0.5 mg de Bromehexina por cada kg de peso vivo) durante 5 a 7 días continuos.</p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>Consérvese en lugar fresco, seco y protegido de la luz. </p>
                    
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
                    <img class="img-fluid" src="Public/images/bromeg-mdkr_.jpg" alt="">
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