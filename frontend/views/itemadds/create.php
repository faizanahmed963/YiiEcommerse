<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Itemadds */

$this->title = 'Create Itemadds';
$this->params['breadcrumbs'][] = ['label' => 'Itemadds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="itemadds-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
