<?php
require 'header.php';
?>
    <div class="container orders-history">
        <div class="row ">
            <div class="col-xs-0 col-sm-1 col-md-2 col-lg-3"></div>
            <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Product</th>
                        <th>Product name</th>
                        <th>Product price</th>
                        <th>Order date</th>
                    </tr>
                    <?php
                    if (isset($orders)){
                        foreach ($orders as $order):
                            ?>
                            <tr  class="basket-row">
                                <td><img class="img-responsive" src="<?php echo $order->picture; ?>" alt=""></td>
                                <td><?php echo $order->title; ?></td>
                                <td><?php echo $order->price; ?></td>
                                <td><?php echo $order->created_at; ?></td>
                            </tr>
                        <?php
                        endforeach;}
                    ?>
                    <tr>

                    </tr>
                </table>
            </div>
            <div class="col-xs-0 col-sm-1 col-md-2 col-lg-3"></div>
        </div>
    </div>
<?php
require 'footer.php';
?>