<?php
require 'header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            if ($data_auth['auth']):?>
            <h2>Hello, <?php echo $data_auth['login']; ?>! Registration completed successfully.</h2>
            <?php else:?>
            <h2>You are already registered! Just Log in!</h2>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php
require 'footer.php';
?>/