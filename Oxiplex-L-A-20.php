
    <?php
        $color_white = "si";
        $producto = "Oxiplex L.A. 20%";
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
                    <p>(OXITETRACICLINA L. A.)</p>
                    <br>

 
                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>
                        OXIPLEX L.A. 20% es un antibiótico de amplio espectro y larga acción formulado a base de Oxitetraciclina en solución acuosa, con efecto bacteriostático. Indicado en el tratamiento de enfermedades comunes de los animales originadas por gérmenes gram (+) y gram (-). Los componentes de su fórmula le confieren una excelente biodisponibilidad y absorción controlada y prolongada en el sitio de inyección del antibiótico.<br>
                        OXIPLEX L.A. 20% es altamente soluble en agua y no produce irritación, por lo que se puede utilizar en infusiones intrauterinas.
                    </p>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 1 ml contiene:<br>
                        Oxitetraciclina: 200 mg<br>
                        Vehículo c.b.p.: 1 ml.
                    </p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>
                        Bovinos: 1 ml/10 kg de peso (equivalente a 20 mg/kg de peso) cada 24 horas intramuscular.<br>
                        Porcinos: 1 ml/10 kg de peso (equivalente a 20 mg/ kg de peso) cada 48 horas intramuscular.<br>
                        Caprinos y ovinos: 0.3 - 0.55 ml por cada 10 kg de peso (equivalente a 6-11 mg/kilo de peso) cada 24 horas intramuscular.<br>
                        Aves y pavos: 0.22 ml/kg de peso (equivalente a 50 mg por kilogramo de peso) cada 24 horas subcutánea.
                    </p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>No se ha determinado el efecto sobre la gestación. No administrar en animales de menos de 3 días de edad. No consumir la carne de animales tratados hasta después de 28 días en bovinos y 21 días en porcinos, después de la última aplicación. No consumír la leche de animales tratados hasta 12 horas después de la ultima aplicación. No usar en bovinos productores de leche y no usar en aves productoras de huevo. No exceder más de 4 días de administración para cualquier especie. </p>
                                        
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
                    <img class="img-fluid" src="Public/images/oxiplex-la-20-a.jpg" alt="">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/OXIPLEX-LA-20.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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