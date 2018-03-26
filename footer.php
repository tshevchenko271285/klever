<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package klever
 */

?>

<!-- Footer -->
<footer id="footer">
	<div class="inner">
		<section>
			<h2>Связаться с нами: </h2>
            <?php echo do_shortcode('[contact-form-7 id="90" title="register"]');?>
		</section>
		<section>
			<?php $social_title = get_field('footer_social_title', 'option') ? get_field('footer_social_title', 'option') : ''; ?>
			<?php if($social_title) : ?>
				<h2><?php echo $social_title ?></h2>
			<?php endif; ?>

			<?php $socials = get_field('footer_socials', 'option') ? get_field('footer_socials', 'option') : '';?>
			<?php if( $socials ) : ?>
				<ul class="icons">
					<?php foreach( $socials as $social ) : ?>
						<li><a href="<?php echo $social['url']?>" class="icon style2 fa-<?php echo $social['name']?>"><span class="label"></span></a></li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</section>
        <?php $copyright = get_field('copyright_text', 'option') ? get_field('copyright_text', 'option') : ''; ?>
        <?php if($copyright) : ?>
            <ul class="copyright">
                <li>&copy; <?php echo $copyright ?> <?php echo date('Y');?></li>
                <li>Develop: <a href="http://3737.tk">TShevchenko</a></li>
            </ul>
        <?php endif;?>
	</div>
</footer>

</div>
<?php wp_footer(); ?>
</body>
</html>
