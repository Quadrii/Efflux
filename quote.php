<!doctype html>
<html>
    <head>
        <link rel="icon" href="favicon.png" sizes="16x16 32x32" type="image/png">
         <!-- Facebook Pixel Code -->
            <script>
            !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
            document,'script','https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '241495902931278'); // Insert your pixel ID here.
            fbq('track', 'PageView');
            </script>
            <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=241495902931278&ev=PageView&noscript=1"
            /></noscript>
            <!-- DO NOT MODIFY -->
        <!-- End Facebook Pixel Code -->
        <title>Efflux | Quote</title>
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
    <body style="background:#fff !important;">
    	<?php
            include ("header.php");
        ?>

    	<div class="">
    		<img src="images/quo.jpg" alt="" width="100%" height="400px">
    	</div>

        <div class="container" style="margin-bottom: 30px;">
            <div class="row">
                <h3 class="your">POST YOUR JOB HERE</h3>
                <div class="col-md-12">
                    <form name="registration_form" id="registration_form" class="form-horizontal"  enctype="multipart/form-data" action="process-quote-form.php" method="post">
                        <div class="form-group form_wrap">      
                            <div class="col-sm-6">
                                <label for="sur" class="tim">Full Name:</label>
                                <input type="text" class="form-control input" name="fullname" id="fullname" placeholder="Full Name" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="sur" class="tim">Email Address:</label>
                                <input type="email" class="form-control input" name="emailaddress" id="emailaddress" placeholder="Enter Email Address" required>
                            </div>
                        </div>
                         <div class="form-group form_wrap">      
                            <div class="col-sm-6">
                                <label for="sur" class="tim">Address:</label>
                                <input type="text" class="form-control input" name="address" id="address" placeholder="Enter Address" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="sur" class="tim">Phone Number:</label>
                                <input type="number" class="form-control input" name="number" id="number" placeholder="Enter Phone Number" required>
                            </div>
                        </div>
                        <div class="form-group form_wrap">
                            <div class="col-sm-6">
                                <label for="sur" class="tim">Timeline</label>
                                <select class="form-control" name="timeline" id="timeline" required>
                                    <option value="" selected="selected">please select - - -</option>
                                    <option value="4 Days">4 Days</option>
                                    <option value="1 Week">1 Week</option>
                                    <option value="2 Weeks">2 Weeks</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                 <label class="sur tim" for="budget">What's your Budget:</label>
                                <input type="text" class="form-control" name="amount" id="amount" placeholder="Enter Your Budget e.g 30,000" required>
                            </div>
                            <div class="col-sm-12">
                                <label class="lab tim" for="sur">Description:</label>
                                <textarea class="form-control" rows="7" id="Description" name="Description" required></textarea>
                            </div>
                        </div>
                        <input type="submit" value="post" class="button">
                    </form>
                </div>
            </div>
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