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
define( 'DB_NAME', 'testsite' );

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
define( 'AUTH_KEY',         '#bZkxw1sN7HU!j^858soq<yFrQgAbZD1L),EQ@g0KAMB|/QS(W6s-L/n^P^.6-h<' );
define( 'SECURE_AUTH_KEY',  '9bb2b:P/3,v|[?NY6 `i&D{fl:ua*T>4x^*r,D*H:&`:x1:4?t;=V3Z^2_{p`dy_' );
define( 'LOGGED_IN_KEY',    'cPi6QKVn]~DvZMIX1[m!|YD+j.(|hCE;*SR_D,50Lujuxb@s67riq`$}TZSZW0ke' );
define( 'NONCE_KEY',        'Lv_r@HI`p0K)a7Ii838]<hd{+%jwM4G8p6+rJR4Bv#!@#IXZw8eXVK=uxbDlbHx@' );
define( 'AUTH_SALT',        'Z1fA5MlA51&ni@D3rl*2O-;nW*`#vck0$vo)f98:<0lC[V/no.7IXEX!dz[57#um' );
define( 'SECURE_AUTH_SALT', 'bVQmrK}P?d255[VO7*@MdA>SQ8iV!`d%y>Ik3GX 9#F+hP;o4DWiBa<?-Z%~EUo`' );
define( 'LOGGED_IN_SALT',   '<HAC+He/+sCj=]ho~,;,beS8XN]P6c~4Bu;d~!HhakU&d_a@+%tx_Ji%!SfifAyx' );
define( 'NONCE_SALT',       'Ey8}?q{1de6=XI5T$R)|~@-%0tNEm2ik/aV|brk(xjkw$pV8F5h{/T$CcWL@eRTQ' );

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
