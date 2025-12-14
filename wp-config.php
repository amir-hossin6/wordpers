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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'site' );

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
define( 'AUTH_KEY',         '(F[ PIuY~^A(KVrOg*vu:.Jo:$iL:`/U~r8GiS.n$X<Zna/ZpL|Dq~bY@b0C&D&[' );
define( 'SECURE_AUTH_KEY',  'V+k(r@=R!NgrjvS}ovz-n-6yZdDy9E%[ZvGaVtn?Qvd3cB 7$bYgOWW#Bt&s<Ei ' );
define( 'LOGGED_IN_KEY',    '/`iZzTX*Gqll8avn>L3*w=7b-Ii<{L,6uobaj$lfxY)iyx_+<:+d|V{05hST<*C!' );
define( 'NONCE_KEY',        'ew)D4:BmYNW&/J6P[}0[)^O* VR/8yOGJ$&1Ia$nLQ;!%(VS5w&EL:bj>qsZapsV' );
define( 'AUTH_SALT',        '5V0WXlwkKC.oe1/NwGO6Q[J5+3ep1UC*T<wMR`YL]k$=b&#@8sL+kD {e19)q6O?' );
define( 'SECURE_AUTH_SALT', ',rR$Ls>|XLJtd=lGksa59Gi )%yyH-oV7L6X`(Oa`gM7QlCguGx+,ryJQzCPw;m+' );
define( 'LOGGED_IN_SALT',   ',Dqoqun>IxiJ{ZfhGCG~^TMOvV9oZj*HScGNI4QUxm6[qaN{h@^R`*[O[T!W+iZE' );
define( 'NONCE_SALT',       ' D<Z!*Sp_1D)C24J913=O{$FX^MRr{M:#)SqE|CMIPu%O-~_iEi;/Ic6_Mn;][o$' );

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
