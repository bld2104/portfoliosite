<?php /* Template Name: Login */ ?>
<style>
html,
body {
  height: 100%;
}

#wrap {
  min-height: 100%;
  height: auto;
  /* Negative indent footer by its height */
  margin: 0 auto -60px;
  /* Pad bottom by footer height */
  padding: 0 0 60px;
}
</style>

<?php get_header(); ?>
<div id="wrap">
<?php 

//This goes in to your custom login page template
if(isset($_GET['action']) && $_GET['action'] == "reset_success") {
echo '<span class="success">You password has been changed. Now you can login with your new password</span>';
}
?>
<div class="container">
	<br><br><br><br>
    <div style="text-align:center">
<?php
if ( ! is_user_logged_in() ) { // Display WordPress login form:
    $args = array(
        'redirect' => 'http://sweetfields.org/profile', 
        'form_id' => 'loginform-custom',
        'label_username' => __( 'Email Address' ),
        'label_password' => __( 'Password' ),
        'label_remember' => __( 'Remember Me' ),
        'label_log_in' => __( 'Log In' ),
        'remember' => true
    );
    wp_login_form( $args );
    ?>
    <a href="http://sweetfields.org/forgotpassword/">Forgot Password?</a>
    <?php
} else { // If logged in:
	echo "You are already logged in. ";
    wp_loginout( home_url() ); // Display "Log Out" link.
    echo " | ";
    wp_register('<!--','--><a href="http://sweetfields.org/profile/">Your Profile</a>');// Display "Site Admin" link.
}
?>
<br><br>
</div>
</div>
</div>
<?php get_footer(); ?>