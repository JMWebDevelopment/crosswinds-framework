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
if ( crosswinds_framework_if_child_theme_active() ) {
	$theme_name              = $current_theme->get( 'Name' );
	$theme_version           = $current_theme->get( 'Version' );
	$parent_theme            = $current_theme->parent();
	$framework_theme_version = $parent_theme->get( 'Version' );
} else {
	$framework_theme_version = $current_theme->get( 'Version' );
}

$required_plugins  = crosswinds_framework_get_required_plugins();
$suggested_plugins = crosswinds_framework_get_suggested_plugins();
$added_plugins     = array();

?>

<div class="options-wrap">

	<div class="options-header">
		<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cf-wordmark.png' ); ?>" alt="Crosswinds Framework Logo" />
		<div class="header-section">
			<h1 class="screen-reader-text"><?php esc_html_e( 'Crosswinds Framework', 'crosswinds-framework' ); ?></h1>
		</div>

		<?php
		if ( crosswinds_framework_if_child_theme_active() ) {
			?>
			<div class="header-section">
				<p><?php echo esc_html( $theme_name ); ?> <?php esc_html_e( 'Version', 'crosswinds-framework' ); ?>: <?php echo esc_html( $theme_version ); ?></p>
			</div>
			<?php
		}
		?>

		<div class="header-section">
			<p><?php esc_html_e( 'Framework Version', 'crosswinds-framework' ); ?>: <?php echo esc_html( $framework_theme_version ); ?></p>
		</div>

		<?php
		if ( is_plugin_active( 'crosswinds-blocks/crosswinds-blocks.php' ) ) {
			?>
			<div class="header-section">
				<p><?php esc_html_e( 'Blocks Version', 'crosswinds-framework' ); ?>: <?php echo esc_html( get_option( 'crosswinds_blocks_version' ) ); ?></p>
			</div>
			<?php
		}
		?>

	</div>

	<div id="options-top" class="options-section">

		<div class="options-top-left">
			<h2><?php esc_html_e( 'Welcome to the Crosswinds Framework!', 'crosswinds-framework' ); ?></h2>
			<p><?php // esc_html_e( 'Thank you for choosing to use the Crosswinds Blocks plugin to power your website! Below you\'ll find links to documentation to learn how to harness the power of the blocks you\'ve now added to your website, as well as view all of the amazing Crosswinds Framework themes that can help you build the website you\'ve always wanted to build.', 'crosswinds-framework' ); ?></p>
			<div class="buttons">
				<?php /*<a class="button cf-button-primary" href=""><?php esc_html_e( 'Start Editing', 'crosswinds-framework' ); ?></a> */ ?>
				<a class="button cf-button-secondary" href="https://github.com/JMWebDevelopment/crosswinds-framework/wiki"><?php esc_html_e( 'Check out the Documentation', 'crosswinds-framework' ); ?></a>
			</div>
		</div>

		<div class="options-top-right">
			<div class="flex-video">
				<?php // echo wp_oembed_get( 'https://www.youtube.com/watch?v=h0uHC9YEAho' ); ?>
			</div>
		</div>

	</div>

	<div class="options-body">

		<div class="options-main">

			<div class="options-section">
				<h2><?php esc_html_e( 'Crosswinds Blocks', 'crosswinds-framework' ); ?></h2>
				<?php
				if ( is_plugin_active( 'crosswinds-blocks/crosswinds-blocks.php' ) ) {
					do_action( 'crosswinds_framework_blocks_settings' );
				} else {
					?>
					<?php esc_html_e( 'Want to take your website to the next level now that you\'re using the Crosswinds Framework? Check out the Crosswinds Blocks plugin! This plugin will add in an accordion block, tabs block, post navigation block, related posts block, social sharing block and more to your website. It\'s the perfect way to customize your website in a full site editor world!', 'crosswinds-framework' ); ?>
					<a class="button cf-button-primary" href="https://github.com/JMWebDevelopment/crosswinds-blocks"><?php esc_html_e( 'Download Crosswinds Blocks', 'crosswinds-framework' ); ?></a>
					<?php
				}
				?>
			</div>

			<?php do_action( 'crosswinds_framework_theme_settings' ); ?>

			<?php /*<div class="options-section">
				<h2><?php esc_html_e( 'Check Out Crosswinds Framework Templates', 'crosswinds-framework' ); ?></h2>
				<p><?php esc_html_e( 'Want to get the most out of Crosswinds Blocks? Checkout the Crosswinds Framework themes! From a portfolio to an online store to a newspaper website and even a blank canvas to create anything you want, the Crosswinds Framework will help you create a great website.', 'crosswinds-framework' ); ?></p>
			</div> */ ?>

		</div>

		<div class="options-sidebar">

			<div class="options-section">
				<?php
				if ( $required_plugins ) {
					?>
					<h2><?php esc_html_e( 'Required Plugins', 'crosswinds-framework' ); ?></h2>
					<div class="plugins-section">
					<?php
					foreach ( $required_plugins as $key => $value ) {
						if ( ! in_array( $value['slug'], $added_plugins ) ) {
							$added_plugins[] = $value['slug']; 
							if ( ! file_exists( WP_PLUGIN_DIR . '/' . $value['slug'] . '/' . $value['slug'] . '.php' ) ) {
								if ( 'external' === $value['location'] ) {
									$link_text = '<p><a href="' . esc_url( $value['link'] ) . '" target="_blank">' . esc_html__( 'Learn More', 'crosswinds-framework' ) . '</a></p>';
								} else {
									$nonce_url = wp_nonce_url(
										add_query_arg(
											array(
												'page'          => 'tgmpa-install-plugins',
												'plugin'        => urlencode( $value['slug'] ),
												'tgmpa-install' => 'install-plugin',
											),
											get_admin_url( null, '/themes.php' )
										),
										'tgmpa-install',
										'tgmpa-nonce'
									);
									$link_text = '<p><a href="' . esc_url( $nonce_url ) . '">' . esc_html__( 'Install', 'crosswinds-framework' ) . '</a></p>';
								}
							} elseif ( ! is_plugin_active( $value['slug'] . '/' . $value['slug'] . '.php' ) ) {
								$nonce_url = wp_nonce_url(
									add_query_arg(
										array(
											'page'           => 'tgmpa-install-plugins',
											'plugin'         => urlencode( $value['slug'] ),
											'tgmpa-activate' => 'activate-plugin',
										),
										get_admin_url( null, '/themes.php' )
									),
									'tgmpa-activate',
									'tgmpa-nonce'
								);
								$link_text = '<p><a href="' . esc_url( $nonce_url ) . '">' . esc_html__( 'Activate', 'crosswinds-framework' ) . '</a></p>';
							} else {
								$link_text = '<p>' . esc_html__( 'Installed', 'crosswinds-framework' ) . '</p>';
							}
							?>
							<div class="plugin-section">
								<div class="logo">
									<img src="<?php echo esc_html( $value['logo'] ); ?>" alt="<?php echo esc_html( $value['name'] ); ?> logo" />
								</div>

								<div class="plugin-info">
									<p class="plugin-title"><strong><?php echo esc_html( $value['name'] ); ?></strong><br /><a href="<?php echo esc_html( $value['link'] ); ?>" target="_blank"><?php esc_html_e( 'Learn More', 'crosswinds-framework' ); ?></a></p>
								</div>

								<div class="plugin-link">
									<?php echo wp_kses_post( $link_text ); ?>
								</div>
							</div>
							<?php
						}
					}
					?>
					</div>
					<?php
				}
				?>

				<?php
				if ( $suggested_plugins ) {
					?>
					<h2><?php esc_html_e( 'Suggested Plugins', 'crosswinds-framework' ); ?></h2>
					<div class="plugins-section">
					<?php
					foreach ( $suggested_plugins as $key => $value ) {
						if ( ! in_array( $value['slug'], $added_plugins ) ) {
							$added_plugins[] = $value['slug'];
							if ( ! file_exists( WP_PLUGIN_DIR . '/' . $value['slug'] . '/' . $value['slug'] . '.php' ) ) {
								if ( 'external' === $value['location'] ) {
									$link_text = '<p><a href="' . esc_url( $value['link'] ) . '" target="_blank">' . esc_html__( 'Learn More', 'crosswinds-framework' ) . '</a></p>';
								} else {
									$nonce_url = wp_nonce_url(
										add_query_arg(
											array(
												'page'          => 'tgmpa-install-plugins',
												'plugin'        => urlencode( $value['slug'] ),
												'tgmpa-install' => 'install-plugin',
											),
											get_admin_url( null, '/themes.php' )
										),
										'tgmpa-install',
										'tgmpa-nonce'
									);
									$link_text = '<p><a href="' . esc_url( $nonce_url ) . '">' . esc_html__( 'Install', 'crosswinds-framework' ) . '</a></p>';
								}
							} elseif ( ! is_plugin_active( $value['slug'] . '/' . $value['slug'] . '.php' ) ) {
								$nonce_url = wp_nonce_url(
									add_query_arg(
										array(
											'page'           => 'tgmpa-install-plugins',
											'plugin'         => urlencode( $value['slug'] ),
											'tgmpa-activate' => 'activate-plugin',
										),
										get_admin_url( null, '/themes.php' )
									),
									'tgmpa-activate',
									'tgmpa-nonce'
								);
								$link_text = '<p><a href="' . esc_url( $nonce_url ) . '">' . esc_html__( 'Activate', 'crosswinds-framework' ) . '</a></p>';
							} else {
								$link_text = '<p>' . esc_html__( 'Installed', 'crosswinds-framework' ) . '</p>';
							}
							?>
							<div class="plugin-section">
								<div class="logo">
									<img src="<?php echo esc_html( $value['logo'] ); ?>" alt="<?php echo esc_html( $value['name'] ); ?> logo" />
								</div>

								<div class="plugin-info">
									<p class="plugin-title"><strong><?php echo esc_html( $value['name'] ); ?></strong><br /><a href="<?php echo esc_html( $value['link'] ); ?>" target="_blank"><?php esc_html_e( 'Learn More', 'crosswinds-framework' ); ?></a></p>
								</div>

								<div class="plugin-link">
									<?php echo wp_kses_post( $link_text ); ?>
								</div>
							</div>
							<?php
						}
					}
					?>
					</div>
					<?php
				}
				?>
			</div>

			<div class="options-section">
				<h2><?php esc_html_e( 'Report an Issue', 'crosswinds-framework' ); ?></h2>
				<p><?php esc_html_e( 'If you come across an issue with the Crosswinds Framework, please report the issue in the GitHub repository using the link below.', 'crosswinds-framework' ); ?></p>
				<a class="button cf-button-primary" href="https://github.com/JMWebDevelopment/crosswinds-framework/issues/new"><?php esc_html_e( 'Report an Issue', 'crosswinds-framework' ); ?></a>
			</div>

			<div class="options-section">
				<h2><?php esc_html_e( 'Suggest a Feature', 'crosswinds-framework' ); ?></h2>
				<p><?php esc_html_e( 'Want to see a new feature included in a release of the Crosswinds Framework? Be sure to drop your feature idea off in the GitHub repository using the link below.', 'crosswinds-framework' ); ?></p>
				<a class="button cf-button-primary" href="https://github.com/JMWebDevelopment/crosswinds-framework/issues/new"><?php esc_html_e( 'Suggest a Feature', 'crosswinds-framework' ); ?></a>
			</div>

			<?php /*<div class="options-section">
				<h2><?php esc_html_e( 'Leave a Review', 'crosswinds-framework' ); ?></h2>
				<p><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'crosswinds-framework' ); ?></p>
				<a class="button cf-button-primary" href=""><?php esc_html_e( 'Leave a Review', 'crosswinds-framework' ); ?></a>
			</div> */ ?>

			<div class="options-section">
				<h2><?php esc_html_e( 'View Documentation', 'crosswinds-framework' ); ?></h2>
				<p><?php esc_html_e( 'Learn how you can get started using the Crosswinds Framework for your website by visiting the documentation at the link below.', 'crosswinds-framework' ); ?></p>
				<a class="button cf-button-primary" href="https://github.com/JMWebDevelopment/crosswinds-framework/wiki"><?php esc_html_e( 'View Documentation', 'crosswinds-framework' ); ?></a>
			</div>

		</div>

	</div>

</div>
