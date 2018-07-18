<?php
require 'header.php';
//$products = require 'productsList.php';
//$product = $products[$_GET['param']];
?>
    <div class="row basket">
        <div class="col-md-12">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Product</th>
                    <th>Product name</th>
                    <th>Product price</th>
                    <!--<th>Количество</th>
                    <th>Сумма</th>-->
                    <th>Delete from basket</th>
                </tr>
                <?php
                //var_dump($data); die;
                if (isset($basket)){
                    foreach ($basket as $key => $product):
                ?>
                <tr  class="basket-row">
                    <td><img src="<?php echo $product['picture']; ?>" alt=""></td>
                    <td><?php echo $product['title']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                    <!--<td><?php //echo $product->title; ?></td>
                    <td><?php //echo $product->title; ?></td>-->
                    <td><a href="/basket/delete_from_basket/id/<?php echo $key;?>" class="basket-button basket-button-delete">Delete</a></td>
                </tr>
                <?php
                endforeach;} //var_dump($_SESSION['basket']);
                ?>
                <tr>
                    <td>Order price:</td>
                    <td><?php if (isset($order_price)) {echo $order_price;}?></td>
                </tr>
            </table>
           <p><a href="/order/place_an_order" class="basket-button basket-button-save">Place an order</a></p>
        </div>
    </div>
<?php
require 'footer.php';
?>