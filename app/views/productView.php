<?php
require 'header.php';
?>
    <div class="container">
        <div class="row">
            <?php
            foreach ($product as $key => $prod):
                ?>
            <div><span class="prod-name"><?php echo $prod->title; ?></span></div>
            <div class="col-md-6">
                <img class="card-img" src="<?php echo $prod->picture; ?>" alt="">
            </div>
            <div class="col-md-6">
                <div class="short-descr"><span>Характеристики</span></div>
                <ul>
                    <li>Style: <?php echo $prod->style; ?></li>
                    <li>Features: <?php echo $prod->features; ?></li>
                    <li>Fabric material: <?php echo $prod->fabric_material; ?></li>
                    <li>Length: <?php echo $prod->length; ?></li>
                    <li>Color: <?php echo $prod->color; ?></li>
                    <li>Manufacturer country: <?php echo $prod->manufacturer_country; ?></li>
                </ul>
                <div>Price: <div><?php echo $prod->price; ?></div></div>
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
                    <div role="tabpanel" class="tab-pane active" id="discription"><?php echo $prod->description; ?></div>
                    <?php
                    endforeach;
                    ?>
                    <div role="tabpanel" class="tab-pane" id="review">...</div>
                </div>
                </div>
            </div>
        </div>
    </div>
<?php
require 'footer.php';
?>