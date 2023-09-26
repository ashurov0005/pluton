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
        <link rel="stylesheet" type="text/css" href="css/konslut.css"/>      
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
                            <li><a href="#portfolio">Тесты</a></li>
                            <li><a href="#about">Мой личный Дневник</a></li>
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
        
        <div class="section secondary-section " id="portfolio">
            <div class="triangle"></div>
            <div class="container">
                <div class=" title">
                <h1>Мои тесты</h1>   
                </div>
            
        
         <div class="row-fluid" style="margin: 0;">
            <div class="span4">
                <div class="centered service">
                    <div class="circle-border zoom-in">
                        <img class="da-slider" src="images/konsl/Рисунок6.png" alt="service 1">
                    </div>
                    <h3>Sber Переводы</h3>
                    <p1>Переводы на SberBank без %</p1>
                </div>
            </div>
            <div class="span4">
                <div class="centered service">
                    <div class="circle-border zoom-in">
                        <img class="da-slider" src="images/konsl/Рисунок2.png" alt="service 1">
                    </div>
                    <h3>Корти милли Переводы</h3>
                    <p1>Переводы на Корти милли без %</p1>
                </div>
            </div>
            <div class="span4">
                <div class="centered service">
                    <div class="circle-border zoom-in">
                        <img class="da-slider" src="images/konsl/Рисунок5.png" alt="service 3">
                    </div>
                    <h3>UnionPay  Переводы</h3>
                    <p1>Переводы через UnionPay в малых %</p1>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</div> 
                    <div id="slidingDiv7" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/2.png" alt="project 8">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Webste for Some Client</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Client</span>Some Client Name</div>
                                    <div>
                                        <span>Date</span>July 2020</div>
                                    <div>
                                        <span>Skills</span>HTML5, CSS3, JavaScript</div>
                                    <div>
                                        <span>Link</span>http://examplecomp.com</div>
                                </div>
                                <p>What if you gave someone a gift, and they neglected to thank you for it - would you be likely to give them another? Life is the same way. In order to attract more of the blessings that life has to offer, you must truly appreciate what you already have.</p>
                            </div>
                        </div>
                    </div>
                    <div id="slidingDiv8" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/Portfolio09.png" alt="project 9">
                        </div>
                        <div class="span6">а
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Webste for Some Client</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                        </div>
                    </div>
                    <ul id="portfolio-grid" class="thumbnails row">
                </div>
            </div>
        </div>
     <div class="section primary-section" id="about">
        <div class="triangle"></div>
            <div class="container">
                <div>

                </div>
                <div class="title" >
                    
    <!-- О НАС -->          
                <div class="row-fluid team">
                    <div class="span-1" id="first-person">
                        
                    </div>
                    <div class="span4" id="second-person">
                        <h3 style="font-size: 35px;">О нас</h3>
                        <div class="">
                            <img src="images/konsl/Рисунок4.png" alt="team 1">
                            <h3>"PLUTON"</h3>
                            
                        </div>  
                     </div> 
                        
                            <div class="span7">
                                <h3 style="margin-top: 50px;">Online banking является быстро развивающейся организацией, 
                            Online Banking  начел свою деятельность в 2020 году и за эти 2 года смог добиться быстрого роста в Республики Таджикистан. 
                                </h3>
                            </div>
                </div>
            </div>
        </div>                    
        <!-- contact form -->
                                   <div class="control-group">   
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="span9 center contact-info">
                        <p2>Контакты</p2>
                        <p class="info-mail">Телефоны доверия</p>
                        <p2>+992 92 841 80 88</p2>
                        <p2>+992 44 630 99 99</p2>
                        <div class="title">
                            <h3><a href="#">info@OB.tj</a> </h3>
                        </div>
                    </div>
                    <div class="row-fluid centered">
                        <ul class="social">
                            <li>
                                <a href="https://instagram.com/_ashurov_1_?igshid=YmMyMTA2M2Y=">
                                    <img src="http://dc.tj/images/soc4.svg" alt="" height="40" width="40">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="http://dc.tj/images/soc5.svg" alt="" height="40" width="40">
                                </a>
                            </li>
                            <li>
                                <a href="https://instagram.com/_ashurov_1_?igshid=YmMyMTA2M2Y=">
                                    <img src="http://dc.tj/images/soc2.svg" alt="" height="40" width="40">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="http://dc.tj/images/soc3.svg" alt="" height="40" width="40">
                                    
                                </a>
                            </li>
                            
                        </ul>
                    </div>       
                      </div> 
                </div>
            </div>
        </div>
        <div class="footer">
            <p>&copy; «Online Banking» 2022
                . <a href="#">  </a></p>
        </div>
        <div class="scrollup">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>
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