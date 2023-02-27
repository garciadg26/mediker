
    <?php
        $color_white = "si";
        $producto = "Rehidra Milk";
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
                    <p>REHIDRA MILK es una mezcla altamente energética en forma de polvo soluble constituída de L-LIsina, Vitamina B12, Dextrosa y electrolitos tales como: Na, K, Ca, Cu, Fe, Co, Mg y Cl. La L-Licina es uno de los aminoácidos esenciales para favorecer la absorción de Calcio. La Dextrosa es un azúcar que incrementa los niveles sanguíneos de glucosa, con lo que hay un mayor aporte energético. Los electrolitos participan en el transporte y metabolismo de nutrientes, en el qequilibrio electrolítico, en la conducción nerviosa y la contracción muscular. REHIDRA MILK es un producto eficaz para la prevención y el tratamiento de la deshidratación de becerras, lechones, caprinos, equinos, perros y gatos que pueden cursar con o sin desbalance electrolítico por la restricción de agua durante un período prolongado u originado por diarrea, vómito y/o fiebres de origen patógeno (bacterianos, virales o parasitarios) o no patógeno, asi como aquellos que enfrentan cambios bruscos de temperatura.</p>

                    <h6 class="tit_tercero">Fórmula:</h6>
                    <p>
                        Cada 200 g contienen: <br>
                        Dextrosa 142 g <br>
                        Cloruro de Sodio 30 g <br>
                        L-Lisina 10 g <br>
                        Cloruro de Potasio 8 g <br>
                        Gluconato de Magnesio 2 g <br>
                        Gluconato de Calcio 2 g <br>
                        Sulfato de Cobalto 0.02 mg <br>
                        Sulfato de Cobre 0.022 mg <br>
                        Sulfato de Zinc 25 mg <br>
                        Sulfato de Manganeso 2.4 mg <br>
                        Sulfato Ferroso 1 mg <br>
                        Vitamina B12 100 mg <br>
                        Excipiente c.b.p. 200 g
                    </p>

                    <h6 class="tit_tercero">Dosis:</h6>
                    <p>
                        Becerras: Prepare una solución nueva antes de cada dosificación mezclando el contenido de un sobre (200 g) en 2 litros de agua tibia. El producto puede administrarse hasta un total de 7 dias. En alimento emplee una dosificaciion de 1 litro de solución y 1 litro de alimento sustituto de leche dos veces al día. De ahi en adelante reanude la alimentación normal. <br>
                        Lechones: de 1 a 5 g/litro de agua por un lapso de 7 dias consecutivos. La dosis dependerá de la edad del lechón y de la gravedad del cuadro. <br>
                        Perros (cachorros y adultos) y gatos: 50 g de producto, que equivalen a 1/4 de sobre en 1/2 litro de agua durante un perìodo de 2 a 7 días proporcionándola a libre acceso. <br>
                        Equinos: 200 g de producto en 50 litros de agua. <br>
                        Caprinos: 200 g de producto en 50 litros de agua.
                    </p>

                    <h6 class="tit_tercero">Recomendaciones:</h6>
                    <p>Preparar una solución mezclando el contenido de un sobre en 2 litros de agua limpia y tibia. Preparar con agua limpia y en el momento de su administración al animal.</p>

                    <h6 class="tit_tercero">Período de retiro:</h6>
                    <p>No tiene período de retiro.</p>

                    <h6 class="tit_tercero">Advertencias:</h6>
                    <p>
                        Consérvese en lugar fresco, seco y a temperatura ambiente. Sometido a temperaturas elevadas por períodos prolongados, el producto puede presentar cambios en su coloración, lo cual no afecta la efectividad del mismo. No se deje al alcance de los niños. <br>
                        Producto de uso exclusivo en medicina veterinaria, no se use en humanos. Consulte a su médico veterinario 
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
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/borrego.svg" alt="">
                        </div> -->
                        <!-- <div class="item_especies">
                            <img src="Public/images/svg/gallina.svg" alt="">
                        </div> -->
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
                    <img class="img-fluid" src="Public/images/rehidra-milk-detalle.jpg" alt="Mediker rehidra-milk-detalle">
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