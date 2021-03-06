<?php
if (is_admin()) {
	add_action('admin_enqueue_scripts', 'geodir_custom_gmaps_admin_css', 10);
	
	add_filter('geodir_settings_tabs_array', 'geodir_custom_gmaps_tabs_array', 10); 
	add_action('geodir_admin_option_form', 'geodir_custom_gmaps_manager_tab_content', 2);
			
	add_action('wp_ajax_geodir_custom_gmaps_manager_ajax', 'geodir_custom_gmaps_manager_ajax');
	add_action('wp_ajax_nopriv_geodir_custom_gmaps_manager_ajax', 'geodir_custom_gmaps_manager_ajax');
} else {
	add_action('widgets_init', 'geodir_custom_gmaps_init_map_style', 10); 
}
?>