<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Meetup
 */
?>

    <!-- Start: Footer -->
    <div class="container-fluid footer">
        <div class="row contact">
                <?php if ( is_active_sidebar( 'widget-1' )  ) {
                        dynamic_sidebar( 'widget-1' );
                    }
		          ?>
             
            <?php if ( is_active_sidebar( 'widget-2' )  ) {
                        dynamic_sidebar( 'widget-2' );
                    }
		          ?>
            
        </div>
        <div class="row footer-credit">
            <div class="col-md-6 col-sm-6">
                <p>Copyright&copy;<a href="https://www.facebook.com/abu.sayem.50702">A.S.M ROFI-UDDIN</a></p>
            </div>
            <div class="col-md-6 col-sm-6">
                
                   <?php if ( is_active_sidebar( 'footer' )  ) {
                        dynamic_sidebar( 'footer' );
                    }
		          ?>
                   
            </div>
        </div>
    </div>
    <!-- End: Footer -->

   
    <!-- Google Analytics -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-29231762-2', 'auto');
        ga('send', 'pageview');

    </script>
     <?php wp_footer(); ?>
</body>

</html>
