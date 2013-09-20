<?php
/*
 Plugin Name: Social Media link Settings
Description: This is a plugin where you can update your social media links.
Author: Ramamoorthy R
Author URI: http://goodcoders.wordpress.com
Version: 1.0
*/
function social_register_settings() {

	register_setting( 'default', 'facebook_link' );
	register_setting( 'default', 'twitter_link' );
	register_setting( 'default', 'youtube_link' );

}
add_action( 'admin_init', 'social_register_settings' );

function social_register_options_page() {
	add_options_page('Page title', 'Social Media', 'manage_options', 'social-options', 'social_options_page');
}
add_action('admin_menu', 'social_register_options_page');

function social_options_page() {
	?>
<div class="wrap">
	<style type="text/css">
input[type="text"] {
	width: 400px;
	height: 35px;
}

th label {
	vertical-align: middle;
	font-weight: bold;
}
</style>
	<?php screen_icon(); ?>


	<form method="post" action="options.php">
		<h2>Social Media Settings</h2>
		<p>Please update you Social media links below</p>

		<?php settings_fields( 'default' ); ?>

		<table class="form-table">
			<tr valign="top">
				<th scope="row"><label for="facebook_link">Facebook Link:</label></th>
				<td><input type="text" id="facebook_link" name="facebook_link"
					value="<?php echo get_option('facebook_link'); ?>" /></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="twitter_link">Twitter Link:</label></th>
				<td><input type="text" id="twitter_link" name="twitter_link"
					value="<?php echo get_option('twitter_link'); ?>" /></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="youtube_link">YouTube Link:</label></th>
				<td><input type="text" id="youtube_link" name="youtube_link"
					value="<?php echo get_option('youtube_link'); ?>" /></td>
			</tr>

		</table>

		<?php submit_button(); ?>
	</form>
</div>
<?php
}
?>