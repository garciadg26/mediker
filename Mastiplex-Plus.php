
    <?php
        $color_white = "si";
        $producto = "Mastiplex Plus";
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
                    <p>Registro: Q-0694-008</p>
                    <br>
                    


        

                    <p>
                        Lactantes <br>
                        Infusión intramamaria de amplio espectro
                    </p>

                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>
                        MASTIPLEX PLUS es una excelente Infusión Intramamaria, formulada con tres Importantes antibióticos y un potente desinflamatorio, altamente sinérgicos, de amplio espectro y con una muy elevada efectividad sobre los principales agentes causantes de las mastitis contagiosas y ambientales. <br>
                        La fórmula de MASTIPLEX PLUS está optimizada con un excipiente que incrementa la eficacia de sus ingredientes, haciendo penetrar profundamente las sustancias activas a las células de destino.
                    </p>

                    <h6 class="tit_tercero">Mecanismo de acción:</h6>
                    <p>
                        Tetraciclinas: Actúan inhibiendo la síntesis protéica al unirse a la subunidad 30 S del ribosoma y no permite la unión de la (tRNA) a éste. <br>
                        Neomicina: El mecanismo de acción consiste en la unión del antibiótico al segmento 30 S del ribosoma y es de forma irreversible, por lo que mata a la bacteria. <br>
                        Bacitracina: Es bacteriostática y bactericida. Actúa inhibiendo la incorporación de aminoácidos y nucleótidos en la pared celular, pero también es capaz de dañar las membranas produciendo la lisis y muerte de la bacteria. <br>
                        Prednisolona: Suprime todos los aspectos de la inflamación aguda o crónica. En este sentido, inhibe la dilatación microvascular, el incremento en la permeabilidad y el edema, la hiperalgia y la deposición de fibrina.
                    </p>

                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>
                        MASTIPLEX PLUS esta indicado para el tratamiento de mastitis bovina. MASTIPLEX PLUS debe utilizarse inmediatamente en los primeros signos de inflamación de la glándula mamaria y en los primeros signos de alteración de la composición física de la leche, indicados en la prueba de California o cualquier otro método donde la cuenta leucocitaria sea elevada, o se hayan aislado patógenos susceptibles en la leche. <br>
                        MASTIPLEX PLUS ha demostrado tener excelentes resultados en el tratamiento de mastitis contra cepas susceptibles de Streptococcus agalactiae y Staphylococcus aureus, incluyendo cepas productoras de penicilinasas.
                    </p>

                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 8 g contiene: <br>
                        Tetraciclina HCL: 200 mg <br>
                        Neomicina Sulfato: 250 mg <br>
                        Bacitracina: 2,000 U.I. <br>
                        Prednisolona: 10 mg <br>
                        Vehículo c.b.p.: 8 g.
                    </p>

                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>
                        Bovinos: Administrar el contenido de una jeringa cada 12 hrs durante 2 días. <br>
                        Caprinos: Administrar la mitad de la jeringa cada 12 hrs durante 1 a 2 días.
                    </p>

                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>
                        Tiempo de retiro en leche: 72 horas después de la última aplicación. <br>
                        Manténgase fuera del alcance de los niños. <br>
                        Consérvese en lugar fresco, seco y protegido de la luz. 
                    </p>


                    
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
                    <img class="img-fluid" src="Public/images/mastiplex-plus-detalle.jpg" alt="">
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