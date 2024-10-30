<?php
/*
Plugin Name: Block Admin
Plugin URI: http://pankajanupam.in/wordpress-plugins/block-admin/
Description: Allow you to restrict access to the defualt WordPress admin panel.
Version: 1.2
Author: PANKAJ ANUPAM
Author URI: http://pankajanupam.in

* LICENSE
    Copyright 2011 PANKAJ ANUPAM  (email : mymail.anupam@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function block_admin_panel(){
	
	if ( is_user_logged_in() && is_admin() ){
			
		if( ! user_can( wp_get_current_user(), 'administrator' ) ){
			// redirect user to home page
			wp_safe_redirect( home_url() );
		}	
	}
}
add_action('init', 'block_admin_panel');

?>