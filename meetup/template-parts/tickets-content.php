<?php
/*
Template Name: Tickets
*/ 
?>
   <!-- Start: Tickets -->
    <div class="container-fluid tickets" id="tickets">
        <div class="row me-row content-ct">
            <h2 class="row-title">
                <?php
                    global $meetup;
                    echo wp_kses_post($meetup['main-title']);
                ?>
            </h2>
            
            <!--Option one section start-->
            <div class="col-md-4 col-sm-6 col-md-offset-2">
                <h3>
                    <?php
                        global $meetup;
                        echo wp_kses_post($meetup['title1']);
                    ?>
                </h3>
                <p class="price">
                    <?php
                        global $meetup;
                        echo wp_kses_post($meetup['amount1']);
                    ?>
                </p>
                <p>
                   <?php
                        global $meetup;
                        echo wp_kses_post($meetup['description1']);
                    ?>
                </p>
                <a href="<?php
                        global $meetup;
                        echo wp_kses_post($meetup['button-url1']);
                    ?>" class="btn btn-lg btn-red">Buy <small>
                        <?php
                            global $meetup;
                            echo wp_kses_post($meetup['button1']);
                        ?>
                    </small></a>
            </div>
            <!--Option one section end-->

            
            <!--Option two section start-->
            <div class="col-md-4 col-sm-6">
                <h3>
                    <?php
                        global $meetup;
                        echo wp_kses_post($meetup['title2']);
                    ?>
                </h3>
                <p class="price">
                    <?php
                        global $meetup;
                        echo wp_kses_post($meetup['amount2']);
                    ?>
                </p>
                <p>
                    <?php
                        global $meetup;
                        echo wp_kses_post($meetup['description2']);
                    ?>
                </p>
                <a href="<?php
                        global $meetup;
                        echo wp_kses_post($meetup['button-url2']);
                    ?>" class="btn btn-lg btn-red">Buy <small>
                    <?php
                        global $meetup;
                        echo wp_kses_post($meetup['button2']);
                    ?>
                </small></a>
            </div>
           <!--Option two section end-->

        </div>
    </div>
    <!-- End: Tickets -->