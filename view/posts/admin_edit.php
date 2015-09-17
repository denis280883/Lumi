<div class="page-header">
	<h1>Editer un article</h1>
</div>

<form action="<?php echo Router::url('admin/posts/edit/'.$id); ?>" method="post">
	<?php echo $this->Form->input('name', 'titre') ?>
	<?php echo $this->Form->input('slug', 'url') ?>
	<?php echo $this->Form->input('id', 'hidden'); ?>
	<?php echo $this->Form->input('content', 'Contenu',array('type'=>'textarea', 'class'=>'xxlarge wysiwyg','rows'=>5)); ?>
	<?php echo $this->Form->input('online', 'En ligne',array('type'=>'checkbox')); ?>
	<div class="action">
		<input type="submit" class="btn primary" value="Envoyer">

	</div>
</form>

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
            file : '<?php echo Router::url('admin/medias/index/'.$id); ?>',
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