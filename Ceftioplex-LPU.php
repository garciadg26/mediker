
    <?php
        $color_white = "si";
        $producto = "Ceftioplex LPU";
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
                    <p>Registro: Q-0694-006</p>
                    <br>
                    

                    

                    

 
                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>CEFTIOPLEX LPU es un excelente antibiótico de amplio espectro, formulado a base de Ceftiofur, Cefalosporina de cuarta generación, activo contra bacterias gram positivas y gram negativas, incluyendo variedades productoras de betalactamasa. CEFTIOPLEX LPU es bacteriolítico y bactericida ya que actúa inhibiendo la síntesis de la pared celular.</p>

                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 100 ml contiene: <br>
                        Ceftiofur HCL 5.0 g. <br>
                        Vehículo c.b.p.: 100 ml.
                    </p>

                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>
                        Bovinos: 2 – 4 ml por cada 100 kg de peso vivo. <br>
                        Porcinos: 1 – 3 ml por cada 50 kg de peso vivo. <br>
                        Equinos: 2 – 3 ml por cada 50 kg de peso vivo. <br>
                        Caninos: 1 ml por cada 25 kg de peso vivo. <br>
                        Aves: 1 ml por cada 10 kg de peso vivo.
                    </p>

                    <h6 class="tit_tercero">Vía de administración:</h6>
                    <p>
                        Bovinos, porcinos y Equinos: Intravenosa (diluido en suero salino) ó intramuscular.
                        Caninos: subcutánea.
                        No administrar más de 10 ml. por sitio de aplicación.
                    </p>   

                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>
                        Manténgase fuera del alcance de los niños. No es de uso humano. Las cefalosporinas pueden llegar a causar reacciones alérgicas en individuos sensibles. <br>
                        Almacenar en lugar fresco seco y protegido de la luz. 
                    </p>




                    <h6 class="tit_tercero">Especies:</h6>
                    <div class="con_especies">
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/gato.svg" alt="">
                        </div> -->
                        <div class="item_especies">
                            <img src="Public/images/svg/perro.svg" alt="">
                        </div>
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/cabra.svg" alt="">
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/borrego.svg" alt="">
                        </div> -->
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
                    <img class="img-fluid" src="Public/images/ceftioplex-lpu.jpg" alt="Mediker ceftioplex lpu">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/Antibiotico-Ceftioplex-LPU.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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