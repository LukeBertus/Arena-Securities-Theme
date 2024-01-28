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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'arenasectheme' );

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
define( 'AUTH_KEY',         'kn7n43&CsT-,;o`VmmY+UGcYTa/E,Nf:3,Qu(-E$k:ILN{0eJTUwm>U}uzL;h;=6' );
define( 'SECURE_AUTH_KEY',  'H9F6kA&5-fI7m@>8/,AGN+u/}M0FjO]X!&IA FzB=9A1wK@q@OU;*;K@6NJlIR<2' );
define( 'LOGGED_IN_KEY',    '(v]>&YK2SN=8Tbe5c(y9;ca@$,Jz!:qpdLewZQ.Stwq*HB9p*>A!dhR{}B&E#c!`' );
define( 'NONCE_KEY',        'arSi[+)pKdK>ZD8l/CCg6P-pVLmj__a$BO6`t|bo^$-$s!z{D&yts,B)^XWFWr]y' );
define( 'AUTH_SALT',        '3|XB]hpNp~5IdNT`.7tk~%7;}-FC4tSR|9?l7nBEqb^tIT+s[VRXn6KyC?O9;{&{' );
define( 'SECURE_AUTH_SALT', '4b#3}UQW@ $tB7%pT4u6Aa/)1~/*Q9K1H1>=,,29hD^~+<.tX8u^N!ob|N>&!g)o' );
define( 'LOGGED_IN_SALT',   'PhNx-E[%wL_!C1)!Cbg4LR#w`rK<<0tcRC9eDY2WIYtCoW(@<g34m%-FVYR3i}Bz' );
define( 'NONCE_SALT',       'ddJDbxchZ@*p0%b/,gPbjDrgI,8,vaLn_/N]#-B:dl(D{H8HU#J*,Lt]]IU:iWKB' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
