<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AboutSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Section About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Slide', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
           // 'imageFile',
            [
                'label' => 'ImageFile',
                'format' => 'raw',
                'value' => function($data){
                    return Html::img(Url::toRoute($data->imageFile),[
                        'alt'=>'image',
                        'style' => 'width:100px;'
                    ]);
                },
            ],
            'caption',
            'title',

            ['class' => 'yii\grid\ActionColumn',
            'template'=>'{update} {delete}'
            ],
        ],
    ]); ?>
</div>
