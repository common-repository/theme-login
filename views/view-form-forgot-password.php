<?php
/**
 * Form Forgot Password
 *
 * If you wish to override this file, you can do so by creating a version in your
 * theme, and using the `MKDO_THEME_LOGIN_PREFIX . '_view_template_folder` hook
 * to set the right location.
 *
 * @package mkdo\theme_login
 */

/**
 * Variables
 *
 * The following variables can be used in this view.
 * $username          = '';
 * $username_is_email = true;
 *
 * If we need to define others we can do it here too.
 */

$username_label = '';
if ( $username_is_email ) {
	$username_label = esc_html__( 'Email Address', 'theme-login' );
} else {
	$username_label = esc_html__( 'Username', 'theme-login' );
}

/**
 * Output
 *
 * Here is the HTML output, this can be styled however.
 * Do not alter this file, instead duplicate it into your theme.
 */
?>

<form id="form_forgot_password" class="o-box | c-login-form" method="post" autocomplete="off">

	<?php
	// Add a filter to add controls before the username.
	do_action( MKDO_THEME_LOGIN_PREFIX . 'form_forgot_password_before_username' );
	?>

	<div class="c-login-form__input c-login-form__input--username">
		<label for="username" class="u-hidden-visually">
			<?php echo esc_html( $username_label ) . ':';?>
		</label>
		<input
			type="<?php echo $username_is_email ? 'email' : 'text';?>"
			id="username"
			name="username"
			placeholder="<?php echo esc_html( $username_label );?>"
			value="<?php echo esc_attr( $username );?>"
		/>
	</div>

	<?php
	// Add a filter to add controls before the submit button.
	do_action( MKDO_THEME_LOGIN_PREFIX . 'form_forgot_password_before_submit' );
	?>

	<div class="c-login-form__input c-login-form__input--submit">
		<input
			class="c-btn c-btn--primary c-btn--small"
			type="submit"
			value="<?php esc_html_e( 'Reset Password', 'theme-login' );?>"
		/>
	</div>

	<?php
	// Add a filter to add controls before the navigation.
	do_action( MKDO_THEME_LOGIN_PREFIX . 'form_forgot_password_before_navigation' );
	?>

	<nav role="navigation">
		<ul class="o-list-inline | c-login-form__navigation">
			<li class="o-list-inline__item">
				<a
					href="<?php echo esc_url( wp_login_url() ); ?>"
					title="<?php esc_html_e( 'Login', 'theme-login' );?>"
				>
					<?php esc_html_e( 'Login', 'theme-login' );?>
				</a>
			</li>
			<?php
			if ( get_option( 'users_can_register' ) ) {
				?>
				<li class="o-list-inline__item">
					<a
						href="<?php echo esc_url( wp_registration_url() ); ?>"
						title="<?php esc_html_e( 'Register', 'theme-login' );?>"
						>
							<?php esc_html_e( 'Register', 'theme-login' );?>
						</a>
				</li>
				<?php
			}
			?>
		</ul>
	</nav>

	<?php
	// Add a filter to add controls after the form.
	do_action( MKDO_THEME_LOGIN_PREFIX . 'form_forgot_password_after_form' );
	?>

	<?php
	// Render the NOnce for security.
	wp_nonce_field( 'form_forgot_password', 'form_forgot_password_nonce' );
	?>
</form>
