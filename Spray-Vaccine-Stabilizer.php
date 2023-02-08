
    <?php
        $color_white = "si";
        $producto = "Spray Vaccine Stabilizer";
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
                    <!-- <p>Registro: Q-0694-029</p> -->
                    <br>
                
                    <h6 class="tit_tercero">Instrucciones de Uso:</h6>
                    <p>SPRAY VACCINE STABILIZER protege a las vacunas administradas por aspersión. Está diseñado para prolongar la viabilidad y mejorar la efectividad de las vacunas reconstituidas y diluidas para su aplicación por aspersión. Protege a las vacunas de los efectos dañinos del agua corriente de la red bloqueando cloro, minerales disueltos y corrigiendo Ph hacia la neutralidad, incluso en el caso del agua destilada con Ph ácido. No tapa las espreas de las máquinas de aspersión.</p>
                    
                    <h6 class="tit_tercero">Indicaciones para su Uso:</h6>
                    <p>Prepare la cantidad de agua que va a usar para asperjar, agregando 8 ml. de SPRAY VACCINE STABILIZER por cada litro del preparado y agite antes de añadir la vacuna. La distribución uniforme del pigmento azul contenido en el estabilizador asegura que se ha mezclado completamente en el agua y es seguro agregar la vacuna.</p>
                    
                    <h6 class="tit_tercero">Ventajas:</h6>
                    <p>Es un estabilizador de segunda generación especialmente diseñado para la aspersión de vacunas en aves, incluyendo las frágiles vacunas contra la Bronquitis Infecciosa.<br>
                    La estabilización del agua es inmediata.<br>
                    Protege las vacunas de los efectos dañinos del agua corriente de la red o del pozo. Elimina la necesidad de usar agua destilada o bidestilada como diluentes de las vacunas, lo que evita el manejo y almacenamiento de los garrafones de 20 litros: 1 litro de SPRAY VACCINE STABILIZER, reemplaza 125 litros de agua destilada, es decir 6.25 garrafones. Posee un colorante azul que indica que la solución para la aspersión está completamente segura (estabilizada) y lista para agregársele la vacuna. Es ideal para usarse en Solo Vac, aspersoras de mochila y aspersoras con motor de gasolina o eléctrico.</p>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>Cada 100 ml contiene:<br>
                    Thiosulfato de sodio 0.6 g<br>
                    Dextrosa Anhidra 1 g<br>
                    L-Lisina 7.3 g<br>
                    Vehículo c.b.p.: 100 ml.</p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>Consérvese en un lugar fresco, seco y protegido de la luz. No es para uso humano. Almacene a temperatura ambiente. Evite temperaturas extremas. Mantenga el recipiente bien cerrado. </p>

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
                    <img class="img-fluid" src="Public/images/spray-vaccine-stabilizer1.jpg" alt="">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/SPRAY-VACCINE-STABILIZER.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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