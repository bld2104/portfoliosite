<?php // custom functions.php template @ digwp.com

// allow post thumbnails 
/**
 * MyFirstTheme's functions and definitions
 *
 * @package MyFirstTheme
 * @since MyFirstTheme 1.0
 */
 
/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
 
function load_styles_and_scripts(){
    wp_enqueue_script( 'jquery' );

}

add_action('wp_enqueue_scripts', 'load_styles_and_scripts');




function enqueue_my_script() {

    wp_register_script( 'my-script', get_template_directory_uri() . '/scripts/bootstrap.min.js' );
    wp_enqueue_script('my-script');

}
 add_action( 'wp_enqueue_scripts', 'enqueue_my_script' );

 function enqueue_coverr_script() {

    wp_register_script( 'coverr-script', get_template_directory_uri() . '/scripts/coverr.js' );
    wp_enqueue_script('coverr-script');

}
 add_action( 'wp_enqueue_scripts', 'enqueue_coverr_script' );



// THIS IS THUMBNAIL SUPPORT
if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 50, 50, true ); // Normal post thumbnails
	add_image_size( 'single-post-thumbnail', 400, 9999 ); // Permalink thumbnail size
        // add_image_size( 'title-image', 50, 30 ); // Title mini photo
}
//THIS TURNS THUMBNAIL INTO LINK TO POST
add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 3 );

function my_post_image_html( $html, $post_id, $post_image_id ) {
	$html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_post_field( 'post_title', $post_id ) ) . '">' . $html . '</a>';
	return $html;
}

//must login with email
//remove wordpress authentication
/*remove_filter('authenticate', 'wp_authenticate_username_password', 20);
add_filter('authenticate', function($user, $email, $password){
 
    //Check for empty fields
        if(empty($email) || empty ($password)){        
            //create new error object and add errors to it.
            $error = new WP_Error();
 
            if(empty($email)){ //No email
                $error->add('empty_username', __('<strong>ERROR</strong>: Email field is empty.'));
            }
            else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ //Invalid Email
                $error->add('invalid_username', __('<strong>ERROR</strong>: Email is invalid.'));
            }
 
            if(empty($password)){ //No password
                $error->add('empty_password', __('<strong>ERROR</strong>: Password field is empty.'));
            }
 
            return $error;
        }
 
        //Check if user exists in WordPress database
        $user = get_user_by('email', $email);
 
        //bad email
        if(!$user){
            $error = new WP_Error();
            $error->add('invalid', __('<strong>ERROR</strong>: Either the email or password you entered is invalid.'));
            return $error;
        }
        else{ //check password
            if(!wp_check_password($password, $user->user_pass, $user->ID)){ //bad password
                $error = new WP_Error();
                $error->add('invalid', __('<strong>ERROR</strong>: Either the email or password you entered is invalid.'));
                return $error;
            }else{
                return $user; //passed
            }
        }
}, 20, 3);*/

/**
 * Registering a new user.
 */
add_action('template_redirect', 'register_user');
 
function register_user(){
  if(isset($_GET['do']) && $_GET['do'] == 'register'):
    $errors = array();
    if(empty($_POST['user'])) 
       $errors[] = 'Please enter a username.<br>';
    if(empty($_POST['email'])) 
       $errors[] = 'Please enter a email.<br>';
    if(empty($_POST['pass'])) 
       $errors[] = 'Please enter a password.<br>';
    if(empty($_POST['cpass'])) 
       $errors[] = 'Please enter a confirm password.<br>';
    if((!empty($_POST['cpass']) && !empty($_POST['pass'])) && ($_POST['pass'] != $_POST['cpass'])) 
       $errors[] = 'Entered password did not match.';
    $user_login = esc_attr($_POST['user']);
    $user_email = esc_attr($_POST['email']);
    $user_pass = esc_attr($_POST['pass']);
    $user_confirm_pass = esc_attr($_POST['cpass']);
    $sanitized_user_login = sanitize_user($user_login);
    $user_email = apply_filters('user_registration_email', $user_email);
  
    if(!is_email($user_email)) 
       $errors[] = 'Invalid e-mail.<br>';
    elseif(email_exists($user_email)) 
       $errors[] = 'This email is already registered.<br>';
  
    if(empty($sanitized_user_login) || !validate_username($user_login)) 
       $errors[] = 'Invalid user name.<br>';
    elseif(username_exists($sanitized_user_login)) 
       $errors[] = 'User name already exists.<br>';
  
    if(empty($errors)):
      $user_id = wp_create_user($sanitized_user_login, $user_pass, $user_email);
  
    if(!$user_id):
      $errors[] = 'Registration failed';
    else:
      update_user_option($user_id, 'default_password_nag', true, true);
      wp_new_user_notification($user_id, $user_pass);
      wp_cache_delete ($user_id, 'users');
      wp_cache_delete ($user_login, 'userlogins');
      do_action ('user_register', $user_id);
      $user_data = get_userdata ($user_id);
      if ($user_data !== false) {
         wp_clear_auth_cookie();
         wp_set_auth_cookie ($user_data->ID, true);
         do_action ('wp_login', $user_data->user_login, $user_data);
         // Redirect user.
         wp_redirect ('/index.php/profile');
         exit();
       }
      endif;
    endif;
  
    if(!empty($errors)) 
      define('REGISTRATION_ERROR', serialize($errors));
  endif;
}


// disable admin bar
add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {


  show_admin_bar(false);



}

add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );
function load_dashicons_front_end() {
wp_enqueue_style( 'dashicons' );
}

?>