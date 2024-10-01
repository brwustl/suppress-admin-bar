<?php
/**
Plugin Name: Suppress Admin Bar
Plugin URI: https://wustl.edu/
Description: Hide the top-of-page admin bar for non-admins.
Version: 1.5
Author: Washington University in St. Louis
Author URI: https://wustl.edu/
License: WTFPL
**/

add_action('show_admin_bar', 'sb_worker');

function sb_worker() {
	if (current_user_can('edit_posts')) {
		return true;
	}
	return false;
}
