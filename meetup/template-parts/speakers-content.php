<?php
/*
Template Name: Speakers
*/ 
?>
       <!-- Start: Speakers -->
        <div class="row me-row content-ct speaker" id="speakers">
            <h2 class="row-title">Meet the Speakers</h2>
            
                    <?php
                        $args=array('post_type'=>'speaker');
                        $speakers =new WP_Query($args);
                            while($speakers->have_posts()):$speakers->the_post()
                    ?>
            <div class="col-md-4 col-sm-6 feature"<?php post_class(); ?>>
                <?php
                if(has_post_thumbnail()){
                the_post_thumbnail("thumbnail","class=>'speaker-img'");
                }
            ?>
                
                <h3><?php the_title();?></h3>
                <p><?php the_content();?></p>
                <ul class="speaker-social">
                    <li><a href="<?php
                                            $facebook = get_post_meta(get_the_ID() , 'wiki_test_facebookurl', true);
                                            echo wp_kses_post($facebook);
                                        ?>"><span class="ti-facebook"></span></a></li>
                                
                    <li><a href="<?php
                                     $twitter = get_post_meta(get_the_ID() , 'wiki_test_twitterurl', true);
                                    echo wp_kses_post($twitter);
                                ?>"><span class="ti-twitter-alt"></span></a></li>
                                
                    <li><a href="<?php
                                     $linkedin = get_post_meta(get_the_ID() , 'wiki_test_linkedinurl', true);
                                    echo wp_kses_post($linkedin);
                                ?>"><span class="ti-linkedin"></span></a></li>
                </ul>
            </div>
             <?php endwhile; ?>
        </div>
        <!-- End: Speakers -->
    