<?php
use Shop\core\authentication\Authentication;
use MyShop\controllers\AuthController;
use MyShop\controllers\MainController;
use Shop\core\View;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>❤️ MyShop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/styles/style.css">
    <script>
        $('#myTabs a').click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
        $('#myTabs a[href="#profile"]').tab('show') // Select tab by name
        $('#myTabs a:first').tab('show') // Select first tab
        $('#myTabs a:last').tab('show') // Select last tab
        $('#myTabs li:eq(2) a').tab('show') // Select third tab (0-indexed)
    </script>
</head>
<body>
<header>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Please, log in</h4>
            </div>
            <div class="modal-body">
                <form action="/auth/auth" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Enter yor email:</label>
                        <input type="email" name="login" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Enter your password:</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Log in</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Registration</h4>
                </div>
                <div class="modal-body">
                    <form action="/registration/reg" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter yor email:</label>
                            <input type="email" name="login" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Enter your password:</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Enter your phone number:</label>
                            <input type="text" name="phone_number" class="form-control" id="exampleInputPassword1" placeholder="Phone number">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Confirm</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
<nav class="navbar navbar-default mynavbar">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand mynavbar-brand" href="/main"><img src="/images/sherri-hill-logo1.jpg" alt=""></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a class="mynavbar-btn" href="/products">Список товаров<span class="sr-only">(current)</span></a></li>
                <li><a class="mynavbar-btn" href="/basket/basket">Корзина</a></li>
                <?php
                if ($data_auth['auth'] && $data_auth['login']):?>
                    <li><a class="mynavbar-btn" href="#" data-toggle="modal" data-target="#myModal"><?php echo $data_auth['login']; ?></a></li>
                    <li><form action='/auth/logout' method='post'><button class="mynavbar-exit" type='submit'>Выйти</button></form></li>
                <?php else:?>
                    <li><a class="mynavbar-btn" href="#" data-toggle="modal" data-target="#myModal">Log in</a></li>
                    <li><a class="mynavbar-btn" href="#" data-toggle="modal" data-target="#myModal1">Registration</a></li>

                <?php endif; ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
</header>