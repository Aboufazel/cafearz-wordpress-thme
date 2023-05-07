<?php get_header(); ?>

    <div id="content">


        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article style="min-height: 200px;" <?php post_class() ?> id="post-<?php the_ID(); ?>">

                    <div class="entry">
                        <?php the_content(); ?>
                    </div>
                    <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
                    </article>
			<?php endwhile; ?>
        <?php else : ?>
            <h2>متاسفیم صفحه مورد نظر یافت نشد</h2>
        <?php endif; ?>
    </div> <!-- end contentWrap -->

<?php get_footer(); ?>



