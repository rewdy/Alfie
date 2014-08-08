/*

Javascript
----------

Project:	Alfie Theme JavaScript
Date:		July 2013

*/

jQuery(function($){
	// drawer link setup
	jQuery('a.drawer-link, #page-overlay').click(function(){
		jQuery('#control').toggleClass('open');
		return false;
	});
	
	// Messages closer links
	jQuery('.messages').append('<a href="#close" class="closer" title="Close message"><i class="fa fa-times-circle"></i><span class="text">Close</span></a>');
	jQuery('.messages .closer').click(function(){
		jQuery(this).parent().slideUp(1000,function(){
			jQuery(this).remove();
		});
		return false;
	});

	// Nivo Lightbox for portfolio
	jQuery('.screenshot-thumbnails').each(function(index){
		var links = jQuery(this).find('.screenshot a');
		links.attr('data-lightbox-gallery', 'gallery-' + index);
		links.nivoLightbox({
			effect: 'fadeScale'
			// afterShowLightbox: function(lb){
			// 	jQuery('.nivo-lightbox-image img').click(function(){
			// 		jQuery('.nivo-lightbox-content').toggleClass('scroll');
			// 	});
			// }
		});
	});
});