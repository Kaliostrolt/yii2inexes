<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Say';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= Html::encode($message) ?>
</div>