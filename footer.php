<?php 
/**
  * The footer
  *
  * @package WordPress
  * @subpackage Tom Wahlin V3
  * @since Tom Wahlin 2009
  */

?>
        </div><!-- .main_content_inner -->
      </div><!-- .main_content -->
    </div><!-- .main_content_outer -->
  </div><!-- #page_content -->
</div><!-- #page_wrap -->
<footer>
  <div class="footer_wrap">
    <div class="max_width">
      <p class="copyright">&copy; <? echo date("Y");?> Tom Wahlin</p> 
      <ul class="footer_nav">
        <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
        <li><a href="<?php bloginfo('url'); ?>/about">About</a></li>
        <li><a href="<?php bloginfo('url'); ?>/work">Work</a></li>
        <li><a href="<?php bloginfo('url'); ?>/goods">Goods</a></li>
        <li><a href="<?php bloginfo('url'); ?>/blog">Blog</a></li>
        <li><a href="<?php bloginfo('url'); ?>/contact">Contact</a></li>
      </ul>
    </div>    
  </div>    
</footer> 


<script src="<?php bloginfo('template_directory'); ?>/scripts/libs/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="http://use.typekit.com/zbv5ytb.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/libs/jquery.zflickrfeed.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/libs/jquery.zlastfm.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/libs/jquery.cycle.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/libs/google-tweet.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/libs/jquery-scollTo.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/libs/jquery.fitvids.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/libs/jquery.masonry.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/plugins.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/script.js"></script>
<script type="text/javascript">
// script is placed here in order to use a dynamic path to album art
$('.feed_lastfm').lastfm('twahlin','recenttracks','9b5045d6a52e5972cdf40e1193c1041f', {
  limit: 8,        
  noimage: '<?php bloginfo('template_directory'); ?>/images/global/no_album_art.png',
  imagesize: 'large'
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-10528410-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!--[if (lt IE 9) & (!IEMobile)]>
  <script src="<?php bloginfo('template_directory'); ?>/scripts/libs/DOMAssistantCompressed-2.8.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/scripts/libs/selectivizr-1.0.1.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/scripts/libs/respond.src.js"></script>
  <![endif]-->

  <div style="clear: both;"></div>
</body>
</html>