<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'brief10' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3b5W-z{h<;jDeIgvM:4US-IplhOGr8x4JU7PsGIV,r&@a>]KZ6ds&<jlc72Bg.UN' );
define( 'SECURE_AUTH_KEY',  ',atvS$C??mX@d6spuV7%LOK{a6L kM(ui{NV9)-#kJ=0|gKdZ?Dt_{ =QO4@G.oR' );
define( 'LOGGED_IN_KEY',    'DAY_X|RCzRU~((@xyrfYFe`%NAG=u<6( !o6mY@z/|vhten>PB*fUdWUX(|9KK6h' );
define( 'NONCE_KEY',        'j5yHAjqoR35o|yX9,12A zx_b2V(7s^Kju!&#*1[.}S!cMnp2T00[vGnQC}d!gJ@' );
define( 'AUTH_SALT',        'PY2>VLzP*Z@ouXXe<uniSb64*ssF`d0lf1],4Lv^*480*l]|lMD&BZ&4jJYdYWVn' );
define( 'SECURE_AUTH_SALT', '<m0KA]yq<XazLn/97NpQh0-YhpkQ`@Fze_@*.8S~mk&dFvf}+cs-FF^|ANmgMMp(' );
define( 'LOGGED_IN_SALT',   '^AFC x9AvkPF9J3vL]DR|X3ar#:vCx9Vb?*F>xNK2@Q_y-A!(myAjw;B]|BnC+xt' );
define( 'NONCE_SALT',       '!7rQUCH*6ibTZ5ei@5f/DKfXh}jH+d7MfQ z(#S=.Jar;6SPVgC:aeaMM?:ZK4t)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
