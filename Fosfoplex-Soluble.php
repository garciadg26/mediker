
    <?php
        $color_white = "si";
        $producto = "Fosfoplex Soluble 10%";
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
                    <p>Registro: Q-0694-015</p>
                    <br>
                    

 
                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>Cada 100 ml contiene:<br>
                    Fosfomicina sódica 10 g<br>
                    Vehículo c.b.p.: 100 ml</p>
                    
                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>FOSFOPLEX SOLUBLE 10% es una solución a base de Fosfomicina para ser administrada en el agua de bebida, indicada para el tratamiento de las enfermedades infecciosas producidas por bacterias gram positivas y gram negativas.</p>
                    
                    <h6 class="tit_tercero">Mecanismo de Acción:</h6>
                    <p>FOSFOPLEX SOLUBLE 10% es bacteriostático.</p>
                    
                    <h6 class="tit_tercero">Indicaciones:</h6>
                    <p>FOSFOPLEX SOLUBLE 10% está indicado para el tratamiento de enfermedades infecciosas susceptibles a la fórmula en gallináceas, pavos, cerdos y bovinos. Se indica en los casos de colibacilosis, enfermedad respiratoria crónica, infecciones estafilocócicas, listeriosis, cólera aviar, coriza infecciosa y enfermedades causadas por microorganismos sensibles a la Fosfomicina.</p>
                    
                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>En Gallináceas y Pavos: 1 a 2 ml de Fosfoplex Soluble 10% por litros de agua lo que equivale de 10 a 20 kg de peso vivo.<br>
                    En Cerdos: 4 a 8 mg/kg de peso vivo equivalente a 1 litro de Fosfoplex por cada 12,500 a 25,000 kg de peso vivo, por un lapso de 5 a 7 días.<br>
                    En Bovinos: 10 a 20 mg/kg de peso vivo durante 3 a 5 días.</p>
                    
                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>La carne de los animales tratados no deberá destinarse para consumo humano hasta 7 días después del último tratamiento. Consérvese en un lugar fresco y seco, fuera del alcance de los niños y protegido de la luz. </p>

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
                    <img class="img-fluid" src="Public/images/fosfoplex-soluble-10.jpg" alt="">
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