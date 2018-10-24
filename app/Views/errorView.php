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
            <?php if ($error == 4041):?>
                <h2>Sorry, no results were found for your search.</h2>
            <?php endif; ?>
            <?php if ($error == 401):?>
                <h2>You are not authorized!</h2>
            <?php endif; ?>
            <?php if ($error == 4010):?>
                <h2>Wrong login or password! Please, try to log in again.</h2>
            <?php endif; ?>
            <?php if ($error == 4011):?>
                <h2>Registration failed! You entered the data in incorrect format. Please, try again.</h2>
            <?php endif; ?>
            <?php if ($error == 4012):?>
                <h2>You are not authorized! Please, log in or register before place an order.</h2>
            <?php endif; ?>
            <?php if ($error == 4013):?>
                <h2>You are not authorized! Please, log in or register before leaving review.</h2>
            <?php endif; ?>
            <?php if ($error == 4014):?>
                <h2>Registration failed! You entered an email address that is already in use! Please, try again.</h2>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php
require 'footer.php';
?>
