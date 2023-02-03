
    <?php
        $color_white = "si";
        $producto = "Endectoplex L.A. 3.15%";
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
                    <p>Registro: Q-0694-018</p>
                    <br>
                    


                    
                    <h6 class="tit_tercero">Indicaciones:</h6 class="tit_tercero">
                    <p>Endectocida de larga acción para el tratamiento y control de parásitos internos, nematodos, pulmonares, gastroentéricos y renales (en estado larvario o de completo desarrollo) y algunos externos (ácaros y piojos) comunes en los bovinos durante cualquier etapa de su vida reproductiva. Su alta concentración le confiere un tiempo de acción mayor, lo que le permite proteger al ganado contra los parásitos hasta por 90 días con una sola aplicación.</p>

                    <h6 class="tit_tercero">Indicaciones:</h6 class="tit_tercero">
                    <p>Está indicado para el tratamiento y control de los endoparásitos, tanto gastrointestinales como pulmonares y renales en sus formas adultas y estados larvarios y como aporte básico de las vitaminas A, D y E en bovinos, porcinos, ovinos y caprinos.</p>

                    <h6 class="tit_tercero">Fórmula:</h6 class="tit_tercero">
                    <p>
                        Cada 1 ml contienen: <br>
                        Ivermectina 31.5 mg <br>
                        Vehículo c.b.p. 1 ml
                    </p>

                    <h6 class="tit_tercero">Dosis:</h6 class="tit_tercero">
                    <p>Bovinos: 1 ml/50kg de peso vivo (630 mcg/kg).</p>

                    <h6 class="tit_tercero">Advertencias:</h6 class="tit_tercero">
                    <p>
                        No se use en vacas en producción de leche para consumo humano. <br>
                        No destinar para consumo humano la carne de animales tratados, hasta 122 días después de la última aplicación. Manténgase en un lugar fresco y seco protegido de la luz solar directa. <br>
                        Precauciones especiales para la destrucción de los medicamentos no utilizados o envases vacíos: Todo medicamento veterinario no utilizado o los residuos derivados del mismo deberán eliminarse de conformidad con las normativas locales. <br>
                        Los organismos acuáticos son altamente sensibles a la toxicidad de la Ivermectina por lo cual los recipientes vacíos y cualquier contenido residual deben ser desechados en forma segura enterrándolos o incinerándolos. 
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
                    <img class="img-fluid" src="Public/images/endectoplex-la-315.jpg" alt="Mediker endectoplex la 315">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/desparasitante-EndectoplexLA-315.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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