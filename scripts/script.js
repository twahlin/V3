//from boilerplate
if (navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i)) {
    var viewportmeta = document.querySelectorAll('meta[name="viewport"]')[0];
    if (viewportmeta) {
        viewportmeta.content = 'width=device-width, minimum-scale=1.0, maximum-scale=1.0';
        document.body.addEventListener('gesturestart', function() {
            viewportmeta.content = 'width=device-width, minimum-scale=0.25, maximum-scale=1.6';
        }, false);
    }
}

//Hide iphone bar
window.addEventListener("load",function() {
  setTimeout(function(){
    window.scrollTo(0, 1);
  }, 0);
});
//End Hide iphone bar

jQuery(document).ready(function($){
    
    //external links
    function externalLinks() {
     if (!document.getElementsByTagName) return;
     var anchors = document.getElementsByTagName("a");
     for (var i=0; i<anchors.length; i++) {
       var anchor = anchors[i];
       if (anchor.getAttribute("href") &&
           anchor.getAttribute("rel") == "external")
         anchor.target = "_blank";
     }
    }
    window.onload = externalLinks;
    //end external links

    //start hero slider
    $('.hero_slider').cycle({
		fx: 'fade',
        timeout: 5000,
        pause: true,
        pauseOnPagerHover: true,
        pager: '#slidesNav',
        pagerAnchorBuilder: pagerFactory
	});
	
	function pagerFactory(idx, slide) {
    var s = idx > 2 ? ' style="display:none"' : '';
    return '<li'+s+'><a href="#">'+(idx+1)+'</a></li>';
    };
    //end hero slider

    // hide js off paragraph
    $('p.js_off').hide();

		//twitter google-tweet.js
			getTwitters('tweet', { 
				id: 'twahlin', 
				count: 4, 
				enableLinks: true, 
				ignoreReplies: true, 
				clearContents: true,
				template: '<p>%text%</p>'
			});
    

    //flickr feed
    // $('.feed_flickr').flickrfeed('','', {
    //     limit: 10,
    //     imagesize: 'square'    
    // });



// $(function(){
//     var doc_height = $(document).height();
//     $(".main_content").css("height", doc_height);
// });

    

});