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
define( 'DB_NAME', 'dailyBlog' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         ';JO>bC]e!w)2dM#=~W5tyb(StcPOpp_O1BaoYCi#.CVAK8>dBXFr1F;6dbmuIDuC' );
define( 'SECURE_AUTH_KEY',  'T<Q6u)?r1gU-:nO-E0!1YC0nvx3x8U+/HC7XZ%y<6fHSXdmf^)zX,Tgcj]E%LL?p' );
define( 'LOGGED_IN_KEY',    'A>Xv=%E=.NyCA++Si#6$$gT8x&,6m<*]c0 4foRjM=>heG).!Es#O)7OFX29SitM' );
define( 'NONCE_KEY',        'U<R2K9L8=}.j6|d-F n5j_X#pc,rgE5MgAUrNIi5v0E,ng`w)F>e:0K%.y<q &z,' );
define( 'AUTH_SALT',        'jGaA`}%]NBuQL/1-96/6Li2eD*R>n3YkRz !VP)!Y1y+wot<1g=QNew9:_YAQ@Mp' );
define( 'SECURE_AUTH_SALT', 'XxzFsl_II#@VD_I{3;>hIZ.fnqUIFJ0osD`hv[?<qwCrO]S.BoE6n?c$X}mK5Y.*' );
define( 'LOGGED_IN_SALT',   '.GIpA,R3:hhkKkhDAjhb|`=a;+ns8!h0QnMv[]{&*=g.7s*japMmov!UH&lg!9U5' );
define( 'NONCE_SALT',       'HSWR2LW3q7xb8k;vjx#C!mG,Q<;JeTd]ckyEr[aL;;KAnQI%h]dys)=qZ+g))k@6' );

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
