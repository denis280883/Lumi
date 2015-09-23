jQuery(document).ready(function($) {

	function fixHeight () {

		var headerHeight = jQuery("#choose").height();
			
		jQuery("#iframe").attr("height", ((jQuery(window).height()) - headerHeight) + 'px');

	}

	jQuery(window).resize(function () {
	
		fixHeight();

	}).resize();
	
	$('#theme-dropdown li').hover(
	  function() {
	    $(this).find('.desc').show();
	  },
	  function() {
	    $(this).find('.desc').hide();
	  }
	);
		
	$('#current-theme').click(function(){
		
		$('#choose ul li ul').toggle();
		
	});
	
});

$(document).ready(function($) {
	
	$('.theme-buy').click(function(){
		
		var id = $('#this-product-id').html();
		var unique = $('#unique').html();  
		var type = 1;
		$.post("https://bootstrapmaster.com/wp-content/themes/bootstrap/clicks.php", { pid: id, type: type, unique: unique });
		
	});
	
	$(document).ready(function($) {

		if ($('#this-product-id').length) {

			var id = $('#this-product-id').html();
			var unique = $('#unique').html();   
			$.post("https://bootstrapmaster.com/wp-content/themes/bootstrap/tracking.php", { pid: id, unique: unique });

		}

	});
		
});	