<?php
/**
 * This file creates the main Crosswinds Framework admin page.
 *
 * @package Crosswinds Framework
 * @author  Jacob Martella Web Development
 * @license GNU General Public License v2 or later
 * @link    https://jacobmartella.com/
 */

$current_theme = wp_get_theme();
$theme_name    = $current_theme->get( 'Name' );
?>

<div class="options-wrap">
	<div class="tabs-section">
		<div class="title-area">
			<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'images/portafoglio-logo-no-background.png' ); ?>" alt="Crosswinds Blocks Logo" />
			<h2><?php esc_html_e( 'Crosswinds Framework', 'crosswinds-framework' ); ?></h2>
		</div>

		<div class="tabs">
			<div class="tab active-tab">
				<p class="tab-title"><a href="<?php echo esc_url( get_admin_url( null, '/admin.php?page=crosswinds-framework-block-options' ) ); ?>"><?php esc_html_e( 'Crosswinds Framework', 'crosswinds-framework' ); ?></a></p>
			</div>

			<div class="tab">
				<p class="tab-title"><a href="<?php echo esc_url( get_admin_url( null, '/admin.php?page=crosswinds-framework-theme' ) ); ?>"><?php esc_html_e( 'Theme Options', 'crosswinds-framework' ); ?></a></p>
			</div>

			<?php
			if ( is_plugin_active( 'crosswinds-blocks/crosswinds-blocks.php' ) ) {
				?>
				<div class="tab">
					<p class="tab-title"><a href="<?php echo esc_url( get_admin_url( null, '/admin.php?page=crosswinds-blocks' ) ); ?>"><?php esc_html_e( 'Plugin Options', 'crosswinds-framework' ); ?></a></p>
				</div>
				<?php
			}
			?>
		</div>
	</div>

	<div class="main-area">

		<h1><?php esc_html_e( 'Crosswinds Framework', 'crosswinds-framework' ); ?></h1>

		<div class="settings-area">
			<h2><?php esc_html_e( 'Welcome to Crosswinds Framework', 'crosswinds-framework' ); ?></h2>

			<p><?php esc_html_e( 'Thank you for choosing to use the Crosswinds Framework to power your website! Below you\'ll be able to learn more about how to use the Framework as well as the Crosswinds Blocks plugin and any child themes to really create a powerful website. From viewing the demo sites to documentation that tells you how to do everything, you\'ll be able to build the website you\'ve always dreamed of!', 'crosswinds-framework' ); ?></p>

			<div class="buttons-row">
				<a href="" target="_blank" class="button dark-blue"><?php esc_html_e( 'View Documentation', 'crosswinds-framework' ); ?></a>
				<a href="" target="_blank" class="button light-blue"><?php esc_html_e( 'View Demo Sites', 'crosswinds-framework' ); ?></a>
				<?php
				if ( crosswinds_framework_if_child_theme_active( 'Portafoglio' ) ) {
					?>
					<a href="" target="_blank" class="button dark-blue"><?php esc_html_e( 'View Your Account', 'crosswinds-framework' ); ?></a>
					<?php
				}
				?>
			</div>
		</div>

		<div class="settings-area">
			<h2><?php esc_html_e( 'Crosswinds Framework Themes', 'crosswinds-framework' ); ?></h2>
			<p><?php esc_html_e( 'Thank you for using a Crosswinds Framework theme! Check out the theme\'s settings page to add in your license key (for premium themes), find links to documentation about your specific theme and other settings the theme might have.', 'crosswinds-framework' ); ?></p>
			<a href="<?php echo esc_url( get_admin_url( null, '/admin.php?page=crosswinds-framework-theme' ) ); ?>" target="_blank" class="button dark-blue"><?php esc_html_e( 'View', 'crosswinds-framework' ); ?> <?php echo esc_html( $theme_name ); ?> <?php esc_html_e( 'Settings', 'crosswinds-framework' ); ?></a>
		</div>

		<div class="settings-area">
			<h2><?php esc_html_e( 'Crosswinds Blocks', 'crosswinds-framework' ); ?></h2>
			<?php
			if ( is_plugin_active( 'crosswinds-blocks/crosswinds-blocks.php' ) ) {
				?>
				<p><?php esc_html_e( 'Thank you for using Crosswinds Blocks! Check out the plugin settings page to enable or disable various blocks, custom post types, custom taxonomies and other settings as well as find links to documentation and ways to get help or ask a question.', 'crosswinds-framework' ); ?></p>
				<a href="<?php echo esc_url( get_admin_url( null, '/admin.php?page=crosswinds-blocks' ) ); ?>" target="_blank" class="button dark-blue"><?php esc_html_e( 'View Crosswinds Blocks Settings', 'crosswinds-framework' ); ?></a>
				<?php
			} else {
				?>
				<p><?php esc_html_e( 'Want to take your website to the next level now that you\'re using the Crosswinds Framework? Check out the Crosswinds Blocks plugin! This plugin will add in an accordion block, tabs block, post navigation block, related posts block, social sharing block and more to your website. It\'s the perfect way to customize your website in a full site editor world!', 'crosswinds-framework' ); ?></p>
				<a href="" target="_blank" class="button dark-blue"><?php esc_html_e( 'Check out the Crosswinds Blocks Plugin', 'crosswinds-framework' ); ?></a>
				<?php
			}
			?>
		</div>

	</div>
</div>
