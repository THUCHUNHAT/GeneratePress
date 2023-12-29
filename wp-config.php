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
define( 'DB_NAME', 'GeneratePress' );

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
define( 'AUTH_KEY',         '&6yrcQ@@us@Qt>t+k/2j:;&4nIX77t p:2rj~NRXP4*5duSb)T4Yl5@O>; m;VA@' );
define( 'SECURE_AUTH_KEY',  'YTaNk~fGFs0Qlww,FVS0,UrY,l_ ^G6{aH;|POb_{=ZRQ ujo!D%B7f`+!vu55p6' );
define( 'LOGGED_IN_KEY',    'X<Oy.Wj3rGDao:Ud pVG< cRt$G>:<;fnq:9H2+W^wQzdh.8-7VHgT-Blf#B+:3f' );
define( 'NONCE_KEY',        'cH)~WtBeZrb?w]Pz|6%rx*8/Tt2bHe#h|~hqFd=m+g%<3G>^m=VwS=pZvJSxmTuv' );
define( 'AUTH_SALT',        'zCrwwNZ$f+!HwPNL 9B(_C2bk8w7M~NVMUgLfy!i,Rm1*!!q;2uB8tC@<uz}roXC' );
define( 'SECURE_AUTH_SALT', '56x|HrRkt0VE$7^lN&ZD/~j4#F-k|o_!/NKuHWVN1AP@=j2oUnSr^?2@2E2&1^z`' );
define( 'LOGGED_IN_SALT',   'IK!{@]5tH,*0DZ^214Gi=Le4;0y!3`dNAeO]$-uxIp^/|K.qc,$S,/B`Dh=-35;)' );
define( 'NONCE_SALT',       '0ch!WZ 1(F2`T,`Lm+t2;?;`HqQ`8<ppPCC_.k^UhLo.:p_mYSyv%3/z/:<%^+N)' );

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
