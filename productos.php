
<?php
    $color_white = "si";
    $categoria = "antibióticos y quimioterápicos";
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
                            
                            <div class="col-12 col-lg-4 pag">
                                <a href="Fosfoplex-E-10.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/fosfoplex-e-10-01.jpg" alt="Mediker Fosfoplex E 10%" width="130">
                                            <p>Fosfoplex E 10%</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-4 pag">
                                <a href="Gentaplex-10.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/gentaplex-10-mdkr-01.jpg" alt="Mediker Gentaplex 10%" width="130">
                                            <p>Gentaplex 10%</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-4 pag">
                                <a href="Ceftioplex-LPU.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/ceftioplex-lpu.jpg" alt="Mediker Ceftioplex LPU" width="130">
                                            <p>Ceftioplex LPU</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-4 pag">
                                <a href="Florfeniplex-D-30.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/florfeniplex-d-30.jpg" alt="Mediker Florfeniplex D 30%" width="130">
                                            <p>Florfeniplex D 30%</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-4 pag">
                                <a href="Kanamicina-MDKR-10.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/kanamicina-mdkr-10-01.jpg" alt="Mediker Kanamicina MDKR 10%" width="130">
                                            <p>Kanamicina MDKR 10%</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-4 pag">
                                <a href="Betaplex.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/betaplex.jpg" alt="Mediker Betaplex" width="130">
                                            <p>Betaplex</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-4 pag">
                                <a href="Sulfaplex-Inyectable.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/sulfaplex-01.jpg" alt="Mediker Sulfaplex Inyectable" width="130">
                                            <p>Sulfaplex Inyectable</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-4 pag">
                                <a href="Tilosina-200-MDKR.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/tilosina200-mdkr-01.jpg" alt="Mediker Tilosina 200 MDKR" width="130">
                                            <p>Tilosina 200 MDKR</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-4 pag">
                                <a href="Pulmoplex-Inyectable.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/pulmoplex-inyectable-01.jpg" alt="Mediker Pulmoplex Inyectable" width="130">
                                            <p>Pulmoplex Inyectable</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="col-12 col-lg-4 pag">
                                <a href="Oxiplex-L-A-20.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/dexaplex-mdkr-01aa.jpg" alt="Mediker Oxiplex L.A. 20%" width="130">
                                            <p>Oxiplex L.A. 20%</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="col-12 col-lg-4 pag">
                                <a href="Oxiplex-5.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/oxiplex-5-01.jpg" alt="Mediker Oxiplex 5%" width="130">
                                            <p>Oxiplex 5%</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="col-12 col-lg-4 pag">
                                <a href="Floxaplex-L-A-15.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/floxaplex-la-15.jpg" alt="Mediker Floxaplex L.A. 15%" width="130">
                                            <p>Floxaplex L.A. 15%</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            

                            <!--===13===-->
                            <div class="col-12 col-lg-4 pag">
                                <a href="Floxaplex-Inyectable-10.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/floxaplex-inyectable-10.jpg" alt="Mediker Floxaplex Inyectable 10%" width="130">
                                            <p>Floxaplex Inyectable 10%</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="col-12 col-lg-4 pag">
                                <a href="Ceftioplex-Suspension.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/ceftioplex-suspension.jpg" alt="Mediker Ceftioplex Suspensión" width="130">
                                            <p>Ceftioplex Suspensión</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="col-12 col-lg-4 pag">
                                <a href="Florfeniplex-F.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/florfeniplex-f.jpg" alt="Mediker Florfeniplex F" width="130">
                                            <p>Florfeniplex F</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="col-12 col-lg-4 pag">
                                <a href="Florfeniplex-DB.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/florfeniplex-db.jpg" alt="Mediker Florfeniplex DB" width="130">
                                            <p>Florfeniplex DB</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="col-12 col-lg-4 pag">
                                <a href="GT-10-20.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/gt-10-20.jpg" alt="Mediker GT 10-20" width="130">
                                            <p>GT 10-20</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-4 pag">
                                <a href="Peni-Estreptoplex.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/peni-estreptoplex.jpg" alt="Mediker Peni Estreptoplex" width="130">
                                            <p>Peni Estreptoplex</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-4 pag">
                                <a href="TGN-Mediker.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/TGN-Mediker.jpg" alt="Mediker TGN Mediker" width="130">
                                            <p>TGN Mediker</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-lg-4 pag">
                                <a href="Pulmoplex-M.php?cat=<?php echo $cadena; ?>" class="nom_producto d-block">
                                    <div class="article-loop">
                                        <div class="cont_p_indv">
                                            <img class="mask img-fluid" src="Public/images/pulmoplex-m.jpg" alt="Mediker Pulmoplex M" width="130">
                                            <p>Pulmoplex M</p>
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