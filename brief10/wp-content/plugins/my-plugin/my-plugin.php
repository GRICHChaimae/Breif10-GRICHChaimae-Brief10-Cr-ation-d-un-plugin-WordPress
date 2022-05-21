<?php
    /**
 * Plugin Name: hide admin bar
 * Description: Handle the custom functions for the ecmme Site
 */

//  Remove the admin bar from the front end
add_filter('show_admin_bar','__return_false');

