<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
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
    <!-- css -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="simple-line-icons/css/simple-line-icons.css">
    <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
    <link href="css/flexslider.css" rel="stylesheet" />
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />-->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

</head>
<body>
<?php $this->beginBody() ?>
<div id="wrapper" class="home-page">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--<a class="navbar-brand" href="index.html"><img src="/img/logo.png" alt="logo"/></a>-->
                    <a class="navbar-brand" href="<?= \yii\helpers\Url::home() ?>"><?= HTML::img("@web/img/logo.png", ['alt' => 'SPEIA'])?></a>
                    <!--<a class="navbar-brand logo-text" href="index.html">SPEIA</a>-->
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="<?= \yii\helpers\Url::to(['/admin/pages/index'])?>">Pagini principale</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['/admin/news/index'])?>">Anunturi / Noutati</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['/admin/site/news'])?>">Decizii / dispozitii</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
        <!-- end header -->
                
	<section class="jumbobox">
            <div class="container">
                    <div class="row">
                            <div class="col-lg-12">
                                <div><h3 style="color:red">PANOUL DE ADMINISTRARE - acces doar pentru copywriter</h3>
                                    </div>

                            </div>
                    </div>
            </div>
	</section>   
            

        <div class="container">
            <?= $content; ?>
        </div>
        
<!--        <div class="clearfix"></div>-->
	<footer>
	<div class="container">
            <p>PANOUL DE ADMINISTRARE</p>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; Financial Services 2018 All right reserved. By </span><a href="http://webthemez.com" target="_blank">WebThemez</a>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer><!-- footer -->
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>