<?php
require 'header.php';
$products = require 'productsList.php';
$product = $products[$_GET['param']];
?>
<div class="row basket">
    <div class="col-md-12">
        <table class="table table-bordered table-hover">
            <tr>
                <th>Товар</th>
                <th>Название товара</th>
                <th>Цена</th>
                <th>Количество</th>
                <th>Сумма</th>
                <th>Удалить</th>
            </tr>

            <tr  class="basket-row">
                <td><img src="<?php echo $product['img']; ?>" alt=""></td>
                <td><?php echo $product['name']; ?></td>
                <td>22000</td>
                <td>1</td>
                <td>22000</td>
                <td></td>
            </tr>

        </table>
    </div>
</div>
<?php
require 'footer.php';
?>