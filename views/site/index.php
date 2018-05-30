<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

?>
<div class="container">
    <div class="row">
        <?php foreach($products as $product): ?>
            <?php echo "<div class='col-md-4'>" ?>
            <?php echo "<div class='card' style='width: 18rem;'>" ?>
            <?php echo "<img class='card-img-top' src='{$product->img}' alt='Vehicle'>" ?>
            <?php echo "<div class='card-body'>" ?>
            <?php echo "<h5 class='card-title'>{$product->name}</h5>" ?>
            <?php echo "<p class='card-text'>{$product->description}</p>" ?>
            <?php echo "<a href='products/{$product->id}' class='btn btn-success'>Купить</a>" ?>
            <?php echo "</div>" ?>
            <?php echo "</div>" ?>
            <?php echo "</div>" ?>
        <?php endforeach ?>
    </div>
</div>

