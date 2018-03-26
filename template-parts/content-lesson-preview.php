<article class="style-klever">
    <span class="image">
        <?php the_post_thumbnail('lesson-preview') ?>
    </span>
    <a href="generic.html">
        <h2><?php the_title() ?></h2>
        <div class="content"><?php the_field( 'description' ) ?></div>
    </a>
</article>