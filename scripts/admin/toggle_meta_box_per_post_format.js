jQuery( document ).ready( function($) {
    


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

    $('#blog_quote, #postdivrich, #postexcerpt').addClass('hidden');
    
    $('#formatdiv input#post-format-0').change( function() {
        $('#blog_quote').hide();
        $('#postdivrich, #postexcerpt').show();
    });
    
    $('#formatdiv input#post-format-quote').change( function() {
        $('#postdivrich, #postexcerpt').hide();
        $('#blog_quote').show();
    });

});



