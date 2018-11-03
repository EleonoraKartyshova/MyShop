<?php
require 'header.php';
?>
    <div class="container basket">
        <div class="row">
            <div class="col-xs-0 col-sm-0 col-md-2 col-lg-3"></div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th class="text-center">Product</th>
                        <th class="text-center">Product name</th>
                        <th class="text-center">Product price</th>
                        <th class="text-center">Remove</th>
                    </tr>
                    <?php
                    if (isset($basket)){
                        foreach ($basket as $key => $product):
                            ?>
                            <tr  class="basket-row">
                                <td><img class="img-responsive" src="<?php echo $product['picture']; ?>" alt=""></td>
                                <td class="text-center"><?php echo $product['title']; ?></td>
                                <td class="text-center"><?php echo $product['price']; ?></td>
                                <td class="text-center"><a href="/basket/delete_from_basket/id/<?php echo $key;?>" class="btn-delete" aria-label="Remove"><span class="glyphicon glyphicon-remove-circle"></span></a>
                            </tr>
                        <?php
                        endforeach;}
                    ?>
                    <tr>
                        <td>Order price:</td>
                        <td><?php if (isset($order_price)) {echo $order_price;}?></td>
                    </tr>
                </table>
                <form action="/order" method="post">
                    <button type="submit" class="btn btn-primary" title="Place an order">Place an order <span class="glyphicon glyphicon-ok"></span></button>
                </form>
            </div>
            <div class="col-xs-0 col-sm-0 col-md-2 col-lg-3"></div>
        </div>
    </div>
<?php
require 'footer.php';
?>