<?php
require 'header.php';
?>
<div class="container">
    <div class="row wrapper-products_filters">
        <h4 class="col-xs-3 col-sm-3 col-md-4 col-lg-5 wrapper-products_filters-title">Category: <?php echo $category; ?> dresses</h4>
        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 text-right wrapper-products_filters-item">
            <form action="/products/dresses/category/<?php echo $category; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/1/search/" method="get">
                <div id="imaginary_container">
                    <div class="input-group stylish-input-group">
                        <input type="text" class="form-control"  placeholder="Search" name="search">
                        <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                    </div>
                </div>
            </form>
        </div>
        <?php
        if (!$search):?>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-2 text-right wrapper-products_filters-item">Sort by <span class="glyphicon glyphicon-sort"></span>
                <div class="btn-group">
                    <button type="button" data-toggle="dropdown" class="btn btn-sm btn-default dropdown-toggle"><?php echo $data['sort']; ?> <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="/products/dresses/category/<?php echo $category; ?>/sort/recommend/num/<?php echo $data['num']; ?>/page/1">recommend</a></li>
                        <li><a href="/products/dresses/category/<?php echo $category; ?>/sort/new/num/<?php echo $data['num']; ?>/page/1">new</a></li>
                        <li><a href="/products/dresses/category/<?php echo $category; ?>/sort/top/num/<?php echo $data['num']; ?>/page/1">top</a></li>
                        <li><a href="/products/dresses/category/<?php echo $category; ?>/sort/low-price/num/<?php echo $data['num']; ?>/page/1">low-price</a></li>
                        <li><a href="/products/dresses/category/<?php echo $category; ?>/sort/high-price/num/<?php echo $data['num']; ?>/page/1">high-price</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 wrapper-products_filters-item">Show <span class="glyphicon glyphicon-th"></span>
                <div class="btn-group">
                    <button type="button" data-toggle="dropdown" class="btn btn-sm btn-default dropdown-toggle"><?php echo $data['num']; ?> <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="/products/dresses/category/<?php echo $category; ?>/sort/<?php echo $data['sort']; ?>/num/6/page/1">6</a></li>
                        <li><a href="/products/dresses/category/<?php echo $category; ?>/sort/<?php echo $data['sort']; ?>/num/9/page/1">9</a></li>
                        <li><a href="/products/dresses/category/<?php echo $category; ?>/sort/<?php echo $data['sort']; ?>/num/12/page/1">12</a></li>
                        <li><a href="/products/dresses/category/<?php echo $category; ?>/sort/<?php echo $data['sort']; ?>/num/18/page/1">18</a></li>
                        <li><a href="/products/dresses/category/<?php echo $category; ?>/sort/<?php echo $data['sort']; ?>/num/24/page/1">24</a></li>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
        <?php
        if ($search):?>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-2 text-right wrapper-products_filters-item">Sort by <span class="glyphicon glyphicon-sort"></span>
                <div class="btn-group">
                    <button type="button" data-toggle="dropdown" class="btn btn-sm btn-default dropdown-toggle"><?php echo $data['sort']; ?> <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="/products/dresses/category/<?php echo $category; ?>/sort/recommend/num/<?php echo $data['num']; ?>/page/1/search/<?php echo $search; ?>">recommend</a></li>
                        <li><a href="/products/dresses/category/<?php echo $category; ?>/sort/new/num/<?php echo $data['num']; ?>/page/1/search/<?php echo $search; ?>">new</a></li>
                        <li><a href="/products/dresses/category/<?php echo $category; ?>/sort/top/num/<?php echo $data['num']; ?>/page/1/search/<?php echo $search; ?>">top</a></li>
                        <li><a href="/products/dresses/category/<?php echo $category; ?>/sort/low-price/num/<?php echo $data['num']; ?>/page/1/search/<?php echo $search; ?>">low-price</a></li>
                        <li><a href="/products/dresses/category/<?php echo $category; ?>/sort/high-price/num/<?php echo $data['num']; ?>/page/1/search/<?php echo $search; ?>">high-price</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 wrapper-products_filters-item">Show <span class="glyphicon glyphicon-th"></span>
                <div class="btn-group">
                    <button type="button" data-toggle="dropdown" class="btn btn-sm btn-default dropdown-toggle"><?php echo $data['num']; ?> <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="/products/dresses/category/<?php echo $category; ?>/sort/<?php echo $data['sort']; ?>/num/6/page/1/search/<?php echo $search; ?>">6</a></li>
                        <li><a href="/products/dresses/category/<?php echo $category; ?>/sort/<?php echo $data['sort']; ?>/num/9/page/1/search/<?php echo $search; ?>">9</a></li>
                        <li><a href="/products/dresses/category/<?php echo $category; ?>/sort/<?php echo $data['sort']; ?>/num/12/page/1/search/<?php echo $search; ?>">12</a></li>
                        <li><a href="/products/dresses/category/<?php echo $category; ?>/sort/<?php echo $data['sort']; ?>/num/18/page/1/search/<?php echo $search; ?>">18</a></li>
                        <li><a href="/products/dresses/category/<?php echo $category; ?>/sort/<?php echo $data['sort']; ?>/num/24/page/1/search/<?php echo $search; ?>">24</a></li>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <?php
    if ($search):?>
        <div class="row wrapper-products_filters">
            <h4 class="col-xs-12 col-sm-12 col-md-12 col-lg-12 wrapper-products_search-title">Showing results for your search query: <?php echo $search_query; ?></h4>
        </div>
    <?php endif; ?>
    <div class="row wrapper">
        <?php
        foreach ($data['products'] as $key => $product):
            ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 product-wrapper">
                <div class="product">
                    <div>
                        <span class="product-title"><?php echo $product->title; ?></span>
                    </div>
                    <div class="product-img">
                        <img class="img-responsive" src="<?php echo $product->picture; ?>" alt="dress">
                    </div>
                    <div class="product-button_wrapper">
                        <a href="/product/get_product/id/<?php  echo $product->id; ?>" class="btn btn-default" title="See more details">Details</a>
                        <a href="/basket/add_to_basket/id/<?php  echo $product->id; ?>" class="btn btn-primary" title="Add product to basket">Add to basket <span class="glyphicon glyphicon-shopping-cart"></span></a>
                    </div>
                </div>
            </div>
        <?php
        endforeach;
        ?>
    </div>
    <div class="row wrapper">
        <nav class="text-center" aria-label="Dresses">
            <ul class="pagination">
                <?php
                if (!$search):?>
                    <?php
                    if ($data['previous_page']):?>
                        <li class="page-item"><a class="page-link" href="/products/dresses/category/<?php echo $category; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/1">First page</a></li>
                        <li class="page-item"><a class="page-link" href="/products/dresses/category/<?php echo $category; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/<?php echo $data['previous_page']; ?>" aria-label="Previous"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                        <li class="page-item"><a class="page-link" href="/products/dresses/category/<?php echo $category; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/<?php echo $data['previous_page']; ?>"><?php echo $data['previous_page']; ?></a></li>
                    <?php endif; ?>
                    <li class="page-item active"><a class="page-link" href="/products/dresses/category/<?php echo $category; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/<?php echo $data['current_page']; ?>"><?php echo $data['current_page']; ?></a></li>
                    <?php
                    if ($data['next_page']):?>
                        <li class="page-item"><a class="page-link" href="/products/dresses/category/<?php echo $category; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/<?php echo $data['next_page']; ?>"><?php echo $data['next_page']; ?></a></li>
                    <?php endif; ?>
                    <?php
                    if ($data['after_next_page']):?>
                        <li class="page-item"><a class="page-link" href="/products/dresses/category/<?php echo $category; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/<?php echo $data['after_next_page']; ?>"><?php echo $data['after_next_page']; ?></a></li>
                    <?php endif; ?>
                    <?php
                    if ($data['next_page']):?>
                        <li class="page-item"><a class="page-link" href="/products/dresses/category/<?php echo $category; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/<?php echo $data['next_page']; ?>" aria-label="Next"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                        <li class="page-item"><a class="page-link" href="/products/dresses/category/<?php echo $category; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/<?php echo $data['last_page']; ?>">Last page</a></li>
                    <?php endif; ?>
                <?php endif; ?>

                <?php
                if ($search):?>
                    <?php
                    if ($data['previous_page']):?>
                        <li class="page-item"><a class="page-link" href="/products/dresses/category/<?php echo $category; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/1/search/<?php echo $search; ?>">First page</a></li>
                        <li class="page-item"><a class="page-link" href="/products/dresses/category/<?php echo $category; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/<?php echo $data['previous_page']; ?>/search/<?php echo $search; ?>" aria-label="Previous"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                        <li class="page-item"><a class="page-link" href="/products/dresses/category/<?php echo $category; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/<?php echo $data['previous_page']; ?>/search/<?php echo $search; ?>"><?php echo $data['previous_page']; ?></a></li>
                    <?php endif; ?>
                    <li class="page-item active"><a class="page-link" href="/products/dresses/category/<?php echo $category; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/<?php echo $data['current_page']; ?>/search/<?php echo $search; ?>"><?php echo $data['current_page']; ?></a></li>
                    <?php
                    if ($data['next_page']):?>
                        <li class="page-item"><a class="page-link" href="/products/dresses/category/<?php echo $category; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/<?php echo $data['next_page']; ?>/search/<?php echo $search; ?>"><?php echo $data['next_page']; ?></a></li>
                    <?php endif; ?>
                    <?php
                    if ($data['after_next_page']):?>
                        <li class="page-item"><a class="page-link" href="/products/dresses/category/<?php echo $category; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/<?php echo $data['after_next_page']; ?>/search/<?php echo $search; ?>"><?php echo $data['after_next_page']; ?></a></li>
                    <?php endif; ?>
                    <?php
                    if ($data['next_page']):?>
                        <li class="page-item"><a class="page-link" href="/products/dresses/category/<?php echo $category; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/<?php echo $data['next_page']; ?>/search/<?php echo $search; ?>" aria-label="Next"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                        <li class="page-item"><a class="page-link" href="/products/dresses/category/<?php echo $category; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/<?php echo $data['last_page']; ?>/search/<?php echo $search; ?>">Last page</a></li>
                    <?php endif; ?>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</div>
<?php
require 'footer.php';
?>