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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'p(>ll78LhA`>T+x1h3UR}r1Fwk8Cp-){$`5b65]#0-[cn4L2 6BwX_1B.%FHM`jR' );
define( 'SECURE_AUTH_KEY',   '!? 9fx1m.D2c9(p3$]$.?o^,I3y3K![FpaWLUl3p9ZrC1L.f?># 7>V< X%.x^!%' );
define( 'LOGGED_IN_KEY',     '2+(}6]4.%f=?fu+|(*8c^<x&%IA>#VDTdm^sO@a}wGq[sP@`VCLiXuM7!|VoAF1q' );
define( 'NONCE_KEY',         'z()X0u2Y{ n>u++z8 KMAQemP`jiu8{-%SI*cFzr@{?<fI 3y_jMk.jVD|_~)Xso' );
define( 'AUTH_SALT',         'l#X$+i:Wc&Hd s=VOv0`zvC,Qm/OO</ekagY+o`T7*MKN+@<}6?%J9Fz@IgYwgt.' );
define( 'SECURE_AUTH_SALT',  'd#1~_Z(_S?~QZEIf+Ze_yX@`-]^?4B<WLL}l7h9A`ZA|9<qX)&i}D0=smW4$G;}2' );
define( 'LOGGED_IN_SALT',    '~?}it]56^TfA#)>Ucr7d${%6,kjkd:d~wzse-D|WGuo:NrgVUv/e{TpiNpG#8!@U' );
define( 'NONCE_SALT',        '8(0l~rr?4jlPB~A_:<T+F iS>~LfD-t+EnczJ(?mIWCgM|hrs;[bdO{`USH~.Hik' );
define( 'WP_CACHE_KEY_SALT', 'J([zL6foGlq,;XjvVpc-8A84 qVSo_U[::_+)lA[zS%(B^|,E|w[C2+xaU.H`m4)' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
