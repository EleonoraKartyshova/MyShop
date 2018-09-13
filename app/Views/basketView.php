<?php
$page = 3;
require 'header.php';
?>
    <div class="container basket">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Product</th>
                        <th>Product name</th>
                        <th>Product price</th>
                        <th>Delete from basket</th>
                    </tr>
                    <?php
                    if (isset($basket)){
                        foreach ($basket as $key => $product):
                            ?>
                            <tr  class="basket-row">
                                <td><img class="img-responsive" src="<?php echo $product['picture']; ?>" alt=""></td>
                                <td><?php echo $product['title']; ?></td>
                                <td><?php echo $product['price']; ?></td>
                                <td><a href="/basket/delete_from_basket/id/<?php echo $key;?>" class="basket-button basket-button-delete">Delete</a></td>
                            </tr>
                        <?php
                        endforeach;}
                    ?>
                    <tr>
                        <td>Order price:</td>
                        <td><?php if (isset($order_price)) {echo $order_price;}?></td>
                    </tr>
                </table>
                <form action="/order/place_an_order" method="post">
                    <button type="submit" class="btn btn-primary">Place an order</button>
                </form>
            </div>
        </div>
    </div>
<?php
require 'footer.php';
?>