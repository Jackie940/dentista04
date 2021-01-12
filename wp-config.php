<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'dentista04' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2G8YTZ[6%7jmk[YK0T_BD*l[zJ2E^SJa=a]8L3_yYicdI3Pjl-e#GS<)M)l~(q[z' );
define( 'SECURE_AUTH_KEY',  '&a=ziiuvSD;[v!T-h)|az~<|+Q+JrFBW<2M_MVeX;^6>cn{)YrseD-aO`.r:5T<7' );
define( 'LOGGED_IN_KEY',    ' TH-)z@}>MHaM9oP;}}N>*J>,URnL=rTd4G1eSvPO?E7~IiR,3e`sfl])&;RJ}oI' );
define( 'NONCE_KEY',        's/`NN`SG!N{d1Gqn DD66qzO;cZe+,71FF-`8gad8JWi1aPFCvR.C%EqZtl=<O+p' );
define( 'AUTH_SALT',        '&k6Lx6VjP9EivfroAcbm<Fmr1GY#thr`<9O(8/{.B#GB@_QWXxSa=zAehEDYO:E~' );
define( 'SECURE_AUTH_SALT', '3[3P$IN6^$J(H|[)OXfw>y*>),jVV6+rXZsSzYeJIN`Ne!WRf#}bAKd0cyKK*q=l' );
define( 'LOGGED_IN_SALT',   ',;K*z.I`jpJhLtU];[{8_600b`v95#(A@UCo94$7E<wvlwZwz*N*rL(nq4hwS9?}' );
define( 'NONCE_SALT',       '_A8%?@zfDE!L5*nwFiX0fs;_% 1E1RnM^0&c6{_Cc:i[3B{F=/]67uLOsgkf%?f-' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
