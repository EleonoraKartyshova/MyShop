<div class="container">
<div class="row wrapper">
    <?php
        $products = require 'productsList.php';
        foreach ($products as $key => $product):
        ?>
    <div class="col-md-4 products">
        <div>
            <span><?php echo $product['name']; ?></span>
        </div>
        <div class="product-item"><img src="<?php echo $product['img']; ?>" alt=""></div>
        <a href="basket.php?param=<?php  echo $key; ?>" class="btn btn-primary col-md-4">Купить</a>
        <a href="product.php?param=<?php  echo $key; ?>" class="btn btn-default col-md-4 col-md-offset-4">Подробнее</a>
    </div>
    <?php
    endforeach;
    ?>
</div>
</div>

