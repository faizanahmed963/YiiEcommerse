<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Itemadds */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Itemadds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="itemadds-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_id',
            'title',
            'description:ntext',
            'price',
            'tag',
            'image:ntext',
        ],
    ]) ?>

	<?php
       if ($model->image!='') {
         //echo '<br /><p><img src=$model->image></p>';
		 echo Html::img('@web/'.$model->image, ['height'=>'150', 'width'=>'150']);
       }     
    ?>
</div>
