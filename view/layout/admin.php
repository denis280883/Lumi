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
<script type="text/javascript">

      tinyMCE.init({
        // General options
        mode : "specific_textareas",
        editor_selector : "wysiwyg",
        theme : "advanced",
        relative_urls : false,
        plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
     
        // Theme options
        theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,bullist,numlist,blockquote,|,justifyleft,justifycenter,justifyright,justifyfull,|,link,unlink,image,|,formatselect,fullscreen,code,ibrowser",

        theme_advanced_buttons2 : "",
        theme_advanced_buttons3 : "",
        theme_advanced_buttons4 : "",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Skin options
        skin : "o2k7",
        skin_variant : "silver",
        file_browser_callback : 'fileBrowser'
    });

    function fileBrowser(field_name, url, type, win){

          tinyMCE.activeEditor.windowManager.open({
            file : 'http://www.prodimex.ch/',
            title : 'Gallerie',
            width: 420,
            height: 400,
            resizable : 'yes',
            inline : 'yes',
            close_previous : 'no'
          },{
            window : win,
            input : field_name
          });
          return false; 
    }
</script>
</html>