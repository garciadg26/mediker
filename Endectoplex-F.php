
    <?php
        $color_white = "si";
        $producto = "Endectoplex F";
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
                    <p>Registro: Q-0694-049</p>
                    <br>
                    


 
                    
                    

 
                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>Endectoplex F es un endectocida de amplio espectro y acción prolongada, está indicado para el tratamiento y control efectivo de los parásitos gastrointestinales y pulmonares, asi como en parásitos externos y fasciola hepática tanto en sus etapas larvarias desde las 6 semanas de edad, así como sus etapas adultas en bovinos.</p>

                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 1 ml contienen: <br>
                        Ivermectina 10 mg <br>
                        Clorsulón 100 mg <br>
                        Vehículo c.b.p. 1 ml
                    </p>

                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>
                        1 ml por cada 50 kg de peso vivo. <br>
                        No aplicar más de 10 ml por sitio de aplicación. <br>
                        Esta dosis proporciona 2000 mcg de ivermectina y 2 mg de clorsulón por kg de peso vivo.
                    </p>

                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>
                        No aplicar este medicamento por vía endovenosa o intramuscular. <br>
                        Manténgase fuera del alcance de los niños. <br>
                        Consérvese en lugar fresco y seco, no expuesto a la luz solar directa. <br>
                        La carne o leche proveniente de los animales tratados con este producto, no deben de ser destinados para consumo humano, sino hasta después de transcurridos 28 días posteriores a la última aplicación. <br>
                        Los envases se deben desechar en forma segura, enterrándolos o incinerándolos.            
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
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/cerdito.svg" alt="">
                        </div> -->
                        <div class="item_especies">
                            <img src="Public/images/svg/vaca.svg" alt="">
                        </div>
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/caballo.svg" alt="">
                        </div> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="Public/images/endectoplex-f.jpg" alt="Mediker endectoplex f">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/desparasitante-EndectoplexF.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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