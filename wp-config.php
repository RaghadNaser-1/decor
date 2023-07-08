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
define( 'DB_NAME', 'decor' );

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
define( 'AUTH_KEY',         'h72BEws,aocZ.n4$V$,qz*QX5|5o?ci2eN.+9RAeKl@Qj_`uOU2ld3,#Xd2,qG:.' );
define( 'SECURE_AUTH_KEY',  'BgBvl<EOmbT6AEBgp;N6n1DalPbr=h[L:@Kp_9N@#j(}5/b%d=Bcbi@ZXUW1u?:+' );
define( 'LOGGED_IN_KEY',    'SOZ2d3.3ej0tpJ85D2LQsU,v.omS*,{zM[,Gy=.kMcNdd!n5!g;TwI4u31&[TMEe' );
define( 'NONCE_KEY',        '<z|4%D}?j Ev[WU_..vO5GanQNYUT`s~xNW1oCFl@)ehu{yx}ev!*-qMUe{K>F#w' );
define( 'AUTH_SALT',        'Y<61s0c1^G8lzK^[l:kM^#947)fb8$%NE59IB2mt4J>Rx5)OlmzFk8ZRJgYbTdl[' );
define( 'SECURE_AUTH_SALT', 'fNwIMA{X1DxtvjCVODEWYK>L,i+!C9116@H4#(-zS`J^]6pL&=_n&mpc?eaFrJn6' );
define( 'LOGGED_IN_SALT',   'f^*M&.1b;?o=qi+x]PUq3{,%}K|SndW(_d;h]pcu;E1GwMu5[h@HRx4so5d{LP/b' );
define( 'NONCE_SALT',       '/cS^HtW,dXhT3bcvFstfL;*.$$:[`cMQ30:jdCu/{8a#S?l{#}S)5^P4K+{]|Z=S' );

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
