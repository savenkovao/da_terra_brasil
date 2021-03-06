<?php
/*
Template Name: New Template
 */
get_header(); ?>
<div id="primary">
    <div id="content" role="main">
    <?php
    $mypost = array( 'post_type' => 'events', );
    $loop = new WP_Query( $mypost );
    ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="wrapper">                

                    <div class="events_block">

                        <div style="float: right; margin: 10px">
                            <?php the_post_thumbnail( array( 100, 100 ) ); ?>
                        </div>

                        <strong>Title: </strong><?php the_title(); ?><br />
                        
                        <strong>Event date: </strong>
                        <?php echo esc_html( get_post_meta( get_the_ID(), 'event_date', true ) ); ?>
                        <br />
                        
                        <strong>Event period: </strong>
                        <?php echo esc_html( get_post_meta( get_the_ID(), 'event_period', true ) ); ?>
                        <br />
                        
                        <strong>Event place: </strong>
                        <?php echo esc_html( get_post_meta( get_the_ID(), 'event_place', true ) ); ?>
                        <br />

                        <div class="entry-content"><?php the_content(); ?></div>
                    </div>
                
            </div>
        </article>
    <?php endwhile; ?>
    </div>
</div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>