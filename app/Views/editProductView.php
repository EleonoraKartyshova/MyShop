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
        <form action="/admin/edit/id/<?php  echo $product->id; ?>" method="post">
        <div class="row product-card_wrapper container-product_edit">
            <div><span class="prod-id_admin-panel">Product id: <?php echo $product->id; ?></span></div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo $product->title; ?>">
            </div>
            <div class="form-group">
                <label for="picture">Path to image:</label>
                <input type="text" class="form-control" id="picture" name="picture" value="<?php echo $product->picture; ?>">
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <input type="text" class="form-control" id="category" name="category" value="<?php echo $product->category; ?>">
            </div>
            <div class="form-group">
                <label for="style">Style:</label>
                <input type="text" class="form-control" id="style" name="style" value="<?php echo $product->style; ?>">
            </div>
            <div class="form-group">
                <label for="features">Features:</label>
                <input type="text" class="form-control" id="features" name="features" value="<?php echo $product->features; ?>">
            </div>
            <div class="form-group">
                <label for="fabric_material">Fabric material:</label>
                <input type="text" class="form-control" id="fabric_material" name="fabric_material" value="<?php echo $product->fabric_material; ?>">
            </div>
            <div class="form-group">
                <label for="length">Length:</label>
                <input type="text" class="form-control" id="length" name="length" value="<?php echo $product->length; ?>">
            </div>
            <div class="form-group">
                <label for="color">Color:</label>
                <input type="text" class="form-control" id="color" name="color" value="<?php echo $product->color; ?>">
            </div>
            <div class="form-group">
                <label for="manufacturer_country">Manufacturer country:</label>
                <input type="text" class="form-control" id="title" name="manufacturer_country" value="<?php echo $product->manufacturer_country; ?>">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" class="form-control" id="price" name="price" value="<?php echo $product->price; ?>">
            </div>
            <div class="form-group">
                <label for="quantity_in_stock">Quantity in stock:</label>
                <input type="text" class="form-control" id="quantity_in_stock" name="quantity_in_stock" value="<?php echo $product->quantity_in_stock; ?>">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" rows="7" name="description" placeholder="<?php echo $product->description; ?>" required><?php echo $product->description; ?></textarea>
            </div>
        </div>
        <div class="row">
            <h2><span class="glyphicon glyphicon-warning-sign"></span> Are you sure that you want to make changes to the characteristics of the product "<?php echo $product->title; ?>"?</h2>
        </div><br>
            <div class="row product-button_wrapper">
                <a href="/admin/admin_panel" class="btn btn-default col-md-2" title="Cancel">Cancel</a>
                <button type="submit" name="edit_product" class="btn btn-primary col-md-2" title="Apply changes">Apply <span class="glyphicon glyphicon-ok"></span></button>
            </div>
        </form>
    </div>
<?php
require 'footer.php';
?>