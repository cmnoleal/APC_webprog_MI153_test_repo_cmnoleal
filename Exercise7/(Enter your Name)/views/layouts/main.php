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
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'ABOUT ME',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['posts/index']],
           
 
			 ['label' => 'COMPOSED SONGS', 'url' => ['/site/about']],
 
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>
<body background="pictures\a.jpg">
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Welcome to my First Web Page <?= date('Y') ?></p>
		   <p class="pull-right">Contact #:09157434208 </a></p>
		   <p class="pull-right"> or Follow my <a href="https://twitter.com/KevsToots" rel="external"> Twitter Account &nbsp;</a></p>
        <p class="pull-right">Visit my <a href="https://www.facebook.com/kevsbarrion06" rel="external"> Facebook Account &nbsp;</a></p>
		 

       
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
