<?php
/**
 * The User Page File
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package retro_money_beef
 */

get_header();
?>
<main class="mt">
    <?php 
        $user_id = get_current_user_id();
        $user_info = get_userdata($user_id);
        $user_meta = get_user_meta($user_id);
        $user_name = $user_info->display_name;
        $user_email = $user_info->user_email;
    ?>
<!-- <pre> <?php var_dump($user_meta); ?></pre>  -->

<?php if(is_user_logged_in()) : ?>
<div class="container">

<form id="user-form" enctype="multipart/form-data" method="POST" action="<?php echo admin_url('admin-ajax.php'); ?>">
    
    <input type="text" name="first_name" placeholder="First Name" required value="<?php echo $user_meta['first_name'][0]; ?>" />
    <input type="text" name="last_name" placeholder="Last Name" required value="<?php echo $user_meta['last_name'][0]; ?>"/>
    <input type="text" name="user_name" placeholder="Username" disabled value="<?php echo $user_name; ?>"/>
    <input type="email" name="user_email" placeholder="Email"  disabled value="<?php echo $user_email; ?>"/>
    <input type="tel" name="telephone" placeholder="Telephone"  value="<?php echo $user_meta['telephone'][0]; ?>"/>
    
    <input type="hidden" name="id" value="<?php echo $user_id; ?>" />
    <input type="hidden" name="action" value="update_customer" />
    <input type="submit" value="Submit" />
    
</form>
<?php else : ?>
    <h1>
        you are not signed in
    </h1>
<?php endif; ?>

</div>

</main>

<?php get_footer();