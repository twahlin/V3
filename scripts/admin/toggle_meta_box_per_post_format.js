jQuery( document ).ready( function($) {
	//if #menu-posts-blog has a class of wp-has-current-submenu, post toggling can happen	
	if ($("#menu-posts-blog").is('.wp-has-current-submenu')) {
	
		var all_format_divs = "#format_blog_0, #format_blog_gallery, #format_blog_link, #format_blog_image, #format_blog_quote, #format_blog_video"
		var currently_selected = $("#formatdiv input:checked").val();

		$("#postdivrich, #postexcerpt").addClass("hidden");
		$(all_format_divs).addClass("hidden");

		$("#format_blog_" + currently_selected).removeClass("hidden");

		if(currently_selected == 0){
			$("#postdivrich, #postexcerpt").removeClass("hidden");	
		}

		$("input#post-format-0").change( function() {
			$("#postdivrich, #postexcerpt").removeClass( "hidden" );
		});

		$("#formatdiv input:not(#post-format-0)").change( function() {
			$("#postdivrich, #postexcerpt").addClass("hidden");
		});

		$("#formatdiv input").change(function() {
			var format_input = $(this).val();
			$(all_format_divs).addClass("hidden");
			$("#format_blog_" + format_input).removeClass("hidden");
		});	
	}
});