
    <?php
        $color_white = "si";
        $producto = "Mastiplex 2E";
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
                    <p>Registro: Q-0694-017</p>
                    <br>
                    


            
 

                    <p>Infusión intramamaria de amplio espectro</p>

                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>
                        Es una infusión intramamaria de amplio espectro, a base de Espiramicina y Enrofloxacina, asociadas a Diclofenaco, con efecto bactericida, bacteriostático y antiinflamatorio. <br>
                        La fórmula de Mastiplex 2E esta optimizada con un excipiente que incrementa la eficacia de sus ingredientes.fórmula de MASTIPLEX PLUS está optimizada con un excipiente que incrementa la eficacia de sus ingredientes, haciendo penetrar profundamente las sustancias activas a las células de destino.
                    </p>

                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>Para el tratamiento de mastitis contagiosa o ambiental, causadas por microorganismos sensibles a la fórmula.</p>

                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 8 g contiene: <br>
                        Enrofloxacina HCl 200 mg <br>
                        Espiramicina Adipato 200 mg <br>
                        Diclofenaco Sódico 50 mg br
                        Vehículo c.b.p.: 8 g.
                    </p>

                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>
                        Bovinos: Administrar el contenido de una jeringa cada 24 horas durante 3 días consecutivos. <br>
                        Caprino: Administrar la mitad de la jeringa cada 24 horas, durante 1 a 2 días.
                    </p>

                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>Manténgase fuera del alcance de los niños. Protéjase de la luz. </p>


                    
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
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/borrego.svg" alt="">
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/gallina.svg" alt="">
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/cerdito.svg" alt="">
                        </div> -->
                        <div class="item_especies">
                            <img src="Public/images/svg/vaca.svg" alt="">
                        </div>
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/caballo.svg" alt="">
                        </div> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="Public/images/mastiplex-2e.jpg" alt="">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/MASTIPLEX-2E.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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