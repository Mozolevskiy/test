<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body data-spy="scroll" data-target=".navbar" id="page-top" data-offset="250">
<?php $this->beginBody() ?>


<?php
 NavBar::begin([
     'brandLabel' => 'Back to site',
     'brandUrl' => '/',
     'options' => [
         'class' => 'navbar-inverse',
     ],

 ]);
 echo Nav::widget([
     'options' => ['class' => 'navbar-nav navbar-right'],
     'items' => [
         Yii::$app->user->isGuest ? (
             ['label' => 'Login', 'url' => ['/site/login']]
         ) : (
             '<li>'
             . Html::beginForm(['/site/logout'], 'post')
             . Html::submitButton(
                 'Logout (' . Yii::$app->user->identity->username . ')',
                 ['class' => 'btn btn-link btn-logout']
             )
             . Html::endForm()
             . '</li>'
         )
     ],
 ]);
 NavBar::end();
?>
<ul class="nav navbar-nav side-nav">
    <li class="active">
        <a href="/about/">About</a>
    </li>
    <li>
        <a href="/services/">Services</a>
    </li>
</ul>
<div class="admin-wrap">
    <div class="container-fluid">
        <?= $content ?>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
