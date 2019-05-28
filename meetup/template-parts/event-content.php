<?php
/*
Template Name: Event
*/ 
?>
       <!-- Start: Desc -->
        <div class="row me-row content-ct">
            <h2 class="row-title">Why This Event Is Super Cool?</h2>
              <?php
				    $args=array('post_type'=>'event');
                    $event =new WP_Query($args);
                        while($event->have_posts()):$event->the_post()
                ?>
            <div class="col-md-4 feature"<?php post_class(); ?>>
                <span class="<?php
                                     $icon = get_post_meta(get_the_ID() , 'icon', true);
                                    echo wp_kses_post($icon);
                                ?>">
                                    
                                </span>
                <h3><?php the_title();?></h3>
                <p><?php the_content();?></p>
            </div>
            <?php endwhile; ?>
        </div>
        <!-- End: Desc -->