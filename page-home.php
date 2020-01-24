<?php
/**
 * The Home Page File
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package retro_money_beef
 */

get_header();
?>

<main>
    <div class="bg-squiggle">
        <?php get_template_part('template-parts/content', 'hero'); ?>
        <?php get_template_part('template-parts/content', 'about'); ?>
    </div>

    <?php get_template_part('template-parts/content', 'egobar'); ?>
    <?php get_template_part('template-parts/content', 'how-it-works'); ?>
    <?php get_template_part('template-parts/content', 'pack'); ?>
    <?php get_template_part('template-parts/content', 'testimonials'); ?>

    <!-- <h1>Hello home page</h1>

    <?php while ( have_posts() ) : the_post();?>
    <form id="user-form" enctype="multipart/form-data" method="POST" action="<?php echo admin_url('admin-ajax.php'); ?>">
        <input type="text" name="first_name" placeholder="First Name" />
        <input type="text" name="last_name" placeholder="Last Name" />
        <input type="email" name="email_name" placeholder="email" />
    </form>
    <?php endwhile ?> -->
    
</main>
<?php get_footer();