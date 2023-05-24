<?php get_header(); ?>

<?php
$GLOBALS['singleVarables'] = [
    'changeHeader' => true,
];
?>

    <script>
        document.getElementById("header").classList.add('bg-white' , 'rounded-b-[25px]');
    </script>
<div class="container lg:w-[1200px] mx-auto">

    <div class="hidden lg:flex lg:flex-row items-center justify-between mt-[30px]">
        <div class="flex flex-row gap-[5px] px-3 lg:px-0  items-center mb-[20px]">
            <a href="<?php echo site_url(); ?>" class="text-blue l text-[14px] font-bold">وبلاگ</a>
            <p>/</p>
            <div class="text-black text-[14px] font-bold"><?php get_category_post(); ?></div>
        </div>
    </div>

    <h2 class="bg-blue rounded-l-lg lg:rounded-[7px] text-white text-shadow:[3px 2px 4px 0 rgba(0, 0, 0, 0.25)] lg:text-[35px] font-black max-w-max px-[30px] py-[5px]">
        <?php get_category_post(); ?>
    </h2>

    <div class="container relative lg:w-[1200px] mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-[20px] mt-10 lg:mt-30px]">

            <?php if (have_posts()) : ?>
                <!-- the loop -->
                <?php while (have_posts()) : the_post(); ?>
                    <?php include 'Loop.php' ?>
                <?php endwhile; ?>
                <!-- end of the loop -->


                <!-- pagination here -->

                <?php
                custom_pagination($wp_query->max_num_pages,"",$paged);
                ?>


                <?php wp_reset_postdata(); ?>

            <?php else: ?>
                <p><?php _e('No content available'); ?></p>
            <?php endif; ?>

        </div>

        <?php
        custom_pagination($wp_query->max_num_pages,"",$paged);
        ?>
    </div>
</div>

<?php get_footer(); ?>