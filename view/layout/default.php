<!DOCTYPE html>
<html lang="fr" class="csstransforms csstransforms3d csstransitions js cssanimations csstransitions"> 
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 

    <meta charset="utf-8">
    <title><?php echo isset($title_for_layout)?$title_for_layout:'Lumitel SA - Entreprise Générale d’Electricité et Télécommunications'; ?></title>
    <meta name="description" content="Lumitel SA">
    <meta name="keywords" content="Lumitel SA">
    <meta name="author" content="Lumitel SA">
    <!-- end: Meta -->

    <!-- start: Favicon -->
    <link rel="shortcut icon" href="http://localhost/Lumi/webroot/favicon.ico">

    <!-- start: CSS -->

    <link rel="stylesheet" href="http://localhost/Lumi/webroot/css/css"> 
    <link rel="stylesheet" href="http://localhost/Lumi/webroot/css/css(1)"> 
    <link rel="stylesheet" href="http://localhost/Lumi/webroot/css/css(2)"> 
    <link rel="stylesheet" href="http://localhost/Lumi/webroot/css/css(3)"> 
    <link rel="stylesheet" href="http://localhost/Lumi/webroot/css/css(4)"> 
    <link rel="stylesheet" href="http://localhost/Lumi/webroot/css/css(5)"> 
    <link rel="stylesheet" href="http://localhost/Lumi/webroot/css/bootstrap.css"> 
    <link rel="stylesheet" href="http://localhost/Lumi/webroot/css/bootstrap-responsive.css"> 
    <link href="http://localhost/Lumi/webroot/css/style.min.css" rel="stylesheet">

    <link href="http://localhost/Lumi/webroot/css/parallax-slider.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">



     <link href="http://localhost/Lumi/webroot/css" rel="stylesheet" type="text/css">
    <!-- end: CSS -->



</head> 
<body> 


    <!--start: Navbar -->
    <nav class="navbar navbar-default" role="navigation">       
        <!--start: Container -->
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="brand" href="index.php"><img src="./webroot/img/LogoLumitel.png" alt="logo"></a>
                
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="nav navbar-right navbar-nav">
                    <li class="active dropdown">
                        <a class="brand" href="<?php echo BASE_URL.'/'; ?>">Acceuil</a>
                    </li>


                    <li ><a href="services.html">Prestations</a></li>
                    <li ><a href="pricing.html">Réalisations</a></li>
                    <li ><a href="blog.html">Entreprise</a></li>
                    <li ><a href="contact.html">Contact</a></li>

<!--
                    <?php $pagesMenu = $this->request('Pages', 'getMenu'); ?>
                    <?php foreach($pagesMenu as $p):?>
                          <li><a href="<?php echo BASE_URL.'/pages/view/'.$p->id; ?>" title="<?php echo $p->name; ?>"><?php echo $p->name; ?></a></li>
                    <?php endforeach; ?>-->
                    <li><a href="<?php echo Router::url('posts/index'); ?>">Actualités</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->    

        </div>
        <!--end: Container-->
    </nav>




    <!--end: Navbar -->     
    <!-- start: Page Title -->
    <div id="page-title">

        <div id="page-title-inner">

            <!-- start: Container -->
            <div class="container">

                <h2><i class="fa "></i>Acceuil</h2>

            </div>
            <!-- end: Container  -->

        </div>  

    </div>
    <!-- end: Page Title -->

            <div class="container"  style="padding-top:60px;">
                <?php echo $this->Session->flash(); ?>
                <?php echo $content_for_layout; ?>
            </div>

    <!-- start: Footer Menu -->
    <div id="footer-menu" class="hidden-sm hidden-xs">

        <!-- start: Container -->
        <div class="container">
            
            <!-- start: Row -->
            <div class="row">

                <!-- start: Footer Menu Logo -->
                <div class="col-sm-2">
                    <div id="footer-menu-logo">
                        <a class="brand" href="index3.html#">Lumi<span>tel</span>.</a>
                    </div>
                </div>
                <!-- end: Footer Menu Logo -->

                <!-- start: Footer Menu Links-->
                <div class="col-sm-9">
                    
                    <div id="footer-menu-links">

                        <ul id="footer-nav">

                            <li><a href="index.php">Acceuil</a></li>

                            <li><a href="about.html">Prestations</a></li>

                            <li><a href="services.html">Réalisation</a></li>

                            <li><a href="pricing.html">Entreprise</a></li>
                        
                            <li><a href="contact.php">Contact</a></li>

                            <li><a href="blog.php">Actualités</a></li>

                        </ul>

                    </div>
                    
                </div>
                <!-- end: Footer Menu Links-->

                <!-- start: Footer Menu Back To Top -->
                <div class="col-sm-1">
                        
                    <div id="footer-menu-back-to-top">
                        <a href="index.php#"></a>
                    </div>
                
                </div>



                <!-- end: F

                <!-- end: Footer Menu Back To Top -->
            
            </div>
            <!-- end: Row -->
            
        </div>
        <!-- end: Container  -->    

    </div>  
    <!-- end: Footer Menu -->



