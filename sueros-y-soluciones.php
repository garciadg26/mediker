
<?php
    $color_white = "si";
    $categoria = "sueros y soluciones";
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
                                <a href="isosol-mdkr.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/isosol-mdkr1.jpg" alt="Mediker Isosol MDKR" width="130">
                                            <p>Isosol MDKR</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-4">
                                <div class="article-loop">
                                    <a href="agua-esteril-mdkr.php?cat=<?php echo $cadena; ?>" class="nom_producto">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/agua-esteril-mdkr-3.jpg" alt="Mediker Agua Estéril MDKR" width="130">
                                            <p>Agua Estéril MDKR</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-4">
                                <div class="article-loop">
                                    <a href="soldex-mdkr.php?cat=<?php echo $cadena; ?>" class="nom_producto">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/soldex-mdkr4.jpg" alt="Mediker Soldex 50% MDKR" width="130">
                                            <p>Soldex 50% MDKR</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-4">
                                <div class="article-loop">
                                    <a href="buffer-mdkr.php?cat=<?php echo $cadena; ?>" class="nom_producto">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/buffer-mdkr1.jpg" alt="Mediker Buffer 7.5% MDKR" width="130">
                                            <p>Buffer 7.5% MDKR</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-4">
                                <div class="article-loop">
                                    <a href="hartmann-mdkr.php?cat=<?php echo $cadena; ?>" class="nom_producto">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/hartmann-mdkr1.jpg" alt="Mediker Hartmann MDKR" width="130">
                                            <p>Hartmann MDKR</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-4">
                                <div class="article-loop">
                                    <a href="solucion-hipertonica.php?cat=<?php echo $cadena; ?>" class="nom_producto">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/solucion-hipertonica-mdkr1.jpg" alt="Mediker Solución Hipertónica" width="130">
                                            <p>Solución Hipertónica</p>
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