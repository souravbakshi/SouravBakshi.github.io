<!doctype html>
<html class="no-js" lang="zxx">



<head>
    <meta charset="utf-8">
    <meta http-equiv="Saurabh-Bakshi">
    <title>Coming soon</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
   
    
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/space.css">
    <link rel="stylesheet" href="css/overright.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body data-spy="scroll" data-target=".mainmenu-area">
  
    <div class="preloader">
        <div class="sk-wave">
            <div class="sk-rect sk-rect1"></div>
            <div class="sk-rect sk-rect2"></div>
            <div class="sk-rect sk-rect3"></div>
            <div class="sk-rect sk-rect4"></div>
            <div class="sk-rect sk-rect5"></div>
        </div>
    </div>
    <div class="section-bg color">
        <div class="section-bg bg-1"></div>
    </div>
    <!--Mainmenu-Area-->
 
    <!--Mainmenu-Area / -->
    <div class="tab-content fullbox">
        <!--Header-Area-->
        <div class="relative fullbox header-area text-white tab-pane active fade in" id="home">
            <div class="section-bg color">
                <div class="section-bg bg-1"></div>
            </div>
            <div class="vcenter">
                <div class="container">
                    <div class="space-120 hidden visible-xs"></div>
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
                            <div id="countdown"></div>
                            <div class="space-10"></div>
                            <div class="bubbles">
                                <h1>Coming Soon</h1>
                            </div>
                            <div class="space-10"></div>
                        
                            <div class="space-40"></div>
                            <ul class="list-inline list-unstyled social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                               
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Header-Area / -->
   
       
  
    </div>
    <!--Vendor-JS-->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="js/contact-form.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/ajaxchimp.js"></script>
    <script src="js/plugins.js"></script>
    <!--Main-active-JS-->
    <script src="js/main.js"></script>
    <!--Maps JS-->
    
    <script src="js/maps.js"></script>
    <script type="text/javascript">
        $('#countdown').countdown('2018/03/20', function (event) {
            $(this).html(event.strftime('<ul class="list-unstyled list-inline"><li>%D <span>days</span></li><li>%H <span>Houre</span></li><li>%M <span>min</span></li><li>%S <Span>sec</Span></li></ul>'));
        });
    </script>
</body>



</html>
