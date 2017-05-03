<!DOCTYPE html>
<html>
    <head>
        <title>Efflux | Contact</title>
        <meta name="google-site-verification" content="59oMM4Evdlm5DecQmPYS5xwsv98sjYqu6DN5vcBq37Q" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="keywords" content="Responsive website Design, Best website, Efflux, post a job, 
            Smartphone Compatible, free web designs" />
        <script src="angular.min.js"></script>
        <link rel="stylesheet" href="css/contact.css">
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
    </head>
    <body style="background: #fff !important;">
        <?php
            include ("header.php");
        ?>
        
        <div class="banner_wrap">
            <div class="baner"></div>
        </div>

        <table style="width: 100%;">
            <tr>
                <th style="text-align: center; padding: 10px 0px; font-size: 40px; font-family: Museo;">How can we help you?</th>
            </tr>
            <tr>
                <td style="text-align: center; padding: 10px 0px; font-size: 20px; font-family: Museo;">
                    Drop us a line...We're glad to be of service.
                </td>
            </tr>
        </table>

        <div class="container" style="margin-bottom: 30px;">
            <div class="row">
                <div class="col-md-8">
                    <form name="registration_form" id="registration_form" class="form-horizontal"  enctype="multipart/form-data" action="process-contact-form.php" method="post">
                        <div class="form-group form_wrap">      
                           <div class="col-sm-12">
                                <label for="sur" class="lab">Full Name:</label>
                                <input type="text" class="form-control input" name="fullname" id="fullname" placeholder="Full Name" required>
                           </div>
                        </div><!--/form-group-->

                        <div class="form-group form_wrap">      
                           <div class="col-sm-12">
                                <label for="sur" class="lab">Email Address:</label>
                                <input type="email" class="form-control input" name="emailaddress" id="emailaddress" placeholder="Enter Email Address" required>
                           </div>
                        </div><!--/form-group-->

                        <div class="form-group form_wrap">      
                           <div class="col-sm-12">
                                <label for="sur" class="lab">Phone Number:</label>
                                <input type="text" class="form-control input" name="number" id="number" placeholder="Enter Phone Number" required>
                           </div>
                        </div><!--/form-group-->

                        <div class="form-group form_wrap">      
                           <div class="col-sm-12">
                                <label for="sur" class="lab">Message:</label> <br>
                                <textarea class="textarea" name="message"></textarea>
                           </div>
                        </div><!--/form-group-->
                        <input type="submit" value="Send Message" class="button">
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="right_wrap">
                        <div class="top">
                            <table>
                                <tr>
                                    <th>
                                        INQUIRIES
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        For General, Business, Press & Editorial equiries
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        info@effluxcompany.com
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="down">
                            <table>
                                <tr>
                                    <th>
                                        OFFICE ADDRESS
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        951B, Admiral Oduwaye Street,
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Omole Phase 2,
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ojodu Berger, Lagos Nigeria.
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
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