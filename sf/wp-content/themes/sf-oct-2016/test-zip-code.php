<?php
/**
 Template Name: test-zip-code
 */
 
get_header(); ?>

<?php
    $current_user = wp_get_current_user();
    /**
     * @example Safe usage: $current_user = wp_get_current_user();
     * if ( !($current_user instanceof WP_User) )
     *     return;
     */
    echo 'Username: ' . $current_user->user_login . '<br />';
    echo 'User email: ' . $current_user->user_email . '<br />';
    echo 'User first name: ' . $current_user->first_name . '<br />';
    echo 'User last name: ' . $current_user->last_name . '<br />';
    echo 'User display name: ' . $current_user->display_name . '<br />';
        echo 'User zip code: ' . $current_user->zip_code . '<br />';
    echo 'User ID: ' . $current_user->ID . '<br />';
?>

<?php
get_footer(); ?>