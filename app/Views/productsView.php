<?php
$page = 2;
require 'header.php';
?>
<div class="container">
    <h4>Category: <?php echo $category; ?> dresses</h4>
    <div class="row wrapper">
        <?php
        foreach ($products as $key => $product):
            ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 product-wrapper">
                <div class=" product">
                    <div>
                        <span><?php echo $product->title; ?></span>
                    </div>
                    <div class="product-img">
                        <img class="img-responsive" src="<?php echo $product->picture; ?>" alt="dress">
                    </div>
                    <div class="product-button_wrapper">
                        <a href="/basket/add_to_basket/id/<?php  echo $product->id; ?>" class="btn btn-primary ">Add to basket</a>
                        <a href="/product/get_product/id/<?php  echo $product->id; ?>" class="btn btn-default ">Details</a>
                    </div>
                </div>
            </div>
        <?php
        endforeach;
        ?>
    </div>
</div>
<?php
require 'footer.php';
?>