<?php
/**
 * This file creates the theme admin page.
 *
 * @package Crosswinds Framework
 * @author  Jacob Martella Web Development
 * @license GNU General Public License v2 or later
 * @link    https://jacobmartella.com/
 */
?>

<div class="options-wrap">
	<div class="tabs-section">
		<div class="title-area">
			<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'images/portafoglio-logo-no-background.png' ); ?>" alt="Crosswinds Blocks Logo" />
			<h2><?php esc_html_e( 'Crosswinds Framework', 'crosswinds-framework' ); ?></h2>
		</div>

		<div class="tabs">
			<div class="tab">
				<p class="tab-title"><a href="<?php echo esc_url( get_admin_url( null, '/admin.php?page=crosswinds-framework-block-options' ) ); ?>"><?php esc_html_e( 'Crosswinds Framework', 'crosswinds-framework' ); ?></a></p>
			</div>

			<div class="tab active-tab">
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

		<h2><?php esc_html_e( 'Crosswinds Framework Theme Options', 'crosswinds-framework' ); ?></h2>

		<div class="settings-area">
			<h2><?php esc_html_e( 'Check out the Crosswinds Framework Themes!', 'crosswinds-framework' ); ?></h2>
		</div>

	</div>
</div>
