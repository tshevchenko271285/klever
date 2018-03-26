<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package klever
 */

get_header();
?>
    <!-- Main -->
    <div id="main">
    <div class="inner">
		<?php
		while ( have_posts() ) : the_post(); ?>

            <header>
                <?php the_content() ?>
            </header>
			<section id="schedule" class="tiles">
                <?php
                    $args = array(
                        'post_type'  => 'post',
                        'order' => 'ASC',
                        'posts_per_page' => 12,
                    );
                    $query = new WP_Query( $args );
                    if( $query->have_posts() ){
                        while( $query->have_posts() ){ $query->the_post();
                            get_template_part( 'template-parts/content', 'lesson-preview' );
                        }
                        wp_reset_postdata();
                    }
                ?>
            </section>
		<?php endwhile; ?>

    </div>
    </div>

<?php
//get_sidebar();
get_footer();
