<?php

namespace app\models;

use yii;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ItemaddsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Item Adds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="itemadds-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Itemadds', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	
	
	<?php
	
	/* 
		Set current userid.
	*/
	
	$dataProvider = new ActiveDataProvider([
        'query' => Itemadds::find()->where(['user_id'=>Yii::$app->user->identity->id]),
		]);
 	?>
	
	
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
			//'user_id',
            'title',
            'description:ntext',
            'price',
            'tag',
            //'image:ntext',
			 array(
				'attribute' => 'image',
				'format' => 'html',
				'value'=>function($data) { $url = $data->imageurl; 
											return Html::img($url, ['height'=>'50', 'width'=>'50']);
										},
					),

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
