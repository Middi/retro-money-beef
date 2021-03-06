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
    
    <input type="text" name="first_name" placeholder="First Name" required />
    <input type="text" name="last_name" placeholder="Last Name" required/>
    <input type="email" name="user_email" placeholder="Email"  required/>
    <input type="password" name="pass1" placeholder="Password" required style="width:250px; margin-bottom:3px;"><br />
    <input type="password" name="pass2" placeholder="Confirm Password" required style="width:250px; margin-bottom:3px;"><br />
    
    <input type="hidden" name="action" value="create_customer" />
    <input type="submit" value="Submit" />
    
</form>
<?php else : ?>
    <h1>
        you are already signed up <?php echo $user_name ?>
    </h1>
<?php endif; ?>

</main>

<?php get_footer();