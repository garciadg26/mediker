
<?php
    $color_white = "si";
    $categoria = "intramamarios";
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
                                <a href="Mastiplex-Bio.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/mastiplex-bio.jpg" alt="Mediker Mastiplex Bio" width="130">
                                            <p>Mastiplex Bio</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            
                            <div class="col-12 col-lg-4">
                                <a href="Mastiplex-2E.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/mastiplex-2e-01.jpg" alt="Mediker Mastiplex 2E" width="130">
                                            <p>Mastiplex 2E</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            
                            <div class="col-12 col-lg-4">
                                <a href="Mastiplex-TS.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/mastiplex-ts.jpg" alt="Mediker Mastiplex TS" width="130">
                                            <p>Mastiplex TS</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            
                            <div class="col-12 col-lg-4">
                                <a href="Mastiplex-Dry.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/mastiplex-dry.jpg" alt="Mediker Mastiplex Dry" width="130">
                                            <p>Mastiplex Dry</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            
                            <div class="col-12 col-lg-4">
                                <a href="Mastiplex-Plus.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/mastiplex-plus.jpg" alt="Mediker Mastiplex Plus" width="130">
                                            <p>Mastiplex Plus</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            
                            <div class="col-12 col-lg-4">
                                <a href="Mastiplex-Clox-Dry.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/Mastiplex-Clox-Dry.jpg" alt="Mediker Mastiplex Clox Dry" width="130">
                                            <p>Mastiplex Clox Dry</p>
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