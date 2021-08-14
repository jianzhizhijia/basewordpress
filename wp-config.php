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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'luoshenzange' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'roK@q@EH:uTbvjJ6L:9V`@vDlave;Sv,e&*4[&U-On8yK/OTjwXT&=R[kU&FmUW*' );
define( 'SECURE_AUTH_KEY',  'uK7>N63a.uvz*BHB&Ub#%}}K/<K8wX8-I8F?sLK&i>aA[}4$,b]iCO7,QKC@a|`9' );
define( 'LOGGED_IN_KEY',    'YwP?P 5LH/3$z3y 5@47gcQ>jxtFxy^t!o0|Fn^8m3N{7{CY.=d`~Q;D{K%| fB#' );
define( 'NONCE_KEY',        '75:qG+%3B]Fm@1^5{2Z9y_v12w@,^kp9Pv?46FZd<6TNe6VWlj0&;qd*Du+>-O&@' );
define( 'AUTH_SALT',        'nS?MJ=,1cyySn`oAV_$40MFU3Ogf_6<k|+}#irMLy^=xVJTNX4@yH<qb8@>uYg@I' );
define( 'SECURE_AUTH_SALT', 'gj|D.;-_73]Vrn~PL=_VES#6Oq<]VyE8e,%8v34m8oC|AHUTQgTS30_E/7!Y.;%:' );
define( 'LOGGED_IN_SALT',   'zM|)#/=@3UG0h[e}nUAfSF[Q?( q,X)~:e?@4^wn0:j(*Y9C]!T04Tj)r;T~8TsN' );
define( 'NONCE_SALT',       'Lufkg6P8tWS]$(;r}[(4I,g%h*Ex[8/Ir:XGyOW^E%4_8V*;}REbacSEJYo+(`&%' );

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
