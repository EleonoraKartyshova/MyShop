<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyShop</title>
    <link rel="stylesheet" type="text/css" href="/styles/normalize.css">
    <link rel="stylesheet" href="/styles/bootstrap/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/styles/bootstrap/js/bootstrap.min.js"></script>
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
    <div class="mywrap">
        <header class="header">
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
                                    <input type="email" name="login" class="form-control" id="exampleInputEmail1" placeholder="my@example.com" pattern="[a-zA-Z0-9]{2,}+@[a-zA-Z0-9]{2,}+\.[a-zA-Z]{2,5}$" title="my@example.com" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Enter your password:</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 5 or more characters" required>
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
                                    <label for="exampleInputEmail2">Enter yor email:</label>
                                    <input type="email" name="login" class="form-control" id="exampleInputEmail2" placeholder="my@example.com" pattern="[a-zA-Z0-9]{2,}+@[a-zA-Z0-9]{2,}+\.[a-zA-Z]{2,5}$" title="my@example.com" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword2">Enter your password:</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 5 or more characters" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword3">Enter your phone number:</label>
                                    <input type="text" name="phone_number" class="form-control" id="exampleInputPassword3" placeholder="12345" pattern="[0-9]{5,13}$" title="Must contain from 5 to 13 digits" required>
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
            <nav class="navbar navbar-default mynavbar navbar-fixed-top mynavbar-fixed-top">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle my-navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand mynavbar-brand" href="/main" title="About Sherri Hill brand"><img class="img-responsive" src="/images/sherri-hill_logo.png" alt="SHERRY HILL"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav my-navbar-nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle mynavbar-btn" data-toggle="dropdown">
                                    <span class="middle <?php if (isset($page_number) && $page_number == 2) {echo ' mynavbar-active';} ?>">Catalog</span>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu mynavbar-btn_dropdown">
                                    <li><a href="/products/dresses/category/wedding/sort/recommend/num/6/page/1" >Wedding dresses</a></li>
                                    <li><a href="/products/dresses/category/evening/sort/recommend/num/6/page/1">Evening dresses</a></li>
                                    <li><a href="/products/dresses/category/cocktail/sort/recommend/num/6/page/1">Cocktail dresses</a></li>
                                    <li class="divider divider-categories"></li>
                                    <li><a href="/products/dresses/category/all/sort/recommend/num/6/page/1">All dresses</a></li>
                                </ul>
                            </li>
                            <li class="divider divider-button"></li>
                            <li><a class="mynavbar-btn" href="/basket"><span class="middle <?php if (isset($page_number) && $page_number == 3) {echo ' mynavbar-active';} ?>">Basket</span></a></li>
                            <li class="divider divider-button"></li>
                                <?php
                                if ($data_auth['auth'] && $data_auth['login']):?>
                                    <li><a class="mynavbar-btn" href="/history"><span class="middle <?php if (isset($page_number) && $page_number == 4) {echo ' mynavbar-active';} ?>">Orders history</span></a></li>
                                    <li class="divider divider-button"></li>
                                    <?php
                                    if ($data_auth['role'] == '1'):?>
                                        <li><a class="mynavbar-btn" href="/admin"><span class="middle <?php if (isset($page_number) && $page_number == 6) {echo ' mynavbar-active';} ?>">Admin panel <span class="glyphicon glyphicon-wrench"></span></span></a></li>
                                        <li class="divider divider-button"></li>
                                    <?php endif; ?>
                                    <li><a class="mynavbar-btn" href="#"><?php echo $data_auth['login']; ?></a></li>
                                    <li class="divider divider-button"></li>
                                    <li><form action='/auth/logout' method='post'><button class="mynavbar-exit" type='submit'>Log out</button></form></li>
                                <?php else:?>
                                    <li><a class="mynavbar-btn" href="#" data-toggle="modal" data-target="#myModal"><span class="middle">Log in</span></a></li>
                                    <li class="divider divider-button"></li>
                                    <li><a class="mynavbar-btn" href="#" data-toggle="modal" data-target="#myModal1"><span class="middle">Registration</span></a></li>

                                <?php endif; ?>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>