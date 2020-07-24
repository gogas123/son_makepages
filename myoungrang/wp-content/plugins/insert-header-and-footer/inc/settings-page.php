<?php

/**
 * Add menu page.
 * @return [type] [description]
 */
function ihaf_menu_page(){
    add_menu_page( __( 'Insert Header and Footer', 'ihaf' ), __( 'Header and Footer', 'ihaf' ), 'manage_options', 'ihaf', 'ihaf_menu_page_content', 'dashicons-arrow-right-alt2', 76 );
}
add_action( 'admin_menu', 'ihaf_menu_page' );
 
/**
 * Added page contents.
 * @return [type] [description]
 */
function ihaf_menu_page_content(){
    ?>

    <div class="wrap">

		<h1><?php _e( 'Insert Header and Footer', 'ihaf' ); ?></h1>

		<?php
		// Save content.
		if( isset( $_POST['ihaf-submit'] ) ) {

			$ihaf_header = isset( $_POST['ihaf-header'] ) ? wp_unslash( $_POST['ihaf-header'] ) : '';
			$ihaf_footer = isset( $_POST['ihaf-footer'] ) ? wp_unslash( $_POST['ihaf-footer'] ) : '';

			update_option( 'ihaf-header', $ihaf_header );
			update_option( 'ihaf-footer', $ihaf_footer );

			?>
			<div id="setting-error-settings_updated" class="updated settings-error notice is-dismissible"> 
				<p><strong><?php esc_attr_e( 'Header and Footer codes saved.', 'ihaf' ); ?></strong></p>
				<button type="button" class="notice-dismiss">
					<span class="screen-reader-text"><?php esc_attr_e( 'Dismiss this notice.', 'ihaf' ); ?></span>
				</button>
			</div>
			<?php
		}

		// Get contents.
		$ihaf_header = stripslashes( get_option( 'ihaf-header', '' ) );
		$ihaf_footer = stripslashes( get_option( 'ihaf-footer', '' ) );
		?>

		<form method="post" action="admin.php?page=ihaf" >

			<p>
				<label for="ihaf-header"><?php _e( '<b>Header Code:</b> These codes will be print <b>in <code>&lt;head&gt;</code> tag</b> as it is. HTML, Use Script tag for JavaScrpt codes and Style tag for CSS codes.', 'ihaf' ); ?></label>
				<textarea class="widefat" name="ihaf-header" id="ihaf-header" rows="5" cols="30"><?php echo $ihaf_header; ?></textarea>
			</p>

			<p>
				<label for="ihaf-footer"><?php _e( '<b>Footer Code:</b> These codes will be print <b>just above <code>&lt;/body&gt;</code> tag</b> as it is. HTML, Use Script tag for JavaScrpt codes and Style tag for CSS codes.', 'ihaf' ); ?></label>
				<textarea class="widefat" name="ihaf-footer" id="ihaf-footer" rows="5" cols="30"><?php echo $ihaf_footer; ?></textarea>
			</p>

			<p class="submit">
				<input name="ihaf-submit" id="ihaf-submit" class="button button-primary" value="Save" type="submit">
			</p>

		</form>

	</div>

    <?php  
}


/**
 * [ihaf_admin_scripts_and_styles description]
 * @param  [type] $hook [description]
 * @return [type]       [description]
 */
function ihaf_admin_scripts_and_styles( $hook ) {

	wp_enqueue_code_editor( array( 'type' => 'text/html' ) );
	wp_enqueue_script( 'ihaf', IHAF_URL . 'assets/js/script.js', array( 'jquery' ), IHAF_VERSION, true );
}

// Enqueue only if pagenow is admin.php and query string is page=ihaf.
if ( 'admin.php' === $pagenow  && 'page=ihaf' === $_SERVER['QUERY_STRING'] ) {
    add_action( 'admin_enqueue_scripts', 'ihaf_admin_scripts_and_styles' );
}


