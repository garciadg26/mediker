
<?php
    $color_white = "si";
    $categoria = "antiinflamatorios";
    $cadena =str_replace(' ', '-', $categoria);
    $title = "$categoria | Mediker - Comercializadora Pecuaria de México";
?>
<?php include_once "Public/includes/header.php"; ?>
</head>
<body>

    <!-- MENÚ DE NAVEGACIÓN -->
    <?php include_once "Public/includes/nav.php"; ?>

    <!-- ESPACIO MENU FIXED -->
    <div class="space_fixed_grey"></div>

    <!-- BREADCRUMB -->
    <section id="breadcrumb" class="section_breadcrumb bg_breadcrumb">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="productos.php">PRODUCTOS</a></li>
                        <li class="breadcrumb-item active text-uppercase" aria-current="page"><?php echo $categoria;?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- PRODUCTOS -->
    <section id="productos_filter" class="productos_general">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-12 cont_iqz">
                    <!-- MENÚ IZQUIERDO -->
                    <div id="menu_izq" class="cont_menu_izq">
                        <?php include 'Public/includes/submenu.php'; ?>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 cont_productos_der_">
                    <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">

                        <h4 class="tit_secundario text-uppercase mb-5"><?php echo $categoria;?></h4>
                        
                        <div class="row">

                        <!-- PRIMERA FILA -->

                            <div class="col-12 col-lg-4">
                                <a href="Dexaplex-MDKR.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/dexaplex-mdkr-01.jpg" alt="Mediker Dexaplex MDKR" width="130">
                                            <p>Dexaplex MDKR</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-4">
                                <a href="Fluniplex-MDKR.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/fluniplex-mdkr-01.jpg" alt="Mediker Fluniplex MDKR" width="130">
                                            <p>Fluniplex MDKR</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-4">
                                <a href="Piroplex.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/piroplex-01.jpg" alt="Mediker Piroplex" width="130">
                                            <p>Piroplex</p>
                                        </div>
                                    </div>
                                </a>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php include_once "Public/includes/footer.php"; ?>
    <script type="text/javascript" src="Public/js/pagination.js"></script>

</body>
</html>