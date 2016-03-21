<?php

use yii\helpers\Html;
use kartik\file\FileInput;
use yii\bootstrap\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\Services */

$this->title = 'Create Services';
$this->params['breadcrumbs'][] = ['label' => 'Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-form">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
    <?= $form->field($model, 'imageFile')->widget(FileInput::classname(), [
        'options' => ['multiple' => false],
        'pluginOptions' => ['previewFileType' => 'any']
    ]);?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'description')->textarea(array('rows'=>2,'cols'=>5)); ?>

    <div class="form-group">
        <?= Html::submitButton('Create', ['class'=>'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
