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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    
<body>
    <!-- HEADER |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
    <header>
        
        
        
        <!-- <div> menu-top -->
        <div class="menu-top">
            <?php
            NavBar::begin([
                'options' => [
                    'class' => 'navbar navbar-default navbar-fixed-top',
                    'id' => '',
                ],
                'brandLabel' => '<img src="'.\Yii::$app->request->BaseUrl.'/img/logo.jpg" width="80x50">',
    //                    'brandUrl' => Yii::$app->homeUrl,
                'brandOptions' => [
                    'class' => 'navbar-brand',
                ],
                'renderInnerContainer' => true,
                'innerContainerOptions' => [
                    'class' => 'container',
                ],
            ]);
            echo Nav::widget([
                'activateItems' => true,
                'activateParents' => true,
                'encodeLabels' => false,
                'options' => [
                    'class' => 'navbar-nav nav-pills navbar-right'
                ],
                'items' => [
                    [
                        'label' => '<span class="glyphicon glyphicon-home"> Administratia', 
                        'url' => ['site/index'], 
                        'options' => [], 
                        'linkOptions' => []
                    ],
                    [
                        'label' => 'GAL', 
                        'url' => ['/post/index']
                    ],
                    ['label' => 'Economie',
                        'items' => [
                            [
                                'label' => 'Agenti economici',
                                'url' => ['site/contact'],   
                            ],
                            '<li class="dividier"></li>',
                            '<li class="dropdown-header"></li>',
                            [
                                'label' => 'Produse locale',
                                'url' => ['#'],
                            ],
                            '<li class="dividier"></li>',
                            '<li class="dropdown-header"></li>',
                            [
                                'label' => 'Cooperativa agricola',
                                'url' => ['#'],
                            ],
                            '<li class="dividier"></li>',
                            '<li class="dropdown-header"></li>',
                            [
                                'label' => 'Asociatia producatorilor',
                                'url' => ['#'],
                            ],
                        ],
                    ],
                    ['label' => 'Comunitate',
                        'items' => [
                            [
                                'label' => 'ONG-uri',
                                'url' => ['site/contact'],   
                            ],
                            '<li class="dividier"></li>',
                            '<li class="dropdown-header"></li>',
                            [
                                'label' => 'Institutii de invatamint',
                                'url' => ['#'],
                            ],
                            '<li class="dividier"></li>',
                            '<li class="dropdown-header"></li>',
                            [
                                'label' => 'Institutii medicale',
                                'url' => ['#'],
                            ],
                            '<li class="dividier"></li>',
                            '<li class="dropdown-header"></li>',
                            [
                                'label' => 'Cultura',
                                'url' => ['#'],
                            ],
                            '<li class="dividier"></li>',
                            '<li class="dropdown-header"></li>',
                            [
                                'label' => 'Sport',
                                'url' => ['#'],
                            ],
                            '<li class="dividier"></li>',
                            '<li class="dropdown-header"></li>',
                            [
                                'label' => 'Asistenta sociala',
                                'url' => ['#'],
                            ],
                        ],
                    ],
                    [
                        'label' => 'Proiecte', 
                        'url' => ['/post/index']
                    ],
                    ['label' => 'Potential turistic',
                        'items' => [
                            [
                                'label' => 'Patrimoniu local',
                                'url' => ['site/contact'],   
                            ],
                            '<li class="dividier"></li>',
                            '<li class="dropdown-header"></li>',
                            [
                                'label' => 'Festivaluri / evenimente',
                                'url' => ['#'],
                            ],
                            '<li class="dividier"></li>',
                            '<li class="dropdown-header"></li>',
                            [
                                'label' => 'Traseu turistic',
                                'url' => ['#'],
                            ],
                        ],
                    ],
                    [
                        'label' => 'Contact', 
                        'url' => ['/site/contact']
                    ],

                    Yii::$app->user->isGuest ? (
                        ['label' => 'Login', 'url' => ['site/login']]
                    ) : (
                        '<li>'
                        . Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                            'Logout (' . Yii::$app->user->identity->username . ')',
                            ['class' => 'btn btn-link logout']
                        )
                        . Html::endForm()
                        . '</li>'
                    )
                ],
            ]);
            NavBar::end();
            ?>
        </div> <!-- /.menu-top -->
        
        <!-- <section> menu-carousel -->
        <section class="menu-carousel">
            <div id="my-slider" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#my-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#my-slider" data-slide-to="1"></li>
                    <li data-target="#my-slider" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="/img/1.jpg" alt="1111">
                        <div class="carousel-caption">
                            <h1>Iubeste satul</h1>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/img/2.jpg" alt="1111">
                        <div class="carousel-caption">
                            <h1>Dezvota satul</h1>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/img/3.jpg" alt="1111">
                        <div class="carousel-caption">
                            <h1>Respecta traditiile</h1>
                        </div>
                    </div>
                </div>

                <a class="left carousel-control" href="#my-slider" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only" aria-hidden="true">Previous</span>
                </a>
                <a class="right carousel-control" href="#my-slider" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only" aria-hidden="true">Previous</span>
                </a>

            </div>
        </section>        
    </header>

    <!-- CONTENT |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
    <section class="content">
        <div class="container">
            <div class="row">
                <!-- sidebar left------------------------ -->
                <div class="col-lg-2 col-md-3  col-sm-3 col-xs-3 block">
                    <div class="list-group">
                        <h6 class="list-group-item active">
                        Despre Teilta
                        </h6>
                        <ul class="list-unstyled">
                            <li><a href="#">Istoria localitatii</a></li>
                            <li><a href="#">Asezare geografica</a></li>
                            <li><a href="#">Personalitati</a></li>
                            <li><a href="#">Telita in mass-media</a></li>
                            <li><a href="#">Localitati infratite</a></li>
                        </ul>
                    </div>
                    <div class="list-group">
                        <h6 class="list-group-item active">
                        Transparenta Decizionala
                        </h6>
                        <ul class="list-unstyled">
                            <li><a href="#">Decizii</a></li>
                            <li><a href="#">Dispozitii</a></li>
                            <li><a href="#">Modele de documente</a></li>
                        </ul>
                    </div>
                    <div class="list-group">
                        <h6 class="list-group-item active">
                        Anunturi / Stiri
                        </h6>
                    </div>
                    <div class="list-group">
                        <h6 class="list-group-item active">
                        Legi / Regulamente
                        </h6>
                    </div>
                </div>

                <!-- content------------------------ -->
                <div class="col-lg-8 col-md-6 col-sm-7 col-xs-9">
                    <?php echo $content ?>
                </div>

                <!-- sidebar right------------------------ -->
                <div class="col-lg-2 col-md-3 col-sm-2 hidden-xs block">
                    <div class="list-group">
                        <h6 class="list-group-item active">
                        Publicitate
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <!-- FOOTER |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
    <footer>
        <!-- footer-menu------------------------ -->
        <div class="footer-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- footer-copyright------------------------ -->
        <div class="footer copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-8">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

