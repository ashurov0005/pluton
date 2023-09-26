<?php
	session_start();
	ini_set('display_errors','on');
    error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">   
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>psixo.tj</title>
        <link rel="stylesheet" type="text/html" href="registr.html" />
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/pluton.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <link rel="stylesheet" type="text/css" href="css/vrach time.css"/>      
        <!-- Fav and touch icons -->

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="images/22.png">
        <link rel="shortcut icon" href="images/22.png">
    </head>
    
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                      </div>
                    <a href="#" class="brand">
                        <img src="images/22.png" width="128" height="128" alt="Logo" />
                    </a>
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Main navigation -->
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
                            <li class="active"><a href="index.html">Главная</a></li>
                            <li class="active"><a href="time.php">Часы приема</a></li>
                            <li><a href="#about">Результаты</a></li>
                           <li><div class="dropdown">
                                </div>
                              </div></li> 
                    </div>
      
</div>                    

        <div id="home">
            <div id="da-slider" class="da-slider">
                <div class="triangle"></div>
                <div class="mask"></div>
                <div class="container">
                    <!-- Start first slide -->
                    <div class="da-slide">
                        <h2 class="fittext2"><?php if(isset($_SESSION['fname'])){echo "Добрый Вечер ".$_SESSION['fname'];}else{unset($_SESSION['fname']);} ?></h2>
                        <h4>Сегодня для вас отдельная процедура</h4> 
                        <div class="da-img">
                            <img src="images/konsl/997328bdd60d5fb30b55e40d386e4d87.png" alt="image01" width="320">
                        </div>
                    </div>
                    <div class="da-slide">
                        <h2>Опишите свой день</h2>
                        <h4>Свое состояние👇🏻</h4>
                        <div class="da-img">
                            <img src="images/konsl/4.png" alt="image01" width="320">
                        </div>
                    <div class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="section primary-section" id="service" >
            <div class="container">
                <div class="title">
                    <h1>Ждем ваше письмо о состоянии </h1>
                    <title>Текстовое поле</title>
                    <textarea name="message"></textarea >
                    <input type="submit" name="submit_btn" value="Отправить">                
        
                </div>
            </div>
        </div>                    
        <!-- contact form -->
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="js/jquery.inview.js"></script>
        <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>