<!-- start: Footer -->
<div id="footer">

    <!-- start: Container -->
    <div class="container">

        <!-- start: Row -->
        <div class="row">

            <!-- start: Contact -->
            <div class="span4">

                <h3>Contact</h3>

                <div class="row">

                    <div class="span2">

                        <address>
                            <strong>Lumitel SA</strong> <br>
                            Rue du Vieux-Moulin 14<br>
                            1213 Onex<br>
                            Suisse<br>
                        </address>

                    </div>

                    <div class="span2">

                        <address>
                            <abbr title="Téléphone">Tel:</abbr> +41 22 793 28 90<br>
                            <abbr title="Fax">Fax:</abbr> +41 22 793 28 91<br>
                            <abbr title="Mobile">Mobile:</abbr> +41 79 658 46 14
                        </address>

                    </div>

                </div>

            </div>
            <!-- end: Contact -->

            <!-- start: Social -->
            <!--<div class="span4">-->

                <!--<h3>Social</h3>

                <!--<ul class="social-bookmarks">-->
                    <!--<li class="facebook">
                        <a href="#" target="_blank">facebook</a>
                    </li>-->
                    <!--<li class="googleplus">
                        <a href="#" target="_blank">googleplus</a>
                    </li>-->
                    <!--<li class="linkedin">
                        <a href="#" target="_blank">linkedin</a>
                    </li>-->
                    <!--<li class="twitter">
                        <a href="#" target="_blank">twitter</a>
                    </li>-->
                <!--</ul>-->

            <!--</div>-->
            <!-- end: Social -->

        </div>
        <!-- end: Row -->

    </div>
    <!-- end: Container  -->

</div>
<!-- end: Footer -->




<!-- start: Copyright -->
<div id="copyright">





    <!-- start: Container -->
    <div class="container">

        <div class="span12">
            <p>
                Copyright © 2015 <a href="#">Lumitel SA</a>
            </p>
        </div>

    </div>
    <!-- end: Container  -->

</div>


<!-- end: Copyright -->
<script type="text/javascript" src="http://localhost/Lumi/webroot/js/jquery-1.9.1.min.js"></script>
<script src="http://localhost/Lumi/webroot/js/bootstrap.js"></script>
<script src="http://localhost/Lumi/webroot/js/jquery.isotope.js"></script>
<script src="http://localhost/Lumi/webroot/js/jquery.imagesloaded.js"></script>
<script src="http://localhost/Lumi/webroot/js/flexslider.js"></script> 
<script src="http://localhost/Lumi/webroot/js/carousel.js"></script>
<script src="http://localhost/Lumi/webroot/js/jquery.cslider.js"></script>
<script src="http://localhost/Lumi/webroot/js/slider.js"></script>
<script src="http://localhost/Lumi/webroot/js/jquery.fancybox.js"></script>

<script src="http://localhost/Lumi/webroot/js/excanvas.js"></script>
<script src="http://localhost/Lumi/webroot/js/jquery.flot.js"></script>
<script src="http://localhost/Lumi/webroot/js/jquery.flot.pie.min.js"></script>
<script src="http://localhost/Lumi/webroot/js/jquery.flot.stack.js"></script>
<script src="http://localhost/Lumi/webroot/js/jquery.flot.resize.min.js"></script>

<script src="http://localhost/Lumi/webroot/js/custom.js"></script>
</body></html>