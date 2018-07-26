<?php
require 'header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php if ($error == 404):?>
                <img src="/images/giphy.gif" width="480" height="406" alt="Error 404! Cat not found">
            <?php endif; ?>
            <?php if ($error == 405):?>
                <h2>Sorry, your shopping cart is empty!</h2>
            <?php endif; ?>
            <?php if ($error == 401):?>
                <h2>You are not authorized!</h2>
            <?php endif; ?>
            <?php if ($error == 4011):?>
                <h2>You are not authorized! Please, log in or register before adding products to the shopping cart.</h2>
            <?php endif; ?>
            <?php if ($error == 4012):?>
                <h2>You are not authorized! Please, log in or register before place an order.</h2>
            <?php endif; ?>
            <?php if ($error == 4013):?>
                <h2>You are not authorized! Please, log in or register before leaving review.</h2>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php
require 'footer.php';
?>
