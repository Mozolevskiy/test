<?php
use yii\widgets\ActiveForm;
use app\models;
use yii\helpers\Html;
use kartik\file\FileInput;
use yii\helpers\Url;
?>
<?php
$this->title = 'Create slide';
?>

<h1><?= Html::encode($this->title) ?></h1>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
<?= $form->field($model, 'imageFile')->widget(FileInput::classname(), [
    'options' => ['multiple' => false],
    'pluginOptions' => ['previewFileType' => 'any']
]);?>

<?=$form->field($model, 'title')->textInput()?>
<?=$form->field($model, 'caption')->textInput()?>

<?= Html::submitButton('Save', ['class'=>'btn btn-primary', 'id'=>'']); ?>

<?php ActiveForm::end() ?>

