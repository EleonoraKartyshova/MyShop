<?php
require 'header.php';
?>
    <div class="container">
        <div class="row">
            <div><span class="prod-name"><?php echo $product->title; ?></span></div>
            <div class="col-md-6">
                <img class="card-img" src="<?php echo $product->picture; ?>" alt="">
            </div>
            <div class="col-md-6">
                <div class="short-descr"><span>Characteristics</span></div>
                <ul>
                    <li>Style: <?php echo $product->style; ?></li>
                    <li>Features: <?php echo $product->features; ?></li>
                    <li>Fabric material: <?php echo $product->fabric_material; ?></li>
                    <li>Length: <?php echo $product->length; ?></li>
                    <li>Color: <?php echo $product->color; ?></li>
                    <li>Manufacturer country: <?php echo $product->manufacturer_country; ?></li>
                </ul>
                <div><h3>Price: <div><?php echo $product->price; ?></div></h3></div>
                <a href="/basket/add_to_basket/id/<?php  echo $product->id; ?>" class="btn btn-primary col-md-4">Add to basket</a>
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
                            <p><h4 class="review-author"><?php echo $review->email; ?></h4></p>
                            <p><?php echo $review->text_review; ?></p>
                            <p><?php echo $review->created_at; ?></p><br><hr><br>
                        </div>
                        <?php
                        endforeach;
                        ?>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
<?php
require 'footer.php';
?>