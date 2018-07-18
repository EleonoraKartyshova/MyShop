<?php
require 'header.php';
?>
<div class="container">
    <div class="row wrapper">
        <?php
        foreach ($products as $key => $product):
            ?>
            <div class="col-md-4 products">
                <div>
                    <span><?php echo $product->title; ?></span>
                </div>
                <div class="product-item"><img src="<?php echo $product->picture; ?>" alt=""></div>
                <a href="/basket/add_to_basket/id/<?php  echo $product->id; ?>" class="btn btn-primary col-md-4">Buy</a>
                <a href="/product/get_product/id/<?php  echo $product->id; ?>" class="btn btn-default col-md-4 col-md-offset-4">Details</a>
            </div>
        <?php
        endforeach;
        ?>
    </div>
</div>
<?php
require 'footer.php';
?>