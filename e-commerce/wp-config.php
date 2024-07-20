<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'e-commerce' );

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
define( 'AUTH_KEY',         '-jwnv4RxA,:N4;g>25{^U;=c<=u{eBS`5@^C}&mZpcy4r[&w0!qG)oLi9#W,EVkh' );
define( 'SECURE_AUTH_KEY',  '#ve#&VXoTwFo-i3tr%s?3z81_kHh&Zg{yjbDJ!a8j-@%[tyHy0Le3HwB$+xo`Lpu' );
define( 'LOGGED_IN_KEY',    ')=?7dsfRT9jIt&%.O0q5%yQ2Z9#MuU6y`%!(C>DXX9O%WxleY<vRZ%NdVn^GHRKZ' );
define( 'NONCE_KEY',        '%iw5:^%n`SA5!]6aR+q5s@+)hCg2v=5Ew9dRtf^W)^xxR{rvit`^DWcHs*ao4r}m' );
define( 'AUTH_SALT',        'LY^6Hu?OOVE~3N{{Dt0@/lUqT<nI}#VC/B<UcrI{($]!ADGg7*ABH%#t=;p$%q;J' );
define( 'SECURE_AUTH_SALT', '-i%??>$!a~odKq(s0&Mn!+cC]:7_5jjk{wgSv T1cB ZdneH$+@Dx|DjX?UYJGiF' );
define( 'LOGGED_IN_SALT',   'OfFQ;VFO;=`MtG?8e;VVfLG(|AI_$W:Hi!e-dj#.cTq>ofh#GQ!rqBbs$C:6OB6F' );
define( 'NONCE_SALT',       'B5otSO)<t*NNp+N?ibIsy,FLG^HdSFBz(1y%1~A?Fwm$Wi.#xe9s1`$xr{].oE|k' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_eCommerce';

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
