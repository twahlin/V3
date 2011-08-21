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

    // Twitter, flickr, and last.fm feeds
    $('p.js_off').hide();
    $('.feed_twitter').twitterfeed('twahlin', {
        limit: 5
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