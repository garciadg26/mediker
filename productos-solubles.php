
<?php
    $color_white = "si";
    $categoria = "productos solubles";
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
                                <a href="neumoplex-plus-mdkr.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/neumoplex-plus-mdkr.jpg" alt="Mediker Neumoplex Plus MDKR" width="130">
                                            <p>Neumoplex Plus MDKR</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-4">
                                <a href="Bromeg-MDKR.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/bromeg-mdkr-01.jpg" alt="Mediker Bromeg MDKR" width="130">
                                            <p>Bromeg MDKR</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-4">
                                <a href="Asprin-MDKR.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/asprin-mdkr-01.jpg" alt="Mediker Asprin MDKR" width="130">
                                            <p>Asprin MDKR</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-4">
                                <a href="Doxiplex-Soluble.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/doxiplex-20-soluble-01.jpg" alt="Mediker Doxiplex 20% Soluble" width="130">
                                            <p>Doxiplex 20% Soluble</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-4">
                                <a href="Pulmoplex-Soluble.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/pulmoplex-soluble-25-01.jpg" alt="Mediker Pulmoplex Soluble 25%" width="130">
                                            <p>Pulmoplex Soluble 25%</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-4">
                                <a href="Fosfoplex-Soluble.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/fosfoplex-soluble-10-01.jpg" alt="Mediker Fosfoplex Soluble 10%" width="130">
                                            <p>Fosfoplex Soluble 10%</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-4">
                                <a href="Eri-C-Soluble.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/eri-c-soluble-01.jpg" alt="Mediker Eri-C Soluble" width="130">
                                            <p>Eri-C Soluble</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-4">
                                <a href="Floxaplex-Soluble.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/floxaplex-20-01.jpg" alt="Mediker Floxaplex 20% Soluble" width="130">
                                            <p>Floxaplex 20% Soluble</p>
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