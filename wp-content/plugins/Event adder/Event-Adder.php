<?php
/*
Plugin Name: Event adder
Plugin URI: 
Description: Declares a plugin that will create a custom post type
Version: 1.0
Author: Savienkov
*/

add_action( 'init', 'add_event' );


function add_event() {
	register_post_type( 'events',
		array(
			'labels' => array(
			'name' => 'Events',
			'singular_name' => 'Event',
			'add_new' => 'Add New',
			'add_new_item' => 'Add New Event',
			'edit' => 'Edit',
			'edit_item' => 'Edit Event',
			'new_item' => 'New Event',
			'view' => 'View',
			'view_item' => 'View Event',
			'search_items' => 'Search Events',
			'not_found' => 'No Events found',
			'not_found_in_trash' =>
			'No Events found in Trash',
			'parent' => 'Parent Event'
			),
			'public' => true,
			'menu_position' => 15,
			'supports' =>	array( 
				'title', 
				'editor', 
				'comments',
				'thumbnail',
			),
			'taxonomies' => array( '' ),
			'menu_icon' =>
			plugins_url( 'images/image.png', __FILE__ ),
			'has_archive' => true
			)
		);
}

add_action( 'admin_init', 'my_admin' );


function my_admin() {
	add_meta_box( 
		'event_adder_meta_box',
		'Event Details',
		'display_event_adder_meta_box',
		'events',
		'normal',
		'high' );
}

function display_event_adder_meta_box( $event ) {
// Retrieve current name of the Director and Movie Rating based on review ID
	$event_date =	esc_html( get_post_meta( $event->ID,	'event_date', true ) );
	$event_period =	esc_html( get_post_meta( $event->ID,	'event_period', true ) );
	$event_place =	esc_html( get_post_meta( $event->ID,	'event_place', true ) );
	?>
	<table>

		<tr>
			<td style="width: 100%">Event date</td>
			<td>
				<input type="text" size="80"	name="event_date_name"	value="<?php echo $event_date; ?>" />
			</td>
		</tr>

		<tr>
			<td style="width: 150px">Event period</td>
			<td>
				<input type="text" size="100"	name="event_period_name"	value="<?php echo $event_period; ?>" />
			</td>
		</tr>

		<tr>
			<td style="width: 150px">Event Place</td>
			<td>
				<input type="text" size="180"	name="event_place_name"	value="<?php echo $event_place; ?>" />
			</td>
		</tr>

	</table>
<?php 
}


add_action( 'save_post', 'add_event_fields', 10, 3 );


function add_event_fields( $event_id, $event ) {
	// Check post type for Events
	if ( $event->post_type == 'events' ) {
		// Store data in post meta table if present in post data
		if ( isset( $_POST['event_date_name'] ) &&	$_POST['event_date_name'] != '' ) {
			update_post_meta( $event_id, 'event_date',	$_POST['event_date_name'] );
		}

		if ( isset( $_POST['event_period_name'] ) &&	$_POST['event_period_name'] != '' ) {
			update_post_meta( $event_id, 'event_period',		$_POST['event_period_name'] );
		}

		if ( isset( $_POST['event_place_name'] ) &&	$_POST['event_place_name'] != '' ) {
			update_post_meta( $event_id, 'event_place',		$_POST['event_place_name'] );
		}

	}
}


add_filter( 'template_include', 'include_template_function', 1 );


function include_template_function( $template_path ) {
	if ( get_post_type() == 'events' ) {
		if ( is_single() ) {
		// checks if the file exists in the theme first,
		// otherwise serve the file from the plugin
			if ( $theme_file = locate_template( array
			( 'single-events.php' ) ) ) {
			$template_path = $theme_file;

			} else {
			$template_path = plugin_dir_path( __FILE__ ) .
			'/single-events.php';
			}
		}
	}
	return $template_path;
}


?>