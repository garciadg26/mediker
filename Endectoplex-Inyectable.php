
    <?php
        $color_white = "si";
        $producto = "Endectoplex Inyectable";
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
                    <p>Registro: Q 0694-003</p>
                    <br>
                    


 
                    

                    

 
                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>Endectocida para el tratamiento y control de parásitos internos, nematodos pulmonares, gastroentéricos y renales, (en estado larvario o de completo desarrollo) y algunos externos (ácaros y piojos) comunes en los bovinos y porcinos durante cualquier etapa de su vida productiva.</p>

                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 1 ml contienen: <br>
                        Ivermectina 10 mg <br>
                        Vehículo c.b.p. 1 ml <br>
                    </p>

                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>
                        Bovinos en engorda: 1 ml/50 kg de peso (0.2 mg/kg). <br>
                        Porcinos en engorda: 1 ml/33 kg de peso (0.3 mg/kg).
                    </p>

                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>
                        No utilizar este producto 28 días antes del sacrificio de los animales destinados al consumo humano. <br>
                        No se recomienda su empleo en bovinos lecheros. <br>
                        Almacenar en un lugar fresco, seco y protegido de la luz. <br>
                        Prohibido el uso de este producto en el control de garrapatas Boophilius spp. <br>
                        Dado que la ivermectina tiene efectos adversos sobre algunas especies de organismos acuáticos, todos los sobrantes de producto y envases vacíos deberán desecharse lejos de cualquier cuerpo de agua. 
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
                        </div> -->
                        <div class="item_especies">
                            <img src="Public/images/svg/cerdito.svg" alt="">
                        </div>
                        <div class="item_especies">
                            <img src="Public/images/svg/vaca.svg" alt="">
                        </div>
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/caballo.svg" alt="">
                        </div> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="Public/images/endectoplex-inyectable.jpg" alt="Mediker endectoplex inyectable">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/desparasitante-Endectoplex-Inyectable.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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