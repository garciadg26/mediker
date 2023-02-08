
    <?php
        $color_white = "si";
        $producto = "Ovoplex";
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
                    <p>Registro: Q-0694-055</p>
                    <br>
                    

 
                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>OVOPLEX es una solución análoga estéril que consiste en GnRH (hormona liberadora de gonadotropina). La habilidad de inducir la ovulación acarrea beneficios obvios. El acetato de deslorelina es un análogo de GnRH inyectable de liberación sostenida indicado para inducir la ovulación en las primeras 48 h de tratamiento en yeguas con un folículo entre 30 y 40 mm de diámetro, incrementando de esta manera la eficiencia durante la temporada reproductiva de las yeguas.</p>
                    
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 1 ml contiene:
                        Deslorelina Acetato 1.8 mg
                        Vehículo c.b.p.: 1 ml.
                    </p>
                    
                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>OVOPLEX está indicado para inducir la ovulación las primeras 48 h de tratamiento en yeguas en estro con un folículo ovárico de entre 30 y 40 mm de diámetro.</p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>Administrar 1 ml por vía intramuscular en la tabla cuello por ciclo estral, 48 horas antes de la ovulación deseada. Antes de la administración, debe determinarse por palpación rectal o ultrasonografía que la yegua en ciclo estral tiene por lo menos un folículo ovárico de entre 30 y 40 mm de diámetro. La efectividad depende de un diagnóstico certero del estro y la detección del folículo. Únicamente deberá administrarse 1 ml por yegua durante ciclo estral.</p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>
                        No deberá aplicarse a yeguas sensibles al acetato de deslorelina. Para uso en équidos únicamente (yeguas en estro). No se administre este producto en equinos para consumo humano. Deberá aplicarse vía IM exclusivamente. No es para uso en humanos. Mantener lejos de los niños. Mujeres embarazadas y mujeres en edad reproductiva deberán manipular cuidadosamente el producto. La administración accidental puede tener como consecuencia una interrupción del ciclo menstrual. Se deberá evitar el contacto directo con la piel. Si ocurre un contacto, deberá lavarse las manos inmediatamente con alcohol, seguido de jabón y agua, ya que este producto es insoluble en agua. En caso de administración accidental en el humano, consultar con su médico inmediatamente.
                        Precauciones especiales para la destrucción de los medicamentos no utilizados o envases vacíos: Todo medicamento veterinario no utilizado o los residuos derivados del mismo, deberán eliminarse de acuerdo a las normativas locales. 
                    </p>
                    
                    <h6 class="tit_tercero">Especies:</h6>
                    <div class="con_especies">
                        <div class="item_especies">
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
                    <img class="img-fluid" src="Public/images/ovoplex-th.jpg" alt="">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/Hormonales-Ovoplex.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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