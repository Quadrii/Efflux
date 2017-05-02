<!doctype html>
<html lang="en-GB">
    <head>
        <title>Efflux</title>
        <meta name="google-site-verification" content="59oMM4Evdlm5DecQmPYS5xwsv98sjYqu6DN5vcBq37Q" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
         <meta name="keywords" content="Responsive website Design, Best website, Efflux, post a job, 
            Smartphone Compatible, free web designs" />
        <script src="angular.min.js"></script>
        <link rel="stylesheet" href="css/animate.css">
        <script src="js/modernizr.custom.js"></script>
        <link rel="stylesheet" href="css/font/font.css">
        <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/dolly.css">
        <link rel="stylesheet" href="css/q.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-98276436-1', 'auto');
          ga('send', 'pageview');
        </script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){     
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>
        
        <style>
            body {font: normal 0.9em Arial;margin:0;}
            a {color:#1155CC;}
            ul 
            .class {padding: 10px 0;}
            header {display:block;padding:60px 0 20px;text-align:center;position:absolute;top:8%;left:8%;z-index:4;}
            header a {
                font-family: sans-serif;
                font-size: 24px;
                line-height: 24px;
                padding: 8px 13px 7px;
                color: #fff;
                text-decoration:none;
                transition: color 0.7s;
            }
            header a.active {
                font-weight:bold;
                width: 24px;
                height: 24px;
                padding: 4px;
                text-align: center;
                display:inline-block;
                border-radius: 50%;
                color: #fff;
            }
        </style>
        <style>
          .carousel-inner > .item > img,
          .carousel-inner > .item > a > img {
              width: 70%;
              margin: auto;
          }
        </style>
    </head>
    <body ng-app="myApp" ng-controller="myCtrl" data-ng-init="firstName='Mr Q' ; myCol='red' quantity='1;cost=5'">
        <?php
            include ("header.php");
        ?>

        <div class="" style="margin-top:-10px;">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                   <div class="item--1">
                       
                   </div>
                  </div>

                  <div class="item">
                    <div class="item--2">
                        
                    </div>
                  </div>
                
                  <div class="item">
                    <div class="item--3">
                        
                    </div>
                  </div>

                  <div class="item">
                    <div class="item--4">
                        
                    </div>
                  </div>
                </div>
            </div>
        </div>
     
        <div class="" style="background:#fff;padding: 40px 0px;font-family: Museo; display: inline-block; width: 100%;background-size: cover;text-align: center;">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div>
                            <p class="cont" style="color:#84489C; font-size: 30px;font-family: Museo;font-weight: bold;padding-top: 30px;">{{theDate}}</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="div">
                           <p style="font-size: 15px;color: #000;line-height: 25px;text-align: justify;" class="text-primary text-center">Efflux company is driving the shift from company-centric marketing to digital advocate marketing. Our digital, web-oriented platform and team of experts helps the worlds most successful businesses spark, build and sustain a movement behind their brands with the participation of their greatest marketing asset: We believe the companies that put their customers at the heart of marketing and their business are the ones that will win</p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div>
                            <p class="cont" style="color:#84489C; font-size: 30px;font-family: Museo;font-weight: bold;padding-top: 30px;">{{theTime}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-banner">
            <div class="container">
                <div class="row">
                    <h1 class="h1">HOW IT WORKS</h1>
                    <div class="col-md-4" style="overflow: hidden;">
                        <span class="fa-stack fa-5x">
                            <i class="fa fa-circle fa-stack-2x icon-background"></i>
                            <i class="fa fa-envelope-open fa-stack-1x"></i>
                        </span>
                        <h2 class="h2">POST A JOB</h2>
                        <p class="p1">Tell us about your project. Is it a website design or web application design or a logo design or content write up? How urgent would you like to have it?</p> 
                    </div>
                    <div class="col-md-4" style="overflow: hidden;">
                        <span class="fa-stack fa-5x">
                            <i class="fa fa-circle fa-stack-2x icon-background"></i>
                            <i class="fa fa-user-o fa-stack-1x"></i>
                        </span>
                        <h2 class="h2">Talk To An Expert</h2>
                        <p class="p2">We'll match you with an expert to brainstorm and help you put together a workable plan with an affordable budget.</p>
                    </div>
                    <div class="col-md-4" style="overflow: hidden;">
                        <span class="fa-stack fa-5x">
                            <i class="fa fa-circle fa-stack-2x icon-background"></i>
                            <i class="fa fa-check fa-stack-1x"></i>
                        </span>
                        <h2 class="h2">Get The Work Done</h2>
                        <p class="p3">Sit back, relax and get updates on your project. We are confident based on our expertise and experience that you will be delighted.</p> 
                    </div>
                </div>
            </div>
        </div>

        <div class="banner">
            <div class="bann">
                <div class="container">
                    <h2 class="h21">WE DON’T JUST DO, WE OFFER WHAT IS BEST FOR YOU</h2>
                    <button class="get">GET A QUOTE</button>
                </div>
            </div>
        </div>

        <div class="main_banner">
            <div class="">
                <div class="row">
                    <div class="col-md-6" style="padding-right: 0px !important;padding-left: 0px !important;">
                        <div class="first">
                            
                        </div>
                    </div>
                    <div class="col-md-6"  style="padding-left: 0px !important; padding-right: 0px !important;">
                       <ul class="grid cs-style-4">
                            <li>
                                <figure>
                                    <div class="sou"><!-- <img src="images/outsourceit.png" alt="img05"> --></div>
                                    <figcaption>
                                        <h3>Check Out</h3>
                                        <div class="span" style="text-align: center !important;">Some Of Our Works</div>
                                        <a href="portfolio.html" style="text-decoration: none;">HERE</a>
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrap">
        </div>

        <?php
            include ("footer.php");
        ?>

        <script>
            $(document).ready(function () {
            var trigger = $('.hamburger'),
            overlay = $('.overlay'),
            isClosed = false;

            trigger.click(function () {
              hamburger_cross();      
            });

            function hamburger_cross() {

              if (isClosed == true) {          
                overlay.hide();
                trigger.removeClass('is-open');
                trigger.addClass('is-closed');
                isClosed = false;
              } else {   
                overlay.show();
                trigger.removeClass('is-closed');
                trigger.addClass('is-open');
                isClosed = true;
              }
            }
          
              $('[data-toggle="offcanvas"]').click(function () {
                    $('#wrapper').toggleClass('toggled');
              });  
            });
        </script>

        <script>
          var app = angular.module('myApp', []);
            app.controller('myCtrl', function($scope, $interval, $timeout , $interval , $http) {
                $scope.theDate = new Date().toLocaleDateString();
                $interval(function () {
                    $scope.theDate = new Date().toLocaleDateString();
                }, 1000);
               
                $scope.theTime = new Date().toLocaleTimeString();
                $interval(function () {
                    $scope.theTime = new Date().toLocaleTimeString();
                }, 1000);

                $http({
                    method : "GET",
                    url : "welcome.html"
                }).then(function mySucces(response) {
                    $scope.myWelcome = response.data;
                }, function myError(response) {
                    $scope.myWelcome = response.statusText;
                });
            });
        </script>
        <script src="js/toucheffects.js"></script>
</body>
</html>