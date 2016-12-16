(function( $ ) {
 
    "use strict";

    $(document).ready( function(){
    	
    	$('.mailing-list-form-button').click(

	    	var data = {
				'action': 'fcbc_mailing_list',
				'email': $('.mailing-list-email').val();
			};

			// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
			jQuery.post(ajaxurl, data, function(response) {
				alert('Got this from the server: ' + response);
			});

    	);
    } ); 
 
})(jQuery);