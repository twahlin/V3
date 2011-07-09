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

    //last.fm feed
    $('.feed_lastfm').lastfm('twahlin','recenttracks','9b5045d6a52e5972cdf40e1193c1041f', {
        limit: 10,        
        noimage: 'public/images/noimage.gif',
        imagesize: 'large'
    });


// $(function(){
//     var doc_height = $(document).height();
//     $(".main_content").css("height", doc_height);
// });

    

});

































// // Frawleyyyyyy
// 
// // You've made an extremely wise choice my friend. **js.frawley-jQuery/slideshow.jscript** won't fail you.
// // 
// // Setup
// // =====
// // Requiring this script will find `.slideshow` elements and initializes them on page load.
// //
// // It doesn't generate any markup for you currently, so use markup like this:
// //
// //   <div class="slideshow" data-slideshow='{"autoplay": 10}'>
// //    <div class="slides-viewport">
// //      <ol class="slides">
// //        <li></li>
// //        <li></li>
// //      </ol>
// //    </div>
// //    <div class="prev">Previous Slide</div>
// //    <div class="next">Next Slide</div>
// //    <ol class="dots"></ol>                     
// //  </div> 
// //
// //  And styles that look like:
// //   
// //     :)                               
// //
// // Customizing
// // ===========
// // You can set the `data-slideshow` attribute on the `.slideshow` element to
// // provide settings for the slideshow, in the form of a JSON object.  Make
// // sure that the config object inside is valid JSON - use double quotes, and
// // quote your keys.
// //
// // `autoplay`   Time in seconds to show a slide on autoplay.  
// //              `false` disables autoplay.
// //              Default is `5`.
// //
// // Events
// // ======
// // A Slideshow raises the following events:
// // 
// // - "slideshow.change"      - fired any time a slide changes
// // - "slideshow.userchange"  - fired any time a slide changesas a result of a 
// //                             user action. "slideshow.change" is still fired.
// //
// ;(function ($) {
//   var Slideshow, defaults
// 
//   // Requiring this file automatically initializes slideshow elements on page
//   // You can still update slideshow options via:
//   //    $.slideshow({ selector: '#slideshow' })
//   //
//   // Just make sure not to call that outside of a `$(document).ready()` block,
//   // otherwise those options might not take effect.
//   //
//   // You can also disable this behavior by setting the `autoinit` option to `false`.
//   // Then later manually call `$.slideshow()` or `$('#slideshow').slideshow()`
//   $(function () {
//     if (defaults.autoinit)  $.slideshow()
//   })
// 
//   defaults = {
//     autoinit: true,
//     autoplay: 5,
//     
//     // The selectors that are used to find elements for the different pieces of 
//     // a slideshow.  By default, the name of the feature as a DOM class is used.
//     // Used by the helper function `find` at the bottom of the script.
//     selectors: {
//       // slideshow: '.slideshow',
//       // slides: '.slides,
//       // dots: '.dots'
//     },
// 
//     // Default markup used for generated elements
//     markup: {
//       prev: '<div class="prev"><a title="View previous slide" href="#">Previous</a></div>',
//       next: '<div class="next"><a title="View next slide" href="#">Next</a></div>'
//     }
//   }
// 
// 
//   // Initialize all elements in this jquery as slideshows
//   $.fn.slideshow = function (options) {
//     return this.each(function () {
//       var slideshow, el, data
//       
//       el = $(this)
//       data = el.data('slideshow')
//       
//       if (data && data.isSlideshow) {
//         // Already initialized slideshow
//         return
//       }
//       else { 
//         // Initialize the slideshow and store on the element via data
//         slideshow = new Slideshow(el, $.extend(true, {}, defaults, data, options))
//         el.data('slideshow', slideshow) 
//       }
//     })
//   }
// 
//   // Override default options for all slideshows, as well as setting a document.ready 
//   // event handler to initialize all slideshow elements on the page
//   $.slideshow = function (options) {
//     $.extend(true, defaults, options)
//     $(initializeAllSlideshows)
//   } 
// 
//   function initializeAllSlideshows () {
//     return find('slideshow').slideshow()
//   }
//   
//   // Internal slideshow implementation class
//   Slideshow = function Slideshow (el, options) {
//     var container, slides, dotsContainer, dots, count, fullCount
//     
//     options || (options = {})
// 
//     // Grab elements
//     container = find('slides', el)
//     dotsContainer = find('dots', el)
//     slides = container.children().addClass('slide')
//     
//     // Settings and State
//     fullCount = count = slides.length
// 
//     // Build and insert dots, if the dots container is empty
//     if (!dotsContainer.children().length) {
//       dots = dotsContainer.append(repeatStr('<li></li>', count)).children()
//       dots.first().addClass('active')
//     }
// 
//     buildControls = true
//     if (buildControls) {
//       el.append(options.markup.prev)
//         .append(options.markup.next)
//     }
// 
//     // Insert a duplicate of the last slide at the front,
//     // and a duplicate of the first slide at the end.  
//     container
//       .prepend(slides.last().clone())
//       .append(slides.first().clone())
//     this.clonedSlides = true
//     fullCount += 2
// 
//       
//     // Widen container so all images (including the extra 2)
//     // fit on one line.  Set Left to move to the real first slide
//     container.css({
//       left: '-100%',
//       width: fullCount * 100 + '%' 
//     })    
// 
//     slides = container.find('.slide')
//     slides.css('width', 100 / fullCount + '%')
// 
//     // Store elements and state on `this`
//     $.extend(this, {
//       el: el, container: container, slides: slides, dots: dots,
//       index: 0, count: count
//     })
// 
//     // Listen for events
//     el.delegate('.prev,.next', 'click', $.proxy(this.clickControl, this))
//       .delegate('.dots li', 'click', $.proxy(this.clickDot, this))
// 
//     // Autoplay
//     this.autoplay = new Autoplay(this, options.autoplay)  
//   }
// 
// 
//   Slideshow.prototype = {
//     // Used to detect if slideshow has already been initialized on an element
//     isSlideshow: true,
// 
//     realIndex: function (index) {
//       return index + (this.clonedSlides ? 1 : 0)
//     },
// 
//     clickControl: function (e) {
//       var isPrev = $(e.target).hasClass('prev')
//       this.moveBy(isPrev ? -1 :  1)
//       this.el.trigger('slideshow.userchange')
//     },
// 
//     clickDot: function (e) {
//       var index = this.dots.index(e.target)
//       this.moveTo(index)
//       this.el.trigger('slideshow.userchange')
//     },
// 
//     next: function () {
//       this.moveBy(1)  
//     },
// 
//     moveBy: function (change) {
//       this.moveTo(this.index + change)
//     },
// 
//     // Move to a given index.
//     // Pass `false` for `animate` to suppress animation
//     moveTo: function (index, animate) {
//       var left
// 
//       // Ignore event if already animating
//       // Could queue it..
//       if (this.animating)  return
// 
//       // Animate by default
//       if (animate !== false)  animate = true
//       this.animating = animate
// 
//       // Get new left position
//       left = '-' + (this.realIndex(index) * 100) + '%'
//       
//       // Move to new position
//       this.container[animate ? 'animate' :  'css']({left: left}, $.proxy(this._doneAnimating, this))
// 
//       // Highlight dot:
//       this.dots.removeClass('active').eq(index).addClass('active')
//       this.index = index
// 
//       // Raise event
//       this.el.trigger('slideshow.move', {index: index})
//     },
// 
//     // Maybe move off of a cloned slide onto the real slide
//     _doneAnimating: function () {
//       this.el.find('.lance').toggle(Math.random() > .5)
//       var index = this.index, count = this.count
//       this.animating = false
//       
//       // If moved beyond edge of real slides into cloned first/last slide,
//       // reset position to the real slide
//       if (index < 0)  this.moveTo(count - 1, false)
//       if (index >= this.count) this.moveTo(0, false)
//     }
//   }
// 
// 
//   // Autoplay makes a slideshow move automatically.
//   // Its not integrated into Slidshow because this was more fun.
//   function Autoplay (slideshow, delay) {
//     var off
//     if (delay === undefined)  delay = 6000
//     else if (!delay)  off = true
// 
//     // Turn delay into ms
//     if (delay < 1000)  delay *= 1000
// 
//     this.slideshow = slideshow
//     this.delay = delay
// 
//     // Listen for changing slides stops autoplay
//     slideshow.el.bind('slideshow.userchange', $.proxy(this.stop, this))
// 
//     if(!off)  this.start()
//   }
// 
//   Autoplay.prototype = {
//     start: function () {
//       this.timer = setInterval($.proxy(this.next, this), this.delay)  
//     },
// 
//     stop: function () {
//       clearInterval(this.timer)
//     },
// 
//     next: function () {
//       this.slideshow.next()
//     }
//   }
// 
// 
//   // Helpers
//   // =======
//   function repeatStr (str, times) {
//     var result = "", i = 0
//     for (; i<times; i++)  result += str
//     return result
//   }
// 
//   // Find an element, using the selector stored in `defaults.selectors`
//   // if it exists, otherwise a className version of `name`
//   function find (name, scope) {
//     return $(defaults.selectors[name] || ('.'+name), scope)
//   }  
// 
// })(jQuery);
