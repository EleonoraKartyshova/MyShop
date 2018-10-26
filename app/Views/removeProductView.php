<?php
/**
 * Created by PhpStorm.
 * User: eleonora
 * Date: 26.10.18
 * Time: 16:43
 */
require 'header.php';
?>
<div class="container main-content">
    <div class="row product-card_wrapper container-product_remove">
        <div><span class="prod-name_admin-panel"><?php echo $product->title; ?></span></div>
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
            <img class=" img-responsive" src="<?php echo $product->picture; ?>" alt="dress">
        </div>
        <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9 short-descr">
            <div><span class="prod-characteristics">Characteristics</span></div>
            <ul>
                <li>Product id: <?php echo $product->id; ?></li>
                <li>Category: <?php echo $product->category; ?></li>
                <li>Style: <?php echo $product->style; ?></li>
                <li>Features: <?php echo $product->features; ?></li>
                <li>Fabric material: <?php echo $product->fabric_material; ?></li>
                <li>Length: <?php echo $product->length; ?></li>
                <li>Color: <?php echo $product->color; ?></li>
                <li>Manufacturer country: <?php echo $product->manufacturer_country; ?></li>
                <li>Price:  <?php echo $product->price; ?></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <h2><span class="glyphicon glyphicon-warning-sign"></span> Are you sure that you want to remove product "<?php echo $product->title; ?>" from the Database?</h2>
    </div><br>
    <form action="/admin/remove/id/<?php  echo $product->id; ?>" method="post">
        <div class="row product-button_wrapper">
            <a href="/admin/admin_panel" class="btn btn-default col-md-2" title="Cancel">Cancel</a>
            <button type="submit" name="remove_product" class="btn btn-primary col-md-5" title="Remove product from the Database">Remove product from the Database</button>

        </div>
    </form>
</div>
<?php
require 'footer.php';
?>
