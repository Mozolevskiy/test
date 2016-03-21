<?php
use yii\widgets\ActiveForm;
use app\models;
use yii\helpers\Html;
use kartik\file\FileInput;
use yii\helpers\Url;
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
<?= $form->field($model, 'imageFile')->widget(FileInput::classname(), [
'options' => ['multiple' => false],
'pluginOptions' => ['previewFileType' => 'any']
]);?>

<?=$form->field($model, 'title')->textInput()?>
<?=$form->field($model, 'caption')->textInput()?>

<?= Html::submitButton('Save', ['class'=>'btn btn-primary', 'id'=>'']); ?>

<?php ActiveForm::end() ?>

<?php


var_dump($list);

?>
