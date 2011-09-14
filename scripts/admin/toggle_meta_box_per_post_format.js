jQuery( document ).ready( function($) {
	
	//do something on page load so radio isn't toggled to trigger event. Hide wyswyg when any format is selected
	
	var all_format_divs = "#format_blog_0, #format_blog_gallery, #format_blog_link, #format_blog_image, #format_blog_quote, #format_blog_video"

	$("input#post-format-0").change( function() {
		$("#postdivrich").removeClass( "hidden" );
	});
	
	$("#formatdiv input:not(#post-format-0)").change( function() {
		$("#postdivrich").addClass("hidden");
	});
	
	$("#formatdiv input").change(function() {
		var test= $(this).val();
		$(all_format_divs).addClass("hidden");
		$("#format_blog_" + test).removeClass("hidden");
	});	
	
	
	
	
	
	// $( "#post_format_box" ).addClass( "hidden" );
	// 
	// $( "input#post-format-0" ).change( function() {
	// $( "#postdivrich" ).removeClass( "hidden" );
	// $( "#post_format_box" ).addClass( "hidden" );
	// } );
	// 
	// $( "input:not(#post-format-0)" ).change( function() {
	// $( "#postdivrich" ).addClass( "hidden" );
	// $( "#post_format_box" ).removeClass( "hidden" );
	// } );
	// 
	// $( "input[name=\"post_format\"]" ).click( function() {
	// var mydiv = $(this).attr( "id" ).replace( "post-format-", "" );
	// $( "#post_format_box div.inside div" ).addClass("hidden");
	// $( "#post_format_box div.inside div#"+mydiv).removeClass( "hidden" );
	// } );
	// 
	// $('#blog_quote, #postdivrich, #postexcerpt').addClass('hidden');
	// 
	// $('#formatdiv input#post-format-0').change( function() {
	//     $('#blog_quote').hide();
	//     $('#postdivrich, #postexcerpt').show();
	// });
	// 
	// $('#formatdiv input#post-format-quote').change( function() {
	//     $('#postdivrich, #postexcerpt').hide();
	//     $('#blog_quote').show();
	// });
	
	
});



