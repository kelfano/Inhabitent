		
	(function($) {
			$('.search-form').hide();

				$('.fa-search').click(function(e) {
					e.preventDefault();
			
				  $('.search-form').animate({width:'toggle'},350);
          $('.search-field').focus();
             
				});

				$('.search-field').blur(function() {
					$('.search-form').animate({width:'toggle'},350);
				});

	})(jQuery);
				