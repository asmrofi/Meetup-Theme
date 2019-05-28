<?php
/*
Template Name: Schedule
*/ 
?>
   <!-- Start: Schedule -->
    <div class="container">
        <div class="row me-row schedule" id="schedule">
            <h2 class="row-title content-ct">
                <?php
                    global $meetup;
                    echo wp_kses_post($meetup['main1-title1']);
                ?>
            </h2>
            <div class="col-md-12">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#day-1" aria-controls="home" role="tab" data-toggle="tab">Day 01 <small class="hidden-xs">(<?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['day1']);
                                            ?>)</small></a></li>
                    <li role="presentation"><a href="#day-2" aria-controls="profile" role="tab" data-toggle="tab">Day 02 <small class="hidden-xs">(<?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['day2']);
                                            ?>)</small></a></li>
                    <li role="presentation"><a href="#day-3" aria-controls="messages" role="tab" data-toggle="tab">Day 03 <small class="hidden-xs">(<?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['day3']);
                                            ?>)</small></a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="day-1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="<?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['media12']['thumbnail']);
                                            ?>" alt="Image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['time1']);
                                            ?>
                                        </h4>
                                        <h5>
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['stitle1']);
                                            ?>
                                        </h5>
                                        <p>
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['sdescription1']);
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="<?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['media2']['thumbnail']);
                                            ?>" alt="Image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['time2']);
                                            ?>
                                        </h4>
                                        <h5>
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['stitle2']);
                                            ?>
                                        </h5>
                                        <p>
                                           <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['sdescription2']);
                                            ?> 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="<?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['media3']['thumbnail']);
                                            ?>
                                            " alt="Image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['time3']);
                                            ?>
                                        </h4>
                                        <h5>
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['stitle3']);
                                            ?>
                                        </h5>
                                        <p>
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['sdescription3']);
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src=" <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['media4']['thumbnail']);
                                            ?>" alt="Image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                             <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['time4']);
                                            ?>
                                        </h4>
                                        <h5>
                                             <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['stitle4']);
                                            ?>
                                        </h5>
                                        <p>
                                             <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['sdescription4']);
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="day-2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="<?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['media11']['thumbnail']);
                                            ?>
                                        " alt="Image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['time11']);
                                            ?>
                                        </h4>
                                        <h5>
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['stitle11']);
                                            ?>
                                        </h5>
                                        <p>
                                             <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['sdescription11']);
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="<?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['media22']['thumbnail']);
                                            ?>" alt="Image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['time22']);
                                            ?>
                                        </h4>
                                        <h5>
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['stitle22']);
                                            ?>
                                        </h5>
                                        <p>
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['sdescription22']);
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                          <div class="col-md-6">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="<?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['media33']['thumbnail']);
                                            ?>" alt="Image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['time33']);
                                            ?>
                                        </h4>
                                        <h5>
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['stitle33']);
                                            ?>
                                        </h5>
                                        <p>
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['sdescription33']);
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="<?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['media44']['thumbnail']);
                                            ?>" alt="Image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['time44']);
                                            ?>
                                        </h4>
                                        <h5>
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['stitle44']);
                                            ?>
                                        </h5>
                                        <p>
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['sdescription44']);
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="day-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="<?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['media111']['thumbnail']);
                                            ?>" alt="Image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['time111']);
                                            ?>
                                        </h4>
                                        <h5>
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['stitle111']);
                                            ?>
                                        </h5>
                                        <p>
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['sdescription111']);
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="<?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['media222']['thumbnail']);
                                            ?>" alt="Image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['time222']);
                                            ?>
                                        </h4>
                                        <h5>
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['stitle222']);
                                            ?>
                                        </h5>
                                        <p>
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['sdescription222']);
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="<?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['media333']['thumbnail']);
                                            ?>" alt="Image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['time333']);
                                            ?>
                                        </h4>
                                        <h5>
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['stitle333']);
                                            ?>
                                        </h5>
                                        <p>
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['sdescription333']);
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="<?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['media444']['thumbnail']);
                                            ?>" alt="Image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['time444']);
                                            ?>
                                        </h4>
                                        <h5>
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['stitle444']);
                                            ?>
                                        </h5>
                                        <p>
                                            <?php
                                                global $meetup;
                                                echo wp_kses_post($meetup['sdescription444']);
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Schedule -->