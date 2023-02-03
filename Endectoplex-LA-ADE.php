
    <?php
        $color_white = "si";
        $producto = "Endectoplex L.A. + ADE";
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
                    <p>Solución inyectable formulada a base de Ivermectina a alta concentración y adicionada con Vitaminas A, D, y E. Endectoplex L.A. + ADE, es un excelente desparasitante endectocida de larga acción y amplio espectro, que garantiza un período libre de parásitos de mínimo 90 días, está además fortalecido con una aportación de vitaminas A, D y E, en una concentración que cubre los requerimientos necesarios para desarrollar el potencial de producción en la especie de destino.</p>

                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>Está indicado para el tratamiento y control de los endoparásitos, tanto gastrointestinales como pulmonares y renales en sus formas adultas y estados larvarios y como aporte básico de las vitaminas A, D y E en bovinos, porcinos, ovinos y caprinos.</p>

                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 1 ml contienen: <br>
                        Ivermectina 3.15 mg <br>
                        Vitamina A 20,000 000 U.I. <br>
                        Vitamina D3 3,000 000 U.I. <br>
                        Vitamina E 2,000 U.I. <br>
                        Vehículo c.b.p. 1 ml
                    </p>

                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>
                        Bovinos, ovinos y caprinos: 1.0 ml por cada 50 kg de peso. <br>
                        Porcinos: 1.0 ml por cada 33 kg de peso.
                    </p>

                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>
                        No utilizar para el consumo humano la leche procedente de animales tratados con este producto hasta 28 días posteriores a su última aplicación. <br>
                        No aplicar este producto 28 días antes del sacrificio a los animales destinados al consumo humano. <br>
                        No aplicar por vía intravenosa o intramuscular. <br>
                        Mantener este medicamento fuera del alcance de los niños. <br>
                        No se exponga a la luz solar directa, consérvese en lugar fresco. <br>
                        Los organismos acuáticos son altamente sensibles a la toxicidad de la ivermectina, por lo que los residuos y materiales sobrantes deberán desecharse en forma segura incinerándolos o enterrándolos.
                    </p>
                                        

 

                    
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
                        <!-- <div class="item_especies">
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
                    <img class="img-fluid" src="Public/images/endectoplex-la-ade.jpg" alt="Mediker endectoplex la ade">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/desparasitante-EndectoplexLA+ADE.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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