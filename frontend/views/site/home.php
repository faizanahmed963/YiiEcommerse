<?php

use yii\helpers\Html;
use app\models\Itemadds;
use yii\widgets\DetailView;

	$allProducts = Itemadds::find()
    ->asArray()
    ->all();

?>

<div class="row">

	<h1>All Product List:</h1>
	
			<?php foreach($allProducts as $item): ?>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
						
                            <!-- <img src="http://placehold.it/320x150" alt=""> -->
							<?php echo Html::img('@web/'.$item['image'], ['height'=>'100', 'width'=>'320']); ?>
							
                            <div class="caption">
							
                                <h4 class="pull-right"><?= "Pkr - ".$item['price'] ?></h4>
								
                                <h4><a href="#"><?= $item['title'] ?></a></h4>
								
                                <p><?= $item['description'] ?><p>
								<p>See original website <a target="_blank" href="#">Barnd-Name - http://example.com</a>.</p>
								
                            </div>
							
                            <div class="ratings">
							
								<p><a href='index.php?add_cart=$pro_id'><button class='pull-right'>Buy</button></a></p>
								
								<br><br>
								
                                <p class="pull-right">15 reviews</p>
								
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
					
			<?php endforeach; ?>
</div>