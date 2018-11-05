<?php
require 'header.php';
?>
<div class="container">
    <div class="row wrapper wrapper-products_filters">
        <h4 class="col-xs-12 col-sm-6 col-md-4 col-lg-5 wrapper-products_filters-title">Category: <?php echo $data['category']; ?> dresses</h4>
        <div class="col-xs-8 col-sm-6 col-md-3 col-lg-3  wrapper-products_filters-item">
            <form action="/products/dresses/category/<?php echo $data['category']; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/1/search/" method="get">
                <div id="imaginary_container">
                    <div class="input-group stylish-input-group">
                        <input type="text" class="form-control wrapper-products_filters-item_search"  placeholder="Search" name="search" pattern="[a-zA-Z0-9\ ]{3,}$" title="Enter uppercase and lowercase words">
                        <span class="input-group-addon  ">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search "></span>
                        </button>
                    </span>
                    </div>
                </div>
            </form>
        </div>
        <?php
        if (!$search):?>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 wrapper-products_filters-item wrapper-products_filters-item_sort">Sort by <span class="glyphicon glyphicon-sort"></span>
                <div class="btn-group">
                    <button type="button" data-toggle="dropdown" class="btn btn-sm btn-default dropdown-toggle"><?php echo $data['sort']; ?> <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="/products/dresses/category/<?php echo $data['category']; ?>/sort/recommend/num/<?php echo $data['num']; ?>/page/1">recommend</a></li>
                        <li><a href="/products/dresses/category/<?php echo $data['category']; ?>/sort/new/num/<?php echo $data['num']; ?>/page/1">new</a></li>
                        <li><a href="/products/dresses/category/<?php echo $data['category']; ?>/sort/top/num/<?php echo $data['num']; ?>/page/1">top</a></li>
                        <li><a href="/products/dresses/category/<?php echo $data['category']; ?>/sort/low-price/num/<?php echo $data['num']; ?>/page/1">low-price</a></li>
                        <li><a href="/products/dresses/category/<?php echo $data['category']; ?>/sort/high-price/num/<?php echo $data['num']; ?>/page/1">high-price</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 wrapper-products_filters-item wrapper-products_filters-item_show ">Show <span class="glyphicon glyphicon-th"></span>
                <div class="btn-group">
                    <button type="button" data-toggle="dropdown" class="btn btn-sm btn-default dropdown-toggle"><?php echo $data['num']; ?> <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="/products/dresses/category/<?php echo $data['category']; ?>/sort/<?php echo $data['sort']; ?>/num/6/page/1">6</a></li>
                        <li><a href="/products/dresses/category/<?php echo $data['category']; ?>/sort/<?php echo $data['sort']; ?>/num/9/page/1">9</a></li>
                        <li><a href="/products/dresses/category/<?php echo $data['category']; ?>/sort/<?php echo $data['sort']; ?>/num/12/page/1">12</a></li>
                        <li><a href="/products/dresses/category/<?php echo $data['category']; ?>/sort/<?php echo $data['sort']; ?>/num/18/page/1">18</a></li>
                        <li><a href="/products/dresses/category/<?php echo $data['category']; ?>/sort/<?php echo $data['sort']; ?>/num/24/page/1">24</a></li>
                    </ul>
                </div>
            </div>
            <div class="wrapper-products_filter wrapper-products_filters-item hidden-md hidden-lg col-xs-12 col-sm-12">
                <div class="btn-group">
                    <?php
                    if (empty($filter)):?>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Filter by <span class="glyphicon glyphicon-filter"></span><span class="caret"></span></button>
                    <?php else:?>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Filter applied <span class="glyphicon glyphicon-filter"></span><span class="caret"></span></button>
                    <?php endif; ?>
                    <ul class="dropdown-menu" role="menu">
                        <li class="wrapper-products_filter-drupdown">
                            <form action="/products/dresses/category/<?php echo $data['category']; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/1" method="post">
                                <div>
                                    <div>Length</div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="length[]" value="floor" <?php if (!empty($filter['length']) && in_array("floor", $filter['length'])){echo "checked";}?>>
                                            Floor
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="length[]" value="short" <?php if (!empty($filter['length']) && in_array("short", $filter['length'])){echo "checked";}?>>
                                            Short
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <div>Fabric material</div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="fabric_material[]" value="satin" <?php if (!empty($filter['fabric_material']) && in_array("satin", $filter['fabric_material'])){echo "checked";}?>>
                                            Satin
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="fabric_material[]" value="lace" <?php if (!empty($filter['fabric_material']) && in_array("lace", $filter['fabric_material'])){echo "checked";}?>>
                                            Lace
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="fabric_material[]" value="sequins" <?php if (!empty($filter['fabric_material']) && in_array("sequins", $filter['fabric_material'])){echo "checked";}?>>
                                            Sequins
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="fabric_material[]" value="tulle" <?php if (!empty($filter['fabric_material']) && in_array("tulle", $filter['fabric_material'])){echo "checked";}?>>
                                            Tulle
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="fabric_material[]" value="chiffon" <?php if (!empty($filter['fabric_material']) && in_array("chiffon", $filter['fabric_material'])){echo "checked";}?>>
                                            Chiffon
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="fabric_material[]" value="rhinestones" <?php if (!empty($filter['fabric_material']) && in_array("rhinestones", $filter['fabric_material'])){echo "checked";}?>>
                                            Rhinestones
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <div>Color</div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="color[]" value="white" <?php if (!empty($filter['color']) && in_array("white", $filter['color'])){echo "checked";}?>>
                                            White
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="color[]" value="red" <?php if (!empty($filter['color']) && in_array("red", $filter['color'])){echo "checked";}?>>
                                            Red
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="color[]" value="pink" <?php if (!empty($filter['color']) && in_array("pink", $filter['color'])){echo "checked";}?>>
                                            Pink
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="color[]" value="yellow" <?php if (!empty($filter['color']) && in_array("yellow", $filter['color'])){echo "checked";}?>>
                                            Yellow
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="color[]" value="blue" <?php if (!empty($filter['color']) && in_array("blue", $filter['color'])){echo "checked";}?>>
                                            Blue
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="color[]" value="emerald" <?php if (!empty($filter['color']) && in_array("emerald", $filter['color'])){echo "checked";}?>>
                                            Emerald
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="color[]" value="sapphire" <?php if (!empty($filter['color']) && in_array("sapphire", $filter['color'])){echo "checked";}?>>
                                            Sapphire
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="color[]" value="lavender" <?php if (!empty($filter['color']) && in_array("lavender", $filter['color'])){echo "checked";}?>>
                                            Lavender
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="color[]" value="nude" <?php if (!empty($filter['color']) && in_array("nude", $filter['color'])){echo "checked";}?>>
                                            Nude
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="color[]" value="gold" <?php if (!empty($filter['color']) && in_array("gold", $filter['color'])){echo "checked";}?>>
                                            Gold
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="color[]" value="beige" <?php if (!empty($filter['color']) && in_array("beige", $filter['color'])){echo "checked";}?>>
                                            Beige
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="color[]" value="floral" <?php if (!empty($filter['color']) && in_array("floral", $filter['color'])){echo "checked";}?>>
                                            Floral
                                        </label>
                                    </div>
                                </div>
                                <div class="wrapper-products_filter-price">
                                    <div>Price</div>
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <label>From</label>
                                            <input type="text" class="form-control" name="price_from" value="<?php if (!empty($filter['price_from'])) {echo $filter['price_from'];} else {echo "";}?>"  placeholder="<?php if (!empty($filter['price_from'])) {echo $filter['price_from'];} else {echo "0";}?>">
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <label>To</label>
                                            <input type="text" class="form-control" name="price_to" value="<?php if (!empty($filter['price_to'])) {echo $filter['price_to'];} else {echo "";}?>" placeholder="<?php if (!empty($filter['price_to'])) {echo $filter['price_to'];} else {echo "...";}?>">
                                        </div>
                                    </div>
                                </div><br>
                                <?php
                                if (!empty($filter)):?>
                                    <button type="submit" name="clear_filter" class="btn btn-default" data-dismiss="modal">Clear filter</button>
                                <?php endif; ?>
                                <button type="submit" name="set_filter" class="btn btn-primary">Apply <span class="glyphicon glyphicon-ok"></span></button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
        <?php
        if ($search):?>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 wrapper-products_filters-item wrapper-products_filters-item_sort">Sort by <span class="glyphicon glyphicon-sort"></span>
                <div class="btn-group">
                    <button type="button" data-toggle="dropdown" class="btn btn-sm btn-default dropdown-toggle"><?php echo $data['sort']; ?> <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="/products/dresses/category/<?php echo $data['category']; ?>/sort/recommend/num/<?php echo $data['num']; ?>/page/1/search/<?php echo $search; ?>">recommend</a></li>
                        <li><a href="/products/dresses/category/<?php echo $data['category']; ?>/sort/new/num/<?php echo $data['num']; ?>/page/1/search/<?php echo $search; ?>">new</a></li>
                        <li><a href="/products/dresses/category/<?php echo $data['category']; ?>/sort/top/num/<?php echo $data['num']; ?>/page/1/search/<?php echo $search; ?>">top</a></li>
                        <li><a href="/products/dresses/category/<?php echo $data['category']; ?>/sort/low-price/num/<?php echo $data['num']; ?>/page/1/search/<?php echo $search; ?>">low-price</a></li>
                        <li><a href="/products/dresses/category/<?php echo $data['category']; ?>/sort/high-price/num/<?php echo $data['num']; ?>/page/1/search/<?php echo $search; ?>">high-price</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 wrapper-products_filters-item wrapper-products_filters-item_show ">Show <span class="glyphicon glyphicon-th"></span>
                <div class="btn-group">
                    <button type="button" data-toggle="dropdown" class="btn btn-sm btn-default dropdown-toggle"><?php echo $data['num']; ?> <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="/products/dresses/category/<?php echo $data['category']; ?>/sort/<?php echo $data['sort']; ?>/num/6/page/1/search/<?php echo $search; ?>">6</a></li>
                        <li><a href="/products/dresses/category/<?php echo $data['category']; ?>/sort/<?php echo $data['sort']; ?>/num/9/page/1/search/<?php echo $search; ?>">9</a></li>
                        <li><a href="/products/dresses/category/<?php echo $data['category']; ?>/sort/<?php echo $data['sort']; ?>/num/12/page/1/search/<?php echo $search; ?>">12</a></li>
                        <li><a href="/products/dresses/category/<?php echo $data['category']; ?>/sort/<?php echo $data['sort']; ?>/num/18/page/1/search/<?php echo $search; ?>">18</a></li>
                        <li><a href="/products/dresses/category/<?php echo $data['category']; ?>/sort/<?php echo $data['sort']; ?>/num/24/page/1/search/<?php echo $search; ?>">24</a></li>
                    </ul>
                </div>
            </div>
            <div class="wrapper-products_filter wrapper-products_filters-item hidden-md hidden-lg col-xs-12 col-sm-7">
                <div class="btn-group">
                    <?php
                    if (empty($filter)):?>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Filter by <span class="glyphicon glyphicon-filter"></span><span class="caret"></span></button>
                    <?php else:?>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Filter applied <span class="glyphicon glyphicon-filter"></span><span class="caret"></span></button>
                    <?php endif; ?>
                    <ul class="dropdown-menu" role="menu">
                        <li class="wrapper-products_filter-drupdown">
                            <form action="/products/dresses/category/<?php echo $data['category']; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/1/search/<?php echo $search; ?>" method="post">
                                <div>
                                    <div>Length</div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="length[]" value="floor" <?php if (!empty($filter['length']) && in_array("floor", $filter['length'])){echo "checked";}?>>
                                            Floor
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="length[]" value="short" <?php if (!empty($filter['length']) && in_array("short", $filter['length'])){echo "checked";}?>>
                                            Short
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <div>Fabric material</div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="fabric_material[]" value="satin" <?php if (!empty($filter['fabric_material']) && in_array("satin", $filter['fabric_material'])){echo "checked";}?>>
                                            Satin
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="fabric_material[]" value="lace" <?php if (!empty($filter['fabric_material']) && in_array("lace", $filter['fabric_material'])){echo "checked";}?>>
                                            Lace
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="fabric_material[]" value="sequins" <?php if (!empty($filter['fabric_material']) && in_array("sequins", $filter['fabric_material'])){echo "checked";}?>>
                                            Sequins
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="fabric_material[]" value="tulle" <?php if (!empty($filter['fabric_material']) && in_array("tulle", $filter['fabric_material'])){echo "checked";}?>>
                                            Tulle
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="fabric_material[]" value="chiffon" <?php if (!empty($filter['fabric_material']) && in_array("chiffon", $filter['fabric_material'])){echo "checked";}?>>
                                            Chiffon
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="fabric_material[]" value="rhinestones" <?php if (!empty($filter['fabric_material']) && in_array("rhinestones", $filter['fabric_material'])){echo "checked";}?>>
                                            Rhinestones
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <div>Color</div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="color[]" value="white" <?php if (!empty($filter['color']) && in_array("white", $filter['color'])){echo "checked";}?>>
                                            White
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="color[]" value="red" <?php if (!empty($filter['color']) && in_array("red", $filter['color'])){echo "checked";}?>>
                                            Red
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="color[]" value="pink" <?php if (!empty($filter['color']) && in_array("pink", $filter['color'])){echo "checked";}?>>
                                            Pink
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="color[]" value="yellow" <?php if (!empty($filter['color']) && in_array("yellow", $filter['color'])){echo "checked";}?>>
                                            Yellow
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="color[]" value="blue" <?php if (!empty($filter['color']) && in_array("blue", $filter['color'])){echo "checked";}?>>
                                            Blue
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="color[]" value="emerald" <?php if (!empty($filter['color']) && in_array("emerald", $filter['color'])){echo "checked";}?>>
                                            Emerald
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="color[]" value="sapphire" <?php if (!empty($filter['color']) && in_array("sapphire", $filter['color'])){echo "checked";}?>>
                                            Sapphire
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="color[]" value="lavender" <?php if (!empty($filter['color']) && in_array("lavender", $filter['color'])){echo "checked";}?>>
                                            Lavender
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="color[]" value="nude" <?php if (!empty($filter['color']) && in_array("nude", $filter['color'])){echo "checked";}?>>
                                            Nude
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="color[]" value="gold" <?php if (!empty($filter['color']) && in_array("gold", $filter['color'])){echo "checked";}?>>
                                            Gold
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="color[]" value="beige" <?php if (!empty($filter['color']) && in_array("beige", $filter['color'])){echo "checked";}?>>
                                            Beige
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="color[]" value="floral" <?php if (!empty($filter['color']) && in_array("floral", $filter['color'])){echo "checked";}?>>
                                            Floral
                                        </label>
                                    </div>
                                </div>
                                <div class="wrapper-products_filter-price">
                                    <div>Price</div>
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <label>From</label>
                                            <input type="text" class="form-control" name="price_from" value="<?php if (!empty($filter['price_from'])) {echo $filter['price_from'];} else {echo "";}?>"  placeholder="<?php if (!empty($filter['price_from'])) {echo $filter['price_from'];} else {echo "0";}?>">
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <label>To</label>
                                            <input type="text" class="form-control" name="price_to" value="<?php if (!empty($filter['price_to'])) {echo $filter['price_to'];} else {echo "";}?>" placeholder="<?php if (!empty($filter['price_to'])) {echo $filter['price_to'];} else {echo "...";}?>">
                                        </div>
                                    </div>
                                </div><br>
                                <?php
                                if (!empty($filter)):?>
                                    <button type="submit" name="clear_filter" class="btn btn-default" data-dismiss="modal">Clear filter</button>
                                <?php endif; ?>
                                <button type="submit" name="set_filter" class="btn btn-primary">Apply <span class="glyphicon glyphicon-ok"></span></button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="wrapper-products_filters-item  wrapper-products_filters-item_search-title col-xs-12 col-sm-5 col-md-12 col-lg-12">
                <h4 class=" wrapper-products_search-title">Showing results for your search: <?php echo $search_query; ?></h4>
            </div>
        <?php endif; ?>
        <?php if (!empty($filter) || $search):?>
        <div class="wrapper-products_filters-item  wrapper-products_filters-item_clear-all col-xs-12 col-sm-5 col-md-3 col-lg-3">
            <form action="/products/dresses/category/all/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/1" method="post">
                <button type="submit" name="clear_all_filters" class="btn btn-default" data-dismiss="modal">Clear all filters <span class="glyphicon glyphicon-remove"></span></button>
            </form>
        </div>
        <?php endif; ?>
    </div>

    <div class="row wrapper">
        <div class="wrapper-products_filter  hidden-sm hidden-xs col-md-2 col-lg-3">
            <div class="wrapper-products_filter-title">Filter <span class="glyphicon glyphicon-filter"></span></div><br>
            <form action="/products/dresses/category/<?php echo $data['category']; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/1<?php if ($search){echo "/search/".$search;}?>" method="post">
                <div>
                    <div>Length</div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="length[]" value="floor" <?php if (!empty($filter['length']) && in_array("floor", $filter['length'])){echo "checked";}?>>
                            Floor
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="length[]" value="short" <?php if (!empty($filter['length']) && in_array("short", $filter['length'])){echo "checked";}?>>
                            Short
                        </label>
                    </div>
                </div>
                <div>
                    <div>Fabric material</div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="fabric_material[]" value="satin" <?php if (!empty($filter['fabric_material']) && in_array("satin", $filter['fabric_material'])){echo "checked";}?>>
                            Satin
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="fabric_material[]" value="lace" <?php if (!empty($filter['fabric_material']) && in_array("lace", $filter['fabric_material'])){echo "checked";}?>>
                            Lace
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="fabric_material[]" value="sequins" <?php if (!empty($filter['fabric_material']) && in_array("sequins", $filter['fabric_material'])){echo "checked";}?>>
                            Sequins
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="fabric_material[]" value="tulle" <?php if (!empty($filter['fabric_material']) && in_array("tulle", $filter['fabric_material'])){echo "checked";}?>>
                            Tulle
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="fabric_material[]" value="chiffon" <?php if (!empty($filter['fabric_material']) && in_array("chiffon", $filter['fabric_material'])){echo "checked";}?>>
                            Chiffon
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="fabric_material[]" value="rhinestones" <?php if (!empty($filter['fabric_material']) && in_array("rhinestones", $filter['fabric_material'])){echo "checked";}?>>
                            Rhinestones
                        </label>
                    </div>
                </div>
                <div>
                    <div>Color</div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="color[]" value="white" <?php if (!empty($filter['color']) && in_array("white", $filter['color'])){echo "checked";}?>>
                            White
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="color[]" value="red" <?php if (!empty($filter['color']) && in_array("red", $filter['color'])){echo "checked";}?>>
                            Red
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="color[]" value="pink" <?php if (!empty($filter['color']) && in_array("pink", $filter['color'])){echo "checked";}?>>
                            Pink
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="color[]" value="yellow" <?php if (!empty($filter['color']) && in_array("yellow", $filter['color'])){echo "checked";}?>>
                            Yellow
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="color[]" value="blue" <?php if (!empty($filter['color']) && in_array("blue", $filter['color'])){echo "checked";}?>>
                            Blue
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="color[]" value="emerald" <?php if (!empty($filter['color']) && in_array("emerald", $filter['color'])){echo "checked";}?>>
                            Emerald
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="color[]" value="sapphire" <?php if (!empty($filter['color']) && in_array("sapphire", $filter['color'])){echo "checked";}?>>
                            Sapphire
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="color[]" value="lavender" <?php if (!empty($filter['color']) && in_array("lavender", $filter['color'])){echo "checked";}?>>
                            Lavender
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="color[]" value="nude" <?php if (!empty($filter['color']) && in_array("nude", $filter['color'])){echo "checked";}?>>
                            Nude
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="color[]" value="gold" <?php if (!empty($filter['color']) && in_array("gold", $filter['color'])){echo "checked";}?>>
                            Gold
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="color[]" value="beige" <?php if (!empty($filter['color']) && in_array("beige", $filter['color'])){echo "checked";}?>>
                            Beige
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="color[]" value="floral" <?php if (!empty($filter['color']) && in_array("floral", $filter['color'])){echo "checked";}?>>
                            Floral
                        </label>
                    </div>
                </div>
                <div class="wrapper-products_filter-price">
                    <div>Price</div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <label>From</label>
                            <input type="text" class="form-control" name="price_from" value="<?php if (!empty($filter['price_from'])) {echo $filter['price_from'];} else {echo "";}?>"  placeholder="<?php if (!empty($filter['price_from'])) {echo $filter['price_from'];} else {echo "0";}?>">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <label>To</label>
                            <input type="text" class="form-control" name="price_to" value="<?php if (!empty($filter['price_to'])) {echo $filter['price_to'];} else {echo "";}?>" placeholder="<?php if (!empty($filter['price_to'])) {echo $filter['price_to'];} else {echo "...";}?>">
                        </div>
                    </div>
                </div><br>
                <?php
                if (!empty($filter)):?>
                    <button type="submit" name="clear_filter" class="btn btn-default" data-dismiss="modal">Clear filter</button>
                <?php endif; ?>
                <button type="submit" name="set_filter" class="btn btn-primary">Apply <span class="glyphicon glyphicon-ok"></span></button>
            </form>
        </div>
        <div class="row wrapper col-xs-12 col-sm-12 col-md-10 col-lg-9">
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
    </div>

    <div class="row wrapper">
        <nav class="text-center" aria-label="Dresses">
            <ul class="pagination">
                <?php
                if (!$search):?>
                    <?php
                    if ($data['previous_page']):?>
                        <li class="page-item"><a class="page-link" href="/products/dresses/category/<?php echo $data['category']; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/1">First page</a></li>
                        <li class="page-item"><a class="page-link" href="/products/dresses/category/<?php echo $data['category']; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/<?php echo $data['previous_page']; ?>" aria-label="Previous"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                        <li class="page-item"><a class="page-link" href="/products/dresses/category/<?php echo $data['category']; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/<?php echo $data['previous_page']; ?>"><?php echo $data['previous_page']; ?></a></li>
                    <?php endif; ?>
                    <li class="page-item active"><a class="page-link" href="/products/dresses/category/<?php echo $data['category']; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/<?php echo $data['current_page']; ?>"><?php echo $data['current_page']; ?></a></li>
                    <?php
                    if ($data['next_page']):?>
                        <li class="page-item"><a class="page-link" href="/products/dresses/category/<?php echo $data['category']; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/<?php echo $data['next_page']; ?>"><?php echo $data['next_page']; ?></a></li>
                    <?php endif; ?>
                    <?php
                    if ($data['after_next_page']):?>
                        <li class="page-item"><a class="page-link" href="/products/dresses/category/<?php echo $data['category']; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/<?php echo $data['after_next_page']; ?>"><?php echo $data['after_next_page']; ?></a></li>
                    <?php endif; ?>
                    <?php
                    if ($data['next_page']):?>
                        <li class="page-item"><a class="page-link" href="/products/dresses/category/<?php echo $data['category']; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/<?php echo $data['next_page']; ?>" aria-label="Next"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                        <li class="page-item"><a class="page-link" href="/products/dresses/category/<?php echo $data['category']; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/<?php echo $data['last_page']; ?>">Last page</a></li>
                    <?php endif; ?>
                <?php endif; ?>

                <?php
                if ($search):?>
                    <?php
                    if ($data['previous_page']):?>
                        <li class="page-item"><a class="page-link" href="/products/dresses/category/<?php echo $data['category']; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/1/search/<?php echo $search; ?>">First page</a></li>
                        <li class="page-item"><a class="page-link" href="/products/dresses/category/<?php echo $data['category']; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/<?php echo $data['previous_page']; ?>/search/<?php echo $search; ?>" aria-label="Previous"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                        <li class="page-item"><a class="page-link" href="/products/dresses/category/<?php echo $data['category']; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/<?php echo $data['previous_page']; ?>/search/<?php echo $search; ?>"><?php echo $data['previous_page']; ?></a></li>
                    <?php endif; ?>
                    <li class="page-item active"><a class="page-link" href="/products/dresses/category/<?php echo $data['category']; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/<?php echo $data['current_page']; ?>/search/<?php echo $search; ?>"><?php echo $data['current_page']; ?></a></li>
                    <?php
                    if ($data['next_page']):?>
                        <li class="page-item"><a class="page-link" href="/products/dresses/category/<?php echo $data['category']; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/<?php echo $data['next_page']; ?>/search/<?php echo $search; ?>"><?php echo $data['next_page']; ?></a></li>
                    <?php endif; ?>
                    <?php
                    if ($data['after_next_page']):?>
                        <li class="page-item"><a class="page-link" href="/products/dresses/category/<?php echo $data['category']; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/<?php echo $data['after_next_page']; ?>/search/<?php echo $search; ?>"><?php echo $data['after_next_page']; ?></a></li>
                    <?php endif; ?>
                    <?php
                    if ($data['next_page']):?>
                        <li class="page-item"><a class="page-link" href="/products/dresses/category/<?php echo $data['category']; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/<?php echo $data['next_page']; ?>/search/<?php echo $search; ?>" aria-label="Next"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                        <li class="page-item"><a class="page-link" href="/products/dresses/category/<?php echo $data['category']; ?>/sort/<?php echo $data['sort']; ?>/num/<?php echo $data['num']; ?>/page/<?php echo $data['last_page']; ?>/search/<?php echo $search; ?>">Last page</a></li>
                    <?php endif; ?>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</div>
<?php
require 'footer.php';
?>