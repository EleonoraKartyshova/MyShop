<?php
require 'header.php';
$products = require 'productsList.php';
$product = $products[$_GET['param']];
?>
<div class="container">
    <div class="row">
        <div><span class="prod-name"><?php echo $product['name']; ?></span></div>
        <div class="col-md-6">
            <img class="card-img" src="<?php echo $product['img']; ?>" alt="">
        </div>
        <div class="col-md-6">
            <div class="short-descr"><span>Характеристики</span></div>
            <ul>
                <li>Стиль: Пышные</li>
                <li>Особенности: С открытой спиной</li>
                <li>Ткань: Атласные</li>
                <li>Длина: Длинные (в пол)</li>
                <li>Цвет: Красный, белый</li>
                <li>Страна-производитель: США</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="tab-description-review col-md-12">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#discription" aria-controls="home" role="tab" data-toggle="tab">Подробная информация</a></li>
                <li role="presentation"><a href="#review" aria-controls="profile" role="tab" data-toggle="tab">Отзывы покупателей</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="discription">В шикарном платье SHERRI HILL 32359 белого цвета Вы точно станете королевой бала, а принц закружит Вас в танце! Пышная атласная юбка в пол в сочетании с кружевным лифом создают платье мечты. Сдержанный вырез декольте дополняет достаточно открытая спинка платья. Верх вручную обшит камнями и стразами в тон. Декольте красиво приоткрывает ключицы, и, при необходимости, скроет широкие плечи девушки. Отрезная юбка подчеркивает узкую талию, а в незаметные боковые кармашки удобно спрятать помаду или пудреницу.
                Вечернее платье Sherri Hill конфетных оттенков выглядит нежно и романтично, а лаконичный крой выступает удачным фоном для яркого цветочного принта. Фасон пышного платья давно обрел статус классического, благодаря своей универсальности, а модные приемы и элементы помогают создать оригинальное современное прочтение. Крупные цветы, распускающиеся прямо на платье, придают наряду актуальности, благодаря трендовому флористическому принту. Платье-бюстье полностью обнажает плечи и руки девушки, акцентируя внимание на бархатной коже, а отсутствие лишнего декора лишь подчеркивает изысканность образа.Такой наряд позволит почувствовать себя настоящей принцессой на балу, благодаря невероятно пышной воздушной юбки. </div>
            <div role="tabpanel" class="tab-pane" id="review">...</div>
        </div>
    </div>
</div>
</div>
<?php
require 'footer.php';
?>