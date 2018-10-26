<?php
/**
 * Created by PhpStorm.
 * User: eleonora
 * Date: 26.10.18
 * Time: 16:44
 */
require 'header.php';
?>
    <div class="container main-content">
        <form action="/admin/add" method="post">
            <div class="row product-card_wrapper container-product_edit">
                <div><h2>Add product</h2></div>
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="picture">Path to image:</label>
                    <input type="text" class="form-control" id="picture" name="picture" required>
                </div>
                <div class="form-group">
                    <label for="category">Category:</label>
                    <input type="text" class="form-control" id="category" name="category" required>
                </div>
                <div class="form-group">
                    <label for="style">Style:</label>
                    <input type="text" class="form-control" id="style" name="style" required>
                </div>
                <div class="form-group">
                    <label for="features">Features:</label>
                    <input type="text" class="form-control" id="features" name="features" required>
                </div>
                <div class="form-group">
                    <label for="fabric_material">Fabric material:</label>
                    <input type="text" class="form-control" id="fabric_material" name="fabric_material" required>
                </div>
                <div class="form-group">
                    <label for="length">Length:</label>
                    <input type="text" class="form-control" id="length" name="length" required>
                </div>
                <div class="form-group">
                    <label for="color">Color:</label>
                    <input type="text" class="form-control" id="color" name="color" required>
                </div>
                <div class="form-group">
                    <label for="manufacturer_country">Manufacturer country:</label>
                    <input type="text" class="form-control" id="title" name="manufacturer_country" required>
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" class="form-control" id="price" name="price" required>
                </div>
                <div class="form-group">
                    <label for="quantity_in_stock">Quantity in stock:</label>
                    <input type="text" class="form-control" id="quantity_in_stock" name="quantity_in_stock" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" rows="7" name="description" required></textarea>
                </div>
            </div>
            <div class="row">
                <h2><span class="glyphicon glyphicon-warning-sign"></span> Are you sure that you want to add the product to the Database?</h2>
            </div><br>
            <div class="row product-button_wrapper">
                <a href="/admin/admin_panel" class="btn btn-default col-md-2" title="Cancel">Cancel</a>
                <?php if (isset($_SESSION["code"])):?>
                    <input type="hidden" name="code" value="<?php echo $_SESSION["code"]; ?>" />
                <?php endif; ?>
                <button type="submit" name="add_product" class="btn btn-primary col-md-2" title="Add product">Add product <span class="glyphicon glyphicon-ok"></span></button>
            </div>
        </form>
    </div>
<?php
require 'footer.php';
?>