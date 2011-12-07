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
  $(function() {
    $('a[rel*=external]').click( function() {
      window.open(this.href);
      return false;
    });
  });
  //end external links

  //start hero slider
  $('.hero_slider').cycle({
    fx: 'fade',
    timeout: 5000,
    pause: true,
    pauseOnPagerHover: true,
    prev:   '#slider_prev', 
    next:   '#slider_next',
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

  //fitvid - responsive video
  $("#page_wrap").fitVids();
  //end fitvid - responsive video   

});

$(window).load(function () {

  //functionlist for window.load
  autoWindowHeight();
  autoSidebarHeight();
  //end functionlist for window.load

  //begin setting the height for main content div        
  function autoWindowHeight() {
    var windowHeight = $(window).height();
    var mainContentHeight = $("#main_content_inner").height();
    var footerHeight = $("footer").height();
    var headerHeight = $("header").height() + $(".before_header").height() + 22;
    var mainContentBottomPadding = windowHeight - headerHeight - footerHeight - mainContentHeight;
    $("#main_content_inner").css("padding-bottom", mainContentBottomPadding);
  }
  //end setting the height for main content div 
  
  //sidebar height functionality
  function autoSidebarHeight() {
    var colsWrapHeight = $('.cols_wrap').height();
    var colsWrapDifference = colsWrapHeight - $('.global_sidebar').height();
    if ($('.col_right').css('float') === 'right') {
      $('.faux_sidebar').css("height", colsWrapDifference);
    }
  }
  //end sidebar height functionality

  //window resize function    
  $(window).resize(function(){
    autoWindowHeight();
    autoSidebarHeight();    
  });
  //end window resize function 

  //Masonry Functionality
  var $container = $('#masonry_responsive_grid');

  $(window).resize(function(){
    $container.masonry({
      itemSelector: '.masonry_item',
      isResizable: true,
    });
    // trigger resize to set up masonry on start-up
  }).resize();
  //End Masonry Functionality    
});