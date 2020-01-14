<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'accelerate-marketing' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'O[Q]|Y(zUU0FaWuE4.;I@(|~ot?%*SPxNbo~k@3}%)jX 4/4f8^qrO:+F3B-mpZC' );
define( 'SECURE_AUTH_KEY',  '*Y{a/U.^9IuH,;I[gY_YX}ZtQHb Ihfx(i3U_C$t#HXMj+tRm(~Ol^SUA$YM%0,H' );
define( 'LOGGED_IN_KEY',    'J$KZEUPVO<l|alkL-[k@~TRH8NYi^-v7p29m3[Lg<GO:ew|j?=u*#30W4ZIrn~[B' );
define( 'NONCE_KEY',        ')AJ/[weB?%Rpuo*3<m`NIgO#r(~^3BAC5[*9%M[gD_`h K:],SI^vHRs{7|hn+hS' );
define( 'AUTH_SALT',        'eN CN2s~q$9v?YKbya$Aba]+zEFs82s!nZ]p*_j-h?f%V$o:E+uF*Wu>`A(=F]E>' );
define( 'SECURE_AUTH_SALT', 'AOPjc+hJL~1)0Dp1yt <nX14eVuy%u( v%8057/nZ^jV|y4O6*$0S3f9_)~.}aH&' );
define( 'LOGGED_IN_SALT',   'jI,t)W_yz;iai>8,q@hDIAIzf#(T0+p-XDDezRHpWL%C[etCMR7E<hPed~8TkaEF' );
define( 'NONCE_SALT',       '={W{3GzVo8;kJ{RB.)5!+KUn=u5<3 [sKq61MSqj9n9w|DqQwC* %K~~SxfYHTb^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
