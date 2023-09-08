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
define( 'DB_NAME', 'store' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'deo' );

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
define( 'AUTH_KEY',         '%P!i$aJSa{5(bT-z/c-N4z@=4>~/1re_(+f=)OL0Pj6LeCv_0X!ohKqb6n`p:r&;' );
define( 'SECURE_AUTH_KEY',  '.G?kLX>A1HUMEs2,u*C(lm]<&N]LW[(m34:fG8qn2C^zF?>g2H-n`&98%bVz#SdE' );
define( 'LOGGED_IN_KEY',    'Jhr;zY=@Vk2(FRw#dJYw4xLs=2nERr_OyKit*r].:VNXq}m-n/-H,Nb(nWck5,N8' );
define( 'NONCE_KEY',        'Q}aZT|,a]97|iy>?O07<iJ<d8)Lgp)q2dD:;:OJ@/^<,NwImb9~L)/(HASWj6-&.' );
define( 'AUTH_SALT',        'YBb;*~/}^1gLck}ScYAta8IQxQuqY?Jl+.i-h>.w>2.:)6qUK)P7E&X4y]y.ybCb' );
define( 'SECURE_AUTH_SALT', '][8M.5~(5D4gzwkC)|S>vT2<L,B9sl`|Prh~dXpwNN#qctH|@`z_%x;`FK+G~Uz+' );
define( 'LOGGED_IN_SALT',   'ymLT76`t&T}0-`6s<Z:Q+9csrBk6V-qk`%[qf!;C~q30L`K*XAc~.=Okph]BP%d|' );
define( 'NONCE_SALT',       'K]0oK0@0^aKA^9bZ-Vu!`fxhpn)ASG+6I*~X]m50aO?Szg7Aju%;3z)#1*vtT?:Y' );

/**#@-*/
define( 'FS_METHOD', 'direct' );
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

