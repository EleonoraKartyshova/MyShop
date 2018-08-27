<?php
require 'header.php';
?>
    <div class="container main-content">
        <div class="row">
            <div><span class="prod-name"><?php echo $product->title; ?></span></div>
            <div class="col-md-6">
                <img class="card-img" src="<?php echo $product->picture; ?>" alt="">
            </div>
            <div class="col-md-6 short-descr">
                <div><span>Characteristics</span></div>
                <ul>
                    <li>Style: <?php echo $product->style; ?></li>
                    <li>Features: <?php echo $product->features; ?></li>
                    <li>Fabric material: <?php echo $product->fabric_material; ?></li>
                    <li>Length: <?php echo $product->length; ?></li>
                    <li>Color: <?php echo $product->color; ?></li>
                    <li>Manufacturer country: <?php echo $product->manufacturer_country; ?></li>
                </ul>
                <div><h3>Price: <br><?php echo $product->price; ?></h3></div>
                <a href="/basket/add_to_basket/id/<?php  echo $product->id; ?>" class="btn btn-primary col-md-5">Add to basket</a>
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
                                <button type="submit" class="btn btn-primary">Add review</button>
                                <?php if (isset($_SESSION["review"])):?>
                                <input type="hidden" name="review" value="<?php echo $_SESSION["review"]; ?>" />
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