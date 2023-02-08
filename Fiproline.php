
    <?php
        $color_white = "si";
        $producto = "Fiproline";
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
                    <p>Registro: Q-0694</p>
                    <br>
 
                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>Es un ectoparasiticida a base de fipronil al 2% para tratar y controlar toda infestación de moscas y garrapatas (Boophilus microplus, B. annulatus, Amblymma spp. ), mosca de los cuernos (Haematobia irritans), piojos masticadores (Damalinia bovis) y piojos chupadores (Linognathus vitul) del ganado bovino.</p>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Ingrediente activo: Fipronil P/P.
                        5-amino.1.(2,6-dicloro-a,a,a-trifloruro-p-tolil)-4- trifluorometilsulfinilpirazol-3-carbonitrilo.
                        (Equivalente a 20 g de l.a / L a 25° C): 2%
                        Ingredientes inertes:
                        Solvente, Vehículo y Dispersante: 98%
                    </p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>Aplicar en el dorso del animal a lo largo del lomo desde la cruz hasta la base de la cola del bovino 5 ml por cada 100kg peso. (Consulta la tabla de dosis).</p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>
                        Use el equipo de protección para realizar con seguridad las operaciones de manejo y aplicación del producto (guantes, overol y botas, además de protección para nariz y boca como respirador y careta protectora). Es necesario el aseo personal completo (baño y cambio de ropa) después de la jornada de trabajo.
                        En caso de utilizar equipo aplicador, lavar con agua y jabón para eliminar los residuos del producto que queden en el equipo. No coma, beba o fume durante la aplicación de este producto. No almacenar junto a productos alimenticios, ropa o forrajes. 
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
                        -->
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/cerdito.svg" alt="">
                        </div> -->
                        <div class="item_especies">
                            <img src="Public/images/svg/vaca.svg" alt="">
                        </div>
                        <!--
                        <div class="item_especies">
                            <img src="Public/images/svg/caballo.svg" alt="">
                        </div> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="Public/images/fiproline.th.jpg" alt="">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/Fiproline.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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