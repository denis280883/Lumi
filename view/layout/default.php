<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> 
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
    <title><?php echo isset($title_for_layout)?$title_for_layout:'Lumitel SA - Entreprise Générale d’Electricité et Télécommunications'; ?></title>
    <meta name="description" content="Lumitel SA">
    <meta name="keywords" content="Lumitel SA">
    <meta name="author" content="Lumitel SA">

    <!-- start: Favicon -->
    <link rel="shortcut icon" href="http://localhost/Lumi/webroot/favicon.ico">

    <!-- start: CSS -->
    <link rel="stylesheet" href="http://localhost/Lumi/webroot/css/bootstrap.css"> 
    <!-- end: CSS -->

    <!-- start: Script -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <!-- end: Script -->

</head> 
<body> 


<!--start: Header -->
<header>

    <!--start: Container -->
    <div class="container">

        <!--start: Navbar -->
        <div class="navbar navbar-inverse navbar">
            <div class="navbar-inner">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </a>

                <a class="brand" href="<?php echo BASE_URL.'/'; ?>">Lumitel SA</a>
                <div class="nav-collapse collapse">

                    <ul class="nav">
                      <?php $pagesMenu = $this->request('Pages', 'getMenu'); ?>
                      <?php foreach($pagesMenu as $p):?>
                            <li><a href="<?php echo BASE_URL.'/pages/view/'.$p->id; ?>" title="<?php echo $p->name; ?>"><?php echo $p->name; ?></a></li>
                      <?php endforeach; ?>
                      <li><a href="<?php echo Router::url('posts/index'); ?>">Actualité</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--end: Navbar -->
        <div class="container"  style="padding-top:60px;">
            <?php echo $this->Session->flash(); ?>
        	<?php echo $content_for_layout; ?>
        </div>
    </div>
    <!--end: Container-->

</header>
<!--end: Header-->

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


 </body></html>