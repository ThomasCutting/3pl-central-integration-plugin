<?php
/**
 * @package 3PL Central Plugin
 * @version 1.0
 */
/*
Plugin Name: 3PL Central Plugin
Description: This plugin connects with "3PL Central" - It acts as the Fulfillment Service.
Author: Thomas Cutting
Version: 1.0
Author URI: http://www.thomasc.me
*/

/*
 * 3PL Central Plugin API Options.
 * */
add_option("three_central_key", "");
add_option("three_central_id", "");
add_option("customer_id", "");
add_option("facility_id", "");
add_option("three_login", "");
add_option("three_password", "");
/*
 * Add action for WP MENU
 * */
add_action('admin_menu', 'three_central_plugin_menu');
/*
 * 3PL Central Plugin Menu ( WP MENU )
 * */
function three_central_plugin_menu()
{
    // add the sub-page under the Settings tab in the WordPress admin panel.
    add_options_page(
        '3PL Central Plugin Options',
        '3PL Central API Options',
        'manage_options',
        'three-central-plugin',
        'three_central_plugin_options'
    );
}

/*
 * 3PL Central Plugin Options ( WP MENU )
 * */
function three_central_plugin_options()
{
    // Access granted ? true : false.
    if (!current_user_can('manage_options')) {
        wp_die(__('You do not have sufficient permissions to access this page.'));
    }

    // See if we're editing
    if (isset($_POST["_editing"])) {
        // if (updating), then update all options

        // - update 3PL Central API Key
        update_option("three_central_key", $_POST["three_central_key"]);

        // - update 3PL Central ID
        update_option("three_central_id", $_POST["three_central_id"]);

        // - update 3PL Customer ID
        update_option("customer_id", $_POST["customer_id"]);

        // - update 3PL Facility ID
        update_option("facility_id", $_POST["facility_id"]);

        // - update 3PL Login/Username
        update_option("three_login", $_POST["three_login"]);

        // - update 3PL Login Password ( Credential )
        update_option("three_password", $_POST["three_password"]);
    }

    // Echo the options page.
    ?>
    <form name="form" action="options-general.php?page=three-central-plugin" method="post">
        <!--
            Editing Form
        -->
        <input name="_editing"
               id="_editing"
               type="hidden"/>
        <!--
            3PL Central API Key
            -- pulling from above options.
        -->
        <h2>3PL Central API Key</h2>
        <input name="three_central_key"
               id="three_central_key"
               type="text"
               class="regular-text"
               value="<?php echo(get_option('three_central_key')); ?>"/>
        <!--
            3PL Central Identifier Number
            -- pulling from above options.
        -->
        <h2>3PL Central Identifier Number</h2>
        <input name="three_central_id"
               id="three_central_id"
               type="text"
               class="regular-text"
               value="<?php echo(get_option('three_central_id')); ?>"/>
        <!--
            3PL Central Customer Number
            -- pulling from above options.
        -->
        <h2>3PL Central Customer Identifier</h2>
        <input name="customer_id"
               id="customer_id"
               type="text"
               class="regular-text"
               value="<?php echo(get_option('customer_id')); ?>"/>
        <!--
            3PL Central Facility Number
            -- pulling from above options.
        -->
        <h2>3PL Central Facility Number</h2>
        <input name="facility_id"
               id="facility_id"
               type="text"
               class="regular-text"
               value="<?php echo(get_option('facility_id')); ?>"/>

        <hr/>

        <!--
            3PL Central Username/Login
            -- pulling from above options.
        -->
        <h2>3PL Central Login/Username</h2>
        <input name="three_login"
               id="three_login"
               type="text"
               class="regular-text"
               value="<?php echo(get_option('three_login')); ?>"/>
        <!--
            3PL Central Password
            -- pulling from above options.
        -->
        <h2>3PL Central Password</h2>
        <input name="three_password"
               id="three_password"
               type="text"
               class="regular-text"
               value="<?php echo(get_option('three_password')); ?>"/>
        <hr/>

        <input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes">

    </form>
    <?php

}


add_action('woocommerce_new_order', 'my_method', 1, 1);

function my_method($order_id)
{
    $order = new WC_Order($order_id);
    error_log($order->get_view_order_url());
}
