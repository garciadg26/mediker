<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="productos.php">PRODUCTOS</a></li>
    <?php
        if($categoria_url=='antibióticos-y-quimioterápicos'){
            echo '<li class="breadcrumb-item text-uppercase"><a href="productos.php">'.$categoria.'</a></li>';
        } else {
            echo '<li class="breadcrumb-item text-uppercase"><a href="'.$categoria_url.'.php">'.$categoria.'</a></li>';
        }
    ?>
    <!-- <li class="breadcrumb-item text-uppercase"><a href="<//?php echo $categoria_url; ?>.php"><//?php echo $categoria; ?></a></li> -->
    <li class="breadcrumb-item text-uppercase active" aria-current="page"><?php echo $producto; ?></li>
</ol>