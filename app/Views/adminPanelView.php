<?php
/**
 * Created by PhpStorm.
 * User: eleonora
 * Date: 26.10.18
 * Time: 15:50
 */
require 'header.php';
?>
    <div class="container">
        <?php
        if ($add):
            ?>
            <div class="row wrapper">
                <h2>Product successfully added!</h2>
            </div>
        <?php endif; ?>
        <?php
        if ($remove):
            ?>
        <div class="row wrapper">
            <h2>Product successfully removed from the Database!</h2>
        </div>
        <?php endif; ?>
        <?php
        if ($edit):
            ?>
            <div class="row wrapper">
                <h2>Product successfully edited!</h2>
            </div>
        <?php endif; ?>
        <div class="row wrapper col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2><?php echo $count; ?> products are now stored in the database</h2>
        </div>
        <div class="row wrapper col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <a href="/admin/add" class="btn btn-primary" title="Add new product">Add new product <span class="glyphicon glyphicon-ok"></span></a>
        </div>
        <div class="row wrapper col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <?php
            foreach ($products as $key => $product):?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 product-wrapper">
                    <div class="product">
                        <div>
                            <span class="product-title"><?php echo $product->title; ?></span>
                        </div>
                        <div class="product-img">
                            <img class="img-responsive" src="<?php echo $product->picture; ?>" alt="dress">
                        </div>
                        <div class="product-button_wrapper">
                            <a href="/admin/remove/id/<?php  echo $product->id; ?>" class="btn btn-default" title="Remove product">Remove</a>
                            <a href="/admin/edit/id/<?php  echo $product->id; ?>" class="btn btn-primary" title="Edit product">Edit <span class="glyphicon glyphicon-pencil"></span></a>
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