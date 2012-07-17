(function($){
	$(document).ready(function(){
		$('#content .post:last').next('.splitter.').remove();
		$('#content .post img').wrap('<div class="post-image"></div>');
		
	});
})(jQuery);