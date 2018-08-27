<?php
$page = 4;
require 'header.php';
?>
    <div class="container orders-history">
        <div class="row ">
            <div class="col-md-12">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Product</th>
                        <th>Product name</th>
                        <th>Product price</th>
                        <th>Order date</th>
                    </tr>
                    <?php
                    if (isset($orders)){
                        foreach ($orders as $key => $order):
                            ?>
                            <tr  class="basket-row">
                                <td><img src="<?php echo $order->picture; ?>" alt=""></td>
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
        </div>
    </div>
<?php
require 'footer.php';
?>