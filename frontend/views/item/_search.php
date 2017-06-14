<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\itemSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="item-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'item_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'item_title') ?>

    <?= $form->field($model, 'item_description') ?>

    <?= $form->field($model, 'item_price') ?>

    <?php // echo $form->field($model, 'item_tags') ?>

    <?php // echo $form->field($model, 'item_image') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
