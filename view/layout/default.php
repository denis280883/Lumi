<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> 
    <head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
    <title><?php echo isset($title_for_layout)?$title_for_layout:'Mon site'; ?></title>
    <link rel="stylesheet" href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css">
     </head> 
    <body> 

        <div class="topbar">
            <div class="topbar-inner">
                <div class="container">
                    <h3><a href="#">Mon site</a></h3>
                    <ul class="nav">
                      <?php foreach ($pages as $p): ?>
                            <li><a href="<?php echo BASE_URL.'/pages/'.$p->id; ?>" title="<?php echo $p->name; ?>"><?php echo $p->name; ?></a></li>
                      <?php endforeach; ?>   
                    </ul>
                </div>
            </div>
        </div>



        <div class="container"  style="padding-top:60px;">
        	<?php echo $content_for_layout; ?>
        </div>

    </body> 
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
</html>