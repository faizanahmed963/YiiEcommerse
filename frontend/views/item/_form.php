<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\item */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'item_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'item_price')->textInput() ?>

    <?= $form->field($model, 'item_tags')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item_image')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
