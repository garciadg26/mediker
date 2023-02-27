
    <?php
        $color_white = "si";
        $producto = "Vitaforce C MDKR";
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
                    <p>Registro: Q-0694-072</p>
                    <br>
                    


 

                    

                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>VITAFORCE C MDKR es un suplemento vitamínico líquido, concentrado, soluble en agua, diseñado para administración a través del agua de bebida cuando los requerimientos vitamínicos son elevados. VITAFORCE C MDKR está elaborado a base de 12 vitaminas esenciales tanto hidro como liposolubles primordiales para el óptimo crecimiento, desarrollo y desempeño de animales en situaciones de estrés, deficiencias vitamínicas, enfermedad y alta producción como lo son las aves, cerdos, becerros, vacas, cabras, caballos y conejos.</p>

                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 100 ml contienen: <br>
                        Vitamina A (Retinol) 5’000,000 UI <br>
                        Vitamina D3 (Calciferol) 500,000 UI <br>
                        Vitamina E (Alfa Tocoferol) 5,000 UI <br>
                        Vitamina K (Fitomenadiona) 2 g <br>
                        Vitamina B1 (Tiamina) 1 g <br>
                        Vitamina B2 (Riboflavina) 9 g <br>
                        Vitamina B3 (Niacina) 12.35 g <br>
                        Vitamina B5 (Ácido pantoténico) 6.50 g <br>
                        Vitamina B6 (Piridoxina) 1.75 g <br>
                        Vitamina B12 (Cianocobalamina) 0.10 g <br>
                        Vitamina B9 (Ácido Fólico) 0.01 g <br>
                        Vitamina C (Ácido Ascórbico) 25.00 g <br>
                        Vehículo c.b.p. 100 ml <br>
                    </p>

                    <h6 class="tit_tercero">Dosis y Administración:</h6>
                    <p>Se administra de forma oral en el agua de bebida de aves, cerdos, becerros, vacas, cabras, caballos y conejos. 30 ml en 1000 L de agua de bebida durante 3 a 8 días consecutivos o de acuerdo a lo recomendado por el médico veterinario. Al dosificar contenedores con gran capacidad de agua, se sugiere realizar una pre-dilución y agregar al resto de agua a medicar.</p>

                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>Agítese antes de usar. No se deje al alcance de los niños. Producto de uso exclusivo en medicina veterinaria. Almacénese en lugar fresco, seco y limpio. </p>


                    
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
                    <img class="img-fluid" src="Public/images/vitaforce-c-mdkr.jpg" alt="Mediker vitaforce-c-mdkr">
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