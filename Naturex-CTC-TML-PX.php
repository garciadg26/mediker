
    <?php
        $color_white = "si";
        $producto = "Naturex CTC+TML PX";
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
                    <p>Registro: Q-0694-071</p>
                    <br>

                    <p> Clortetraciclina + Tiamulina en premezcla</p>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p> Cada 1000 g contienen: <br>
                    Clortetraciclina 150 g <br>
                    Fumarato Hidrogenado de Tiamulina 50 g <br>
                    Vehículo c.b.p.: 1000 g.</p>
                    
                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p> NATUREX CTC + TML PREMIX es la mezcla de Tiamulina antibiótico macrólido que presenta fuerte acción contra Microplasmas y de Clortetraciclina, un antibiótico de amplio espectro con acción bacteriostática contra los Micoplasmas y microorganismos patógenos secundarios en la enfermedad respiratoria crónica de las aves.</p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>
                    <p> Pollos de engorda: <br>
                    Administrar de 1 a 2 kg de NATUREX CTC + TML PREMIX por tonelada de alimento. Medicar durante la 1ª ó 2ª semana de edad, para el control de infecciones respiratorias y digestivas. <br>
                    Reproductora, aves en crianza, aves comerciales: <br>
                    Administrar 1 kg de NATUREX CTC + TML PREMIX por tonelada de alimento. Medicar durante la 1ª, 6ª, y 16ª semana de edad, en la crianza y una semana al mes rompiendo postura hasta el pico de producción.</p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p> No utilizar este producto 5 días antes del sacrificio de los animales destinados para consumo humano.
                    No se debe combinar con coccidiostatos monensina, salinomicina y narasina.
                    Consérvese en lugar fresco, seco y no expuesto a la luz solar directa.</p>
                    
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
                        </div> -->
                        <div class="item_especies">
                            <img src="Public/images/svg/gallina.svg" alt="">
                        </div>
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/cerdito.svg" alt="">
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/vaca.svg" alt="">
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/caballo.svg" alt="">
                        </div> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="Public/images/naturex-ctc-tml.jpg" alt="">
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