
    <?php
        $color_white = "si";
        $producto = "Eri-C Soluble";
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
                    <p>Registro: Q-0694-055</p>
                    <p></p>
                    <br>
                
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>Cada 1000 ml contiene:<br>
                    Eritromicina Tiocianato 60 g<br>
                    Sulfato de Colistina 12.5 g<br>
                    Vehículo c.b.p.: 1000 ml</p>
                    
                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>ERI-C Soluble es un compuesto que combina ERITROMICINA y COLISTINA que generan sinergia activa para controlar procesos mixtos infecciosos respiratorios y digestivos. Controla MICOPLASMAS y tiene acción local gastroentérica en los animales controlando bacterias complicantes.</p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>En Aves: ERITROMICINA: 20 mg por kilo de peso vivo.<br>
                    COLISTINA: de 50,000 a 100,000 U.I. por kilo de peso vivo.<br>
                    Un litro de ERI-C Soluble trata 3,000 kilos de carne o se puede manejar a dosis de 2 ml por litro de agua de bebida.<br>
                    Se recomienda administrar el tratamiento durante 5 días.</p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>No utilizar este producto 5 días antes del sacrificio de los animales destinados para consumo humano.<br>
                    No se debe combinar con coccidiostatos monensina, salinomicina y narasina.<br>
                    Consérvese en lugar fresco, seco y no expuesto a la luz solar directa. </p>

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
                    <img class="img-fluid" src="Public/images/eri-c-soluble.jpg" alt="">
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