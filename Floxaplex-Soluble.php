
    <?php
        $color_white = "si";
        $producto = "Floxaplex 20% Soluble";
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
                    <p>Registro: Q-0694-036</p>
                    <br>
                

 
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>Cada 100 ml contiene:<br>
                    Enrofloxacina 20 g<br>
                    Vehículo c.b.p.: 100 ml</p>
                    
                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>FLOXAPLEX SOLUBLE 20% es un excelente antimicrobiano soluble de amplio espectro, útil en el tratamiento de las enfermedades bacterianas y micoplásmicas de los bovinos, ovinos, porcinos y aves, que viene listo para administrarse en el agua de bebida.</p>
                    
                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>FLOXAPLEX SOLUBLE 20% está indicado en el tratamiento de los principales agentes productores de enfermedades en Aves, como bacterias Gram (-): E.coli, Haemophillus paragallinarum, Pasteurella multocida, Salmonella typhymurium, Pasteurella aureoginosa, Salmonella arizonae, Proteus spp., Salmonella enteritidis. Gram (+): Corynebacterium pyogenes, Staphylococcus aureus, Erysipelotrix rhusiopatiae, Streptococcus spp., Clostridium perfringens. Mycoplasmas: M. gallisepticum, M. sinoviae, M. meleagridis, M. iowae, que producen en las aves las siguientes enfermedades:<br>
                    Sistema Respiratorio: Coriza infecciosa, enfermedad respiratoria crónica, Cólera aviar, Enfermedad Crónica Respiratoria Complicada, Infección de sacos aéreos, Colisepticemia.<br>
                    Sistema Digestivo: Colibacilosis, Tifoidea, Paratifoidea.<br>
                    Genital: Pulorosis, Salpingitis Septicemicas, Colisepticemia, Cólera Aviar, Tifoidea.<br>
                    FLOXAPLEX SOLUBLE 20% está indicado en bovinos para tratar infecciones respiratorias causadas por Mannhemia hemolítica, Pasteurella multocida, Haemophillus somnus.<br>
                    Infecciones digestivas producidas por E.coli, Salmonella spp.<br>
                    Infecciones del tracto genitourinario: E.coli, Corynebacterium spp., Mycoplasma,<br>
                    Ureaplasma spp. Infecciones de la glándula mamaria producidas por E.coli, Staphylococcus aureus, Streptococcus spp. Infecciones septicémicas producidas por Listeria monocytogenes, E.coli, Haemophilus somnus, Salmonella spp. Infecciones purulentas (gabarro, abscesos), causados por Fusobacterium necrophorum, E.coli, Pseudomonas spp., Bacteroides melaninogenicus, Proteus spp.</p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>Aves: 300 a 600 ml por cada 1000 litros de agua, lo que representa 10 a 15 mg por kilogramo de peso.<br>
                    Bovinos: 2.5 a 5 mg por kilogramo de peso.</p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>No deberá utilizarse este producto 5 días antes del sacrificio de los animales para consumo humano. Consérvese en un lugar fresco, seco y protegido de la luz. </p>

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
                    <img class="img-fluid" src="Public/images/floxaplex-20-soluble.jpg" alt="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content_btn">
                                <button type="button" class="btn_gen btn_principal" data-toggle="modal" data-target="#exampleModal">Descargar ficha técnica</button>
                            </div>
                            <!-- MODAL -->
                            <?php include_once "Public/includes/modalDownload.php"; ?>
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