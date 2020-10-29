<?php

/**
 * Fired during plugin activation
 *
 * @link       https://localhost/userrole.
 * @since      1.0.0
 *
 * @package    User_Role
 * @subpackage User_Role/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    User_Role
 * @subpackage User_Role/includes
 * @author     ajmal <ajmal@karigar.pk>
 */
class User_Role_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

        add_role(
            'guest_author',
            __( 'Guest Author', 'http://localhost/userrole' ),
            array(
                'read'         => true,  // true allows this capability
                'edit_posts'   => true,
                'delete_posts' => false, // Use false to explicitly deny
            )
        );
	}

}
