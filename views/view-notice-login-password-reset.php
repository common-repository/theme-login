<?php
/**
 * Password Reset
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
 *
 * N/A
 *
 * If we need to define others we can do it here too.
 */

/**
 * Output
 *
 * Here is the HTML output, this can be styled however.
 * Do not alter this file, instead duplicate it into your theme.
 */
?>

<aside data-alert class="o-box | c-alert c-alert--success | alert-box success" role="alert">
	<?php esc_html_e( 'You have successfully reset your password. Please login.', 'theme-login' ); ?>
	<a href="#" class="c-alert__close | close">&times;</a>
</aside>
