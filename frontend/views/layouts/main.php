<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\FrontEndAsset;

use common\widgets\Alert;

FrontEndAsset::register($this);
?>
<?php
$identitas = \common\models\Identitas::find() ->where(['id_identitas' =>1]) ->one();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109265686-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-106051611-1');
</script> -->

    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?=$identitas->nama_website ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="index, follow">
	<link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />

    <meta name="description" content='<?=$identitas->meta_deskripsi ?>'/>
    <meta name="keywords" content="<?=$identitas->meta_keyword ?>">
    <meta http-equiv="Copyright" content='?=$identitas->nama_website ?>'>
    <meta name="author" content="Kharis Wibawandi">
    <meta http-equiv="imagetoolbar" content="no">
    <meta name="language" content="Indonesia">
    <meta name="revisit-after" content="7">
    <meta name="webcrawlers" content="all">
    <meta name="rating" content="general">
    <meta name="spiders" content="all">
    <meta name="google-site-verification" content="3dFNnpeNY0GQH6sGrAPtS0c6HyhB3qq3gypcgFy-R1w" />
    <?php $this->head() ?>
   
</head>
<body class="" data-smooth-scroll-offset="64">
<?php $this->beginBody() ?>


        <?= Alert::widget() ?>
		<?php echo $this->render('header') ?>	
		<div class="main-container">
			<?php echo $content ?>
			<?php echo $this->render('sponsor') ?>
			<?php echo $this->render('map') ?>
			<?php echo $this->render('footer') ?>
		</div>

 <!--<div class="loader"></div>-->
        <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
            <i class="stack-interface stack-up-open-big"></i>
        </a>
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109265686-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109265686-1');
</script>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
