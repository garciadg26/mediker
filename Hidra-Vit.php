
    <?php
        $color_white = "si";
        $producto = "Hidra Vit";
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
                    <p>Electrolitos orales, polvo soluble.</p>
                    <br>
                    


 
                    

                    
                    <h6 class="tit_tercero">Descripción:</h6>
                    <p>HIDRA VIT es una combinación de sales, minerales y vitaminas dirigidas a facilitar la recuperación de animales luego de procesos febriles y deshidrataciones. Además de que sirven para mantener un soporte cardiovascular, inmune y neurológico normales, así como para prevenir y tratar la deshidratación. Es una mezcla altamente energética en forma de polvo soluble constituida de Vitamina A, Vitamina D3, Vitamina E, Vitamina B12, Dextrosa, y Electrolitos tales como: Na, K, Ca, Cu, Fe, Co, Mg y Cl.</p>

                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 100 g contienen: <br>
                        Vitamina A ... 100,000 UI <br>
                        Vitamina D3 ... 50,000 UI <br>
                        Vitamina E ... 50 UI <br>
                        Vitamina B12 ... 50 mg< br> Dextrosa ... 73 g <br>
                        Cloruro de sodio ... 15 g <br>
                        Cloruro de potasio ... 7.5 g <br>
                        Gluconato de Magnesio ... 750 mg <br>
                        Gluconato de calcio ... 36 mg <br>
                        Sulfato de Cobalto ... 0.01 mg <br>
                        Sulfato de Cobre ... 11 mg <br>
                        Sulfato de Zinc ... 2.5 g <br>
                        Sulfato de Manganeso ... 120 mg <br>
                        Sulfato Ferroso ... 5 mg <br>
                        Excipiente c.b.p. ... 100 g
                    </p>

                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>
                        Oral, disuelto en el agua de bebida. <br>
                        Aves y cerdos: 100 g por cada 200 litros de agua durante 4 a 5 días. <br>
                        Bovinos, ovinos, caprinos, porcinos y equinos: 100 g por cada 100 litros de agua durante 4 a 5 días. Estas dosis se pueden aplicar por mayor tiempo hasta lograr la completa recuperación de los animales.
                    </p>

                    <h6 class="tit_tercero">Recomendaciones:</h6>
                    <p>Preparar con agua limpia y en el momento de su administración al animal.</p>

                    <h6 class="tit_tercero">Período de retiro:</h6>
                    <p>No tiene período de retiro.</p>

                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>
                        Consérvese en lugar fresco, seco y a temperatura ambiente. Sometido a temperaturas elevadas por períodos prolongados, el producto puede presentar cambios en su coloración, lo cual no afecta la efectividad del mismo. No se deje al alcance de los niños. <br>
                        Producto de uso exclusivo en medicina veterinaria, no se use en humanos. Consulte a su médico veterinario 
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
                    <img class="img-fluid" src="Public/images/hidra-vit.jpg" alt="Mediker hidra-vit">
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