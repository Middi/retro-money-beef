<?php
/**
 * The Signup Page File
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package retro_money_beef
 */

get_header();
?>
<main class="mt">

    <?php 
        $user_info = wp_get_current_user();
        $user_name = $user_info->display_name;
        $user_email = $user_info->user_email;
    ?>
    
<?php /* <pre> <?php var_dump($user_info); ?></pre> */ ?>

<?php if(!is_user_logged_in()) : ?>

<form id="user-form" enctype="multipart/form-data" method="POST" action="<?php echo admin_url('admin-ajax.php'); ?>">
    
    <input type="text" name="user_name" placeholder="Username" />
    <input type="email" name="user_email" placeholder="Email"  />
    
    <input type="hidden" name="action" value="create_customer" />
    <input type="submit" value="Submit" />
    <!-- <input type="text" name="user_address" placeholder="Address" value="" /> -->
    <!-- <input type="password" name="password" placeholder="password" /> -->
    
</form>
<?php else : ?>
    <h1>
        you are already signed up <?php echo $user_name ?>
    </h1>
<?php endif; ?>

</main>

<?php get_footer();