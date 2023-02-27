
    <?php
        $color_white = "si";
        $producto = "Mastiplex TS";
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
                    <p>Registro: Q-0694-009</p>
                    <br>
                    


            
                
                    <p>Secado <br>
                    Infusión intramamaria de amplio espectro</p>

                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>
                        MASTIPLEX TS es una preparación Intramamaria, formulada a base de Tilmicosina, importante antibiótico bacteriostático del grupo de los Macrólidos, con una excelente actividad frente a los microorganismos Involucrados en las mastitis contagiosas y ambientales. MASTIPLEX TS tiene una actividad antibacteriana predominantemente frente a gram (+), con actividad sobre algunas gram (-) y Mycoplasmas, entre las que se pueden mencionar: Staphylococcus aureus, Streptococcus agalactiae, Actynomices spp., E.coli, Salmonella spp., Mycoplasma bovis, Mycoplasma spp. y Acholeplasma laidlawii. <br>
                        <br>
                        La fórmula de MASTIPLEX TS, está optimizada con un excipiente que incrementa la eficacia de sus ingredientes, haciendo penetrar profundamente las sustancias activas a las células de destino.
                    </p>

                    <h6 class="tit_tercero">Mecanismo de acción:</h6>
                    <p>MASTIPLEX TS (Tilmicosina) es un agente bacteriostático que inhibe la síntesis protéica por su unión reversible a la subunidad 50 S ribosomal del microorganismo sensible, en donde interfiere con la formación de complejos de iniciación para la síntesis de cadenas de péptidos o con las reacciones aminoacil translocación. Esto impide a la bacteria continuar con su ciclo vital.</p>

                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>MASTIPLEX TS está Indicado para el tratamiento y control de las infecciones suclínicas, así como para la prevención de nuevas infecciones que pueden ocurrir durante el período de secado causadas por bacterias sensibles a la Tilmicosina.</>

                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 8 g contiene: <br>
                        Tilmicosina fosfato: 1500 mg. <br>
                        Vehículo c.b.p.: 8 g.
                    </p>

                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>
                        Bovinos: <br>
                        Administrar el contenido de una jeringa cada 12 hrs, durante 2 días en vacas destinadas al secado.
                    </p>

                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>
                        No debe aplicarse en ninguna otra especie diferente a los bovinos. <br>
                        No debe ser utilizado en vacas durante el período de lactancia. <br>
                        No combine con otros antibióticos antagonistas a la fórmula. <br>
                        El último tratamiento debe realizarse al menos 45 días antes del parto. <br>
                        Almacenar en un lugar fresco, seco y protegido de la luz. 
                    </p>


                    
                    <h6 class="tit_tercero">Especies:</h6>
                    <div class="con_especies">
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/gato.svg" alt="">
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/perro.svg" alt="">
                        </div> -->
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/cabra.svg" alt="">
                        </div> -->
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
                    <img class="img-fluid" src="Public/images/mastiplex-ts-detalle.jpg" alt="">
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