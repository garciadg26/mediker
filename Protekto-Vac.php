
    <?php
        $color_white = "si";
        $producto = "Protecto Vac";
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
                    <p>PROTEKTO VAC es un estabilizador de agua de nueva generación que está especialmente diseñado para eliminar los efectos negativos de oxidantes, desinfectantes y otros elementos nocivos que afectan el Ph, cuando se añade el agua destinada para vacunación.<br>
                    Disolver 1 paquete de 100 gramos de PROTEKTO VAC por cada 1,000 litros de agua o por cada 20,000 aves a vacunar.<br>
                    La distribución uniforme del colorante azul en el agua asegura que el estabilizador esté bien mezclado y la solución es inmediatamente segura para añadir la vacuna. El colorante del producto es intenso y sirve como herramienta para que el vacunador revise la distribución de la vacuna en las líneas de bebedero y determine el porcentaje de aves vacunadas.</p>
                    
                    <h6 class="tit_tercero">Ventajas:</h6>
                    <p>Producto altamente soluble que reduce el tiempo de mezclado.<br>
                    Su efecto es inmediato para eliminar el impacto negativo del agua sobre la vacuna.<br>
                    Elimina desinfectantes disueltos y ajusta el Ph del agua para mantenerla en un punto neutro.<br>
                    El colorante azul ofrece garantía visual de que el estabilizador esté bien mezclado, de poder revisar la distribución de la vacuna en las líneas de bebederos y ayuda, por la alta concentración de colorantes en la fórmula, a identificar las aves vacunadas.<br>
                    No contiene ingredientes de origen animal. No tapa los bebederos.</p>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>Cada 100 g contiene:<br>
                    Hiposubsulfito de sodio 10.0 g<br>
                    Glucosa 35.0 g<br>
                    Arginina 8.0 g<br>
                    L-lisina 8.0 g<br>
                    Sal de ethyil (4(p-(ethyl m(sulfobenzil)<br>
                    amino-alpha-(o-sulfonyl)benzil<br>
                    (2,5-ciclohexadiene-1 ylidene) 4.0 g<br>
                    Vehículo c.b.p.: 100 g.</p>
                    
                    <h6 class="tit_tercero">Precauciones:</h6>
                    <p>No es para estabilizar el agua que se emplea para aplicar vacunas por aerosol o aplicaciones de vacunas inyectables. Este producto está específicamente formulado para proteger las vacunas que se administran en el agua de bebida solamente. Guárdelo en un lugar fresco y seco. Mantenerlo fuera del alcance de los niños. No es para consumo humano. </p>

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
                    <img class="img-fluid" src="Public/images/protekto-vac.jpg" alt="">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/PROTEKTO-VAC.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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