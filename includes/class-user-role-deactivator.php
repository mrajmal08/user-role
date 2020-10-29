<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://localhost/userrole.
 * @since      1.0.0
 *
 * @package    User_Role
 * @subpackage User_Role/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    User_Role
 * @subpackage User_Role/includes
 * @author     ajmal <ajmal@karigar.pk>
 */
class User_Role_Deactivator
{

    /**
     * Short Description. (use period)
     *
     * Long Description.
     *
     * @since    1.0.0
     */
    public static function deactivate()
    {
        global $wp_roles;
         $wp_roles->remove_role( 'guest_author' );

    }
}
