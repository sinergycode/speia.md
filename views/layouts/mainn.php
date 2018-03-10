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
                        <!--<li class="active"><a href="<?echo \yii\helpers\Url::home() ?>">Acasa</a></li>--> 
                        <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Primaria <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="about.html">Structura Organizatorica</a></li>
                                <li><a href="#">Dispozitii Primar</a></li>
                                <li><a href="#">Proiecte</a></li> 
                                <li><a href="#">Oportunitati</a></li>
                                <li><a href="#">Localitati infratite</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Consiliul Local <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="about.html">Buletin informativ</a></li>
                                <li><a href="#">Decizii</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Informatii publice <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="about.html">Stiri / Anunturi</a></li>
                                <li><a href="about.html">Speia in mass-media</a></li>
                                <li><a href="#">Taxe / Impozite</a></li>
                                <li><a href="#">Legi / Regulamente</a></li>
                                <li><a href="#">Modele de documente</a></li>
                                <li><a href="#">Orarul transportului rutier</a></li>
                                
                            </ul>
                        </li>
                        <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Mediul Local <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Personalitati locale</a></li>
                                <li><a href="#">Agenti economici</a></li>
                                <li><a href="#">ONG-uri</a></li>
                                <li><a href="#">Institutii de invatamint</a></li>
                                <li><a href="#">Institutiii medicale</a></li>
                                <li><a href="#">Sectii sportive / creative</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Potential Turistic <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="about.html">Patrimoniu Local</a></li>
                                <li><a href="#">Festivaluri / Evenimente locale</a></li>
                                <li><a href="#">Traseu turistic</a></li>
                            </ul>
                        </li>

                        <li><a href="<?= \yii\helpers\Url::to(['/site/contact'])?>">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->
        
        <div class="container">
            <?= $content; ?>
        </div>
        
	 <section class="clients">
	 <div class="container">
	 	<div class="clients-slider">
				<h3 class="header-title">Proiecte implementate in Speia</h3>
				<div class="clients-control pull-right">
					<a class="prev btn btn-gray btn-xs"><i class="fa fa-angle-left fa-2x"></i></a>
					<a class="next btn btn-gray btn-xs"><i class="fa fa-angle-right fa-2x"></i></a>
				</div>
				<span class="line"></span>
				<div id="clients-slider" class="owl-carousel">
					<div class="item">
                                                    2018 <br> <b>PROIECTUL CCA</b> <br> Proiect de creare a site-ului primariei si de include a info
                                                    <br><a href="#">Detalii</a>
					</div>
					<div class="item">
                                                    2017 <br> <b>PROIECTUL GIZ</b> <br> text text text text text text text text text text text text 
						    <br><a href="#">Detalii</a>
					</div>
					<div class="item">
                                                    2016 <br> <b>PROIECTUL AGRICULTURA</b> <br> text text text text text text text text text text text text 
						<br><a href="#">Detalii</a>
					</div>
					<div class="item">
                                                    2015 <br> <b>PROIECTUL CCA</b> <br> Proiect de creare a site-ului primariei si de include a info
                                                    <br><a href="#">Detalii</a>
					</div>
					<div class="item">
                                                    2014 <br> <b>PROIECTUL GIZ</b> <br> text text text text text text text text text text text text 
						    <br><a href="#">Detalii</a>
					</div>
					<div class="item">
                                                    2013 <br> <b>PROIECTUL AGRICULTURA</b> <br> text text text text text text text text text text text text 
						<br><a href="#">Detalii</a>
					</div>
					<div class="item">
						<a href="#">
						<img alt="Our Client" src="/img/OurClients/amazon-grey.png">
						<img alt="Our Client" src="/img/OurClients/amazon.png" class="colored">
						</a>
					</div>
					<div class="item">
						<a href="#">
						<img alt="Our Client" src="/img/OurClients/cisco_grey.png">
						<img alt="Our Client" src="/img/OurClients/cisco.png" class="colored">
						</a>
					</div>
					<div class="item">
						<a href="#">
						<img alt="Our Client" src="/img/OurClients/cityairline-grey.png">
						<img alt="Our Client" src="/img/OurClients/cityairline.png" class="colored">
						</a>
					</div>
					<div class="item">
						<a href="#">
						<img alt="Our Client" src="/img/OurClients/dell-grey.png">
						<img alt="Our Client" src="/img/OurClients/dell.png" class="colored">
						</a>
					</div>
					<div class="item">
						<a href="#">
						<img alt="Our Client" src="/img/OurClients/ebay-grey.png">
						<img alt="Our Client" src="/img/OurClients/ebay.png" class="colored">
						</a>
					</div> 
					<div class="item">
						<a href="#">
						<img alt="Our Client" src="/img/OurClients/google-grey.png">
						<img alt="Our Client" src="/img/OurClients/google.png" class="colored">
						</a>
					</div>
				</div>
				<div class="fullwidth margin-bottom-20">
				</div>
			</div>
		 </div>
	 </section><!-- clienti -->
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="widget">
					<h5 class="widgetheading">Potential Turistic</h5>
					<ul class="link-list">
						<li><a href="#">Patrimoniu local</a></li>
						<li><a href="#">Fesivaluri / evenimente</a></li>
						<li><a href="#">Traseu turistic</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<div class="widget">
					<h5 class="widgetheading">Mediu Local</h5>
					<ul class="link-list">
						<li><a href="#">Personalitati locale</a></li>
						<li><a href="#">Agenti economici</a></li>
						<li><a href="#">ONG-uri</a></li>
						<li><a href="#">Institutii de invatamint</a></li>
						<li><a href="#">Institutii medicale</a></li>
						<li><a href="#">Sectii sportive / creative</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<div class="widget">
					<h5 class="widgetheading">Stiri / Anunturi</h5>
					<ul class="link-list">
						<li><a href="#">Se vinde teren.</a></li>
						<li><a href="#">Se de in chirie spatiu.</a></li>
						<li><a href="#">Se angajeaza in pozitia de X.</a></li>
					</ul>
				</div>
			</div>
                        <div class="col-md-3">
				<div class="widget">
					<h5 class="widgetheading">Contact</h5>
					<address>
					<strong>Primaria satului Speia</strong><br>
					Republica Moldova, raionul Anenii Noi<br>
					 str. Xyzw</address>
					<p>
						<i class="icon-phone"></i> +(373) 69 710 777 <br>
						<i class="icon-envelope-alt"></i> info@speia.md
					</p>
				</div>
			</div>
		</div>
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
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script> 
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<script src="js/owl-carousel/owl.carousel.js"></script>-->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>