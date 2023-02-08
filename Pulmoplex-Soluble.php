
    <?php
        $color_white = "si";
        $producto = "Pulmoplex Soluble 25%";
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
                    <p>Registro: Q-0694-010 / TILMICOSINA SOLUBLE</p>
                    <p>Antimicrobiano de amplio espectro en solución.</p>
                    <br>
 

                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>Cada 100 ml contiene:<br>
                    Tilmicosina fosfato: 25 g<br>
                    Vehículo c.b.p.: 100 ml</p>
                    
                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>PULMOPLEX SOLUBLE 25% es un antibiótico macrólido soluble para el tratamiento de infecciones respiratorias en aves, cerdos y bovinos asociados a mycoplasmas, pasteurellas, actinubacillus y actinomyces.</p>
                    
                    <h6 class="tit_tercero">Mecanismos de Acción:</h6>
                    <p>La Tilmicosina es un agente bacteriostático que inhibe la síntesis protéica por su unión reversible a la subunidad 50S del microorganismo sensible, en donde interfiere con la formación de complejos de iniciación para la síntesis de cadenas de péptidos ó con las reacciones aminoacil translocación. Esto impide a la bacteria continuar con su ciclo vital.</p>
                    
                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>PULMOPLEX SOLUBLE 25% está indicado para el tratamiento de enfermedades respiratorias asociadas con Mannheimia haemolytica, Pasteurella multocida y mycoplasmas y otros como Haemophilus somnus, Sthaphylococcus aureus, Streptococcus agalactiae, Actinomyces pyogenes, Clostridium perfringens, Clostridium sordeli, Fusobacterrium necrophorum, E. coli, Salmonella typhimurium, Mycoplasma dispar, Mycoplasma bovirhinis, Mycoplasma bovoculi, Acholeplasma laidlawii.<br>
                    El tratamiento con PULMOPLEX SOLUBLE 25% se caracteriza por lograr en los animales tratados:<br>
                    – Una rápida mejora de los signos clínicos.<br>
                    – Reducción de la temperatura corporal.<br>
                    – Reducción de la mortalidad.<br>
                    – Incremento en la ganancia de peso.<br>
                    Todo esto a consecuencia de la rápida eliminación del agente causal.</p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>Aves: 15 a 20 mg/kg de peso por tres días en el agua de bebida.<br>
                    Cerdos: 15 a 20 mg/kg de peso vivo por cinco días en el agua de bebida.<br>
                    Becerros: 10 mg/ 20 kg de peso vivo por 3 a 5 días en el agua de bebida.</p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>Consérvese en un lugar fresco y seco, fuera del alcance de los niños y protegido de la luz. </p>
                    
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
                    <img class="img-fluid" src="Public/images/pulmoplex-soluble-25.jpg" alt="">
                    <div class="row">
                        <div class="col-md-6 btn_right">
                            <div class="content_btn">
                                <a href="Public/pdf/PULMOPLEX-SOLUBLE-25.pdf" target="_blank" class="btn_gen btn_principal">Descargar ficha técnica</a>
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