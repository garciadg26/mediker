
    <?php
        $color_white = "si";
        $producto = "EQ-Voral";
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
                    <p>Registro: Q-0694-068</p>
                    <br>
 

 
                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>EQ – VORAL está indicado para el tratamiento y control seguro y efectivo de infestaciones mixtas de cestodos, nemátodos, trematodos y artrópodos que parasitan a los equinos y que se asocian a cólicos frecuentes, diarrea, pérdida de peso y retardo en el crecimiento de los potrillos.</p>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 1 g contiene:
                        Prazicuantel 60 mg.
                        Ivermectina 4.8 mg.
                        Vehículo c.b.p.: 1 g.
                        Modo de uso de la Jeringa:
                        Deslice el anillo hasta la graduación que aparece en el émbolo y ajuste la dosis de acuerdo al peso del animal. Una vez colocado en la marca deseada, retire el tapón de plástico de la punta de la jeringa, coloque la jeringa en el espacio interdental de la boca del caballo y presione el émbolo hasta topar con el anillo, retire la jeringa y levante la cabeza del animal por unos segundos para que se asegure que ha deglutido la pasta.
                    </p>
                    
                    <h6 class="tit_tercero">Vía de Administración:</h6>
                    <p>EQ–VORAL debe ser administrado exclusivamente por vía oral como toma directa mediante una jeringa dosificadora que permite precisión en la dosis</p>
                    
                    <h6 class="tit_tercero">Dósis:</h6>
                    <p>
                        La posología recomendada es de 25 g./600 Kg. de peso o 1 g./24 Kg. de peso.
                        Equivalente a 0.199 mg. de Ivermectina por 1 Kg. de peso y de 2.496 mg. de Prazicuantel por 1 Kg. de peso, correspondiente a 0.0416 g. de EQ-Voral por cada 1 Kg. de PV.
                    </p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>
                        La toxicidad a la dosis recomendada es poco probable. La pasta puede ser usada en animales de todas las edades a partir de los dos meses de edad. Lávese las manos después de usar el producto.
                        No fume ni coma durante la manipulación del producto.
                        No se deje al alcance de los niños ni animales domésticos.
                        Debido a que los organismos acuáticos pueden ser afectados con el producto, los recipientes vacíos y cualquier contenido residual deberán ser desechados enterrándolos o incinerándolos.
                        Conservar el producto en un lugar fresco, seco y protegido de la luz, a una temperatura entre 15 y 30ºC.
                        No utilizar en yeguas productoras de leche destinada al consumo humano. 
                    </p>
                    
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
                        -->
                        <div class="item_especies">
                            <img src="Public/images/svg/caballo.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="Public/images/eq-voral-tt.jpg" alt="">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/Desparasitante-oral-EQ-VORAL.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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