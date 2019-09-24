<?php
/*
Plugin Name: Send New user reg email to specified user
Description: Send "New User Registration" email to admins when new customer is created on WooCommerce.
Version: 1.0
Author: Papp Zoltán
 */

function my_wc_customer_created_notification( $id ) {
	wp_new_user_notification( $id, 'specified_user-user_name' );
}
add_action( 'woocommerce_created_customer', 'my_wc_customer_created_notification' );