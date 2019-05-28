<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Meetup
 */

?>

<div class="container">
    <?php 
    get_template_part('template-parts/event-content');
    
    get_template_part('template-parts/speakers-content');
    
    get_template_part('template-parts/tickets-content');
    
    get_template_part('template-parts/schedule-content');

    the_tags();
    ?>
</div>
