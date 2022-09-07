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
define('WORDPRESS_ENV', $_ENV['WORDPRESS_ENV']);

define('WP_HOME', $_ENV['WP_HOME']);

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $_ENV['DB_NAME']);

/** Database username */
define('DB_USER', $_ENV['DB_USER']);

/** Database password */
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);

/** Database hostname */
define('DB_HOST', $_ENV['DB_HOST']);

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '&d~aWMk|3r]/v6.r]A4zoZWi+/pUuYai]NmGi|h9lLi9c7I)i|`2XpW<x|wfOZ6w');
define('SECURE_AUTH_KEY',  ' tK98T^LQw|hiN)r/Ly/5Kb88*qnye~Y>^FH<]9N]ah6v6ce0>nWIV#`.wl=YdQ.');
define('LOGGED_IN_KEY',    '@[tc}|Dw&EJrXh2k1OGz=-LH($d=t-0M /S9A1`Du}vfaeUv-N#|+x(oJb?=F47&');
define('NONCE_KEY',        'F?$RjV+A7}.OH z;k.>-)<0|*tol%#;JE2e^&T5VtJ<Yb75:=vgU;r&?i+Ip~(%i');
define('AUTH_SALT',        'U-:>iy]SnZOe:[9au)OwBq`[B3sAX=>KdPP7cC[6$;$CM1tYcL Ox@VVxiO$h|@e');
define('SECURE_AUTH_SALT', '&InVKp|?(M$I1Ng.,KndV1^~gg=?:`@=|me&O8Ic^Bm{E8bmWNmi1R`15|na:4sa');
define('LOGGED_IN_SALT',   '@Ja|-RDjQ..s+[h6[6E[f&o=qWF.kBwJfbEcs#rg7L^-m^@KAf;k(|v/b&B~i5Ff');
define('NONCE_SALT',       'K(o@jKRn@/mSW~j)X(>$/+N46PnSlXg/t*o_8x@*Dp,Ef9YKX+@l+pj)9H?q,z5%');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
