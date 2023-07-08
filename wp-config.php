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
define( 'DB_NAME', 'homeboundpets' );

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
define( 'AUTH_KEY',         'NJ?k-! 4pS%We*z5J/@BK%ZsS4g<qzi:LFc_woMR`8/W!M[IGGl&UB!}AhG4wsK5' );
define( 'SECURE_AUTH_KEY',  '<3D`NbQA5kiVIRtttZ!+4.Nm^^.<p4/J8bPv&ha)/r]+J?{J mLA@A)u~iY!tiBU' );
define( 'LOGGED_IN_KEY',    '@43Rw2Rh)TZ:>{Wb-}`f(=@H!}8$-}>$VZ=P)Q4>A9rC]gCQ4lxM^rEY[Zp5Obm(' );
define( 'NONCE_KEY',        '_OX|1X=CX~uZk[o@faI7qb08%]-}HojOD%~zgZ_UR4I?g< r-cikp<z!&zlziyow' );
define( 'AUTH_SALT',        'B=@:4{0F=r(UKVXjChn_3*%I=I~o.ngv<{H~U+}2R|4JfkKF`s<u[Sp6Plc,ZRb,' );
define( 'SECURE_AUTH_SALT', '(W|VoE&0FNrlphapsp<sdt=-l=~z6kiKO^DH)6(P1$vzJ<euW,OPC)=aRtS%d4g,' );
define( 'LOGGED_IN_SALT',   '~OObO9,XULL|$0%a26dU$lsh,@9:+yXIqwa/s pD)5V>o`uZ37*ZQK!S(;z(EbC:' );
define( 'NONCE_SALT',       't/+/3S=P?RFxIrJ=!(2$}0<v4i!T{!:c!.*:W2Zpl[4o=tbdV_}4Ucn;oD7vjlzP' );

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
