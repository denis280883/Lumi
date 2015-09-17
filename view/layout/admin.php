<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> 
    <head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
    <title><?php echo isset($title_for_layout)?$title_for_layout:'Administration'; ?></title>    
    <link rel="stylesheet" href="http://bootstrapdocs.com/v2.3.2/docs/assets/css/bootstrap.css">
    </head> 
<body> 

        <div class="navbar navbar-inverse navbar">
            <div class="navbar-inner">
                <div class="nav-collapse collapse">
                   
                    <h3><a href="<?php echo Router::url('admin/posts/index'); ?>">Administration</a></h3>
                    <ul class="nav">
                            <li><a href="<?php echo Router::url('admin/posts/index'); ?>">Articles</a></li>
                            <li><a href="<?php echo Router::url('admin/pages/index'); ?>">Pages</a></li>
                            <li><a href="<?php echo Router::url('/'); ?>">Voir le site</a></li>
                    </ul>
                </div>
            </div>
        </div>





        <div class="container"  style="padding-top:60px;">
            <?php echo $this->Session->flash(); ?>
        	<?php echo $content_for_layout; ?>
        </div>

    </body> 
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo Router::webroot('js/tinymce/tiny_mce.js'); ?>"></script>
</html>