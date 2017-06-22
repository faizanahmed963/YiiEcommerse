<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Itemadds */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="itemadds-form">

	<?php $x = Yii::$app->user->identity->id ?>

    <?php $form = ActiveForm::begin(['options' => [ 'type' => 'TYPE_HORIZONTAL','enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'user_id')->dropDownList([$x => $x ]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'tag')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'imageFile')->fileInput() ?>
	
    <div class="form-group">
	    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
