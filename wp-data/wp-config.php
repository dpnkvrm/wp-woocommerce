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
define( 'DB_NAME', 'wp_poc' );

/** Database username */
define( 'DB_USER', getenv('DB_USER') );

/** Database password */
define( 'DB_PASSWORD', getenv('DB_PASSWORD') );

/** Database hostname */
define( 'DB_HOST', getenv('DB_HOST') );

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
define( 'AUTH_KEY',         ':bovS/(D +DW{FKW:;W;T>0}N?o{_kHU[w-/dX]<8sqx@gbV$#;?|vI4~%xCi()#' );
define( 'SECURE_AUTH_KEY',  'VylHs|!nerL:oz?fAqRx/H]%$jloEm0=y4*}MK%?I7QbEDs.,Fed<g<9Q6CsRU:<' );
define( 'LOGGED_IN_KEY',    'A*p#<,wf7=dee+A&#JK?pkHaff[ytTM!bDf1lWSRr@,v*B3rjV<vA*CXxL^kTw?{' );
define( 'NONCE_KEY',        '/br*4`?04;DF4[dsgQ:Cn-NA@Vpbf_vc att2]*a_D[DgD@cVq@X5-gnkt}m|=[+' );
define( 'AUTH_SALT',        'BxdZ;2@!#m70PSKF#tcGWw$%;^HDA6sy5_=L917+1RS=>8*-?+.=L-pzk:#&X(vI' );
define( 'SECURE_AUTH_SALT', 'wJe>w,Q@W(/*8=1q}oL:wP?oY(v^h{{m;(Rt{27utjrH #j,%&FD{d%~fmXLf7T+' );
define( 'LOGGED_IN_SALT',   '?3K9/8P!,N-2|i}Pw_JeB<hEon[xmCvx25mFMHAU^t%m/8WU;D5{TQ}jIoC}]<Sc' );
define( 'NONCE_SALT',       'sQaQ=qQIaX8lhwK_%7X+eE,Ny=*#u_y>`=K)6C;?a dmVz8LYub/vFS]kUUxI+c_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_poc_';

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
