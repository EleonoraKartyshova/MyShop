<?php
require 'header.php';
?>
    <div class="container main-content">
        <div class="row product-card_wrapper">
            <div><span class="prod-name"><?php echo $product->title; ?></span></div>
            <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6">
                <img class="card-img img-responsive" src="<?php echo $product->picture; ?>" alt="dress">
            </div>
            <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6 short-descr">
                <div><span class="prod-characteristics">Characteristics</span></div>
                <ul>
                    <li>Category: <?php echo $product->category; ?></li>
                    <li>Style: <?php echo $product->style; ?></li>
                    <li>Features: <?php echo $product->features; ?></li>
                    <li>Fabric material: <?php echo $product->fabric_material; ?></li>
                    <li>Length: <?php echo $product->length; ?></li>
                    <li>Color: <?php echo $product->color; ?></li>
                    <li>Manufacturer country: <?php echo $product->manufacturer_country; ?></li>
                </ul>
                <div><h3 class="prod-characteristics_price">Price: <br><?php echo $product->price; ?></h3></div>
                <a href="/basket/add_to_basket/id/<?php  echo $product->id; ?>" class="btn btn-primary col-md-6" title="Add product to basket">Add to basket <span class="glyphicon glyphicon-shopping-cart"></a>
            </div>
        </div>
        <div class="row">
            <div class="tab-description-review col-md-12">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#discription" aria-controls="home" role="tab" data-toggle="tab">Detailed description</a></li>
                    <li role="presentation"><a href="#review" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="discription"><?php echo $product->description; ?></div>
                    <div role="tabpanel" class="tab-pane" id="review">
                        <?php
                        foreach ($reviews as $key => $review):
                            ?>
                        <div>
                            <br>
                            <h4 class="review-author"><?php echo $review->email; ?></h4>
                            <p><?php echo $review->text_review; ?></p>
                            <p><?php echo $review->created_at; ?></p><br><hr><br>
                        </div>
                        <?php
                        endforeach;
                        ?>
                        <div>
                            <form action="/product/add_review/id/<?php  echo $product->id; ?>" method="post">
                                <textarea class="form-control" name="text_review" rows="3" placeholder="Please, log in and leave your review here" required></textarea><br>
                                <button type="submit" class="btn btn-primary" title="Add review">Add review <span class="glyphicon glyphicon-pencil"></button>
                                <?php if (isset($_SESSION["code"])):?>
                                <input type="hidden" name="code" value="<?php echo $_SESSION["code"]; ?>" />
                                <?php endif; ?>
                            </form><br><hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
require 'footer.php';
?>