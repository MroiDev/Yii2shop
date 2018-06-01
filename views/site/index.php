<?php

/* @var $this yii\web\View
* @var $product @app\model\Products
*/

use yii\helpers\Url;

$this->title = 'Index page of the store';
?>

<div class="container">
    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="web/<?=$product->img?>" alt="img">
                    <div class="card-body">
                        <h5 class="card-title"><?=$product->name?></h5>
                        <p class="card-text"><?=$product->description?></p>
                        <a href="<?= Url::to(['/product/', 'id' => $product->id]) ?>" class="btn btn-primary">Купить</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


