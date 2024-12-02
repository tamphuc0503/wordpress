<?php
define( 'WP_CACHE', true );
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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */
$_SERVER["HTTPS"] = $_ENV["HTTPS"];

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

define('MULTISITE', false);

/** Allow to upload themes/plugin directly. */
define('FS_METHOD', 'direct');
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
define( 'AUTH_KEY',         'd8j2nq5lwciocwedtk0dtbulyk0kkyrokfahqgxxxasghwsd5t4edl26svaiheua' );
define( 'SECURE_AUTH_KEY',  'mqjrnpnk7rto109kdbenj9kfp7izvbier4okbfxklzvgwsrjpw5whdqx2cagzamb' );
define( 'LOGGED_IN_KEY',    'zsxkd14r2gkaswvk6xzja6zlcwllpru1gmulvemda3cci2a2da2gnh47dub3kx2b' );
define( 'NONCE_KEY',        'dqev7haofxbg7qhrsllpajiqtljvz7zu25ekr8tninodxuswscgtmpk2xomrrknw' );
define( 'AUTH_SALT',        'rpksh2od8zs8eduokvr70aw5hoh9cpsjjexxyjepeefobt8t6rpgwpqrv2fmrffa' );
define( 'SECURE_AUTH_SALT', 'xxvzjkqu7rm4mx2x7xuf5pl8e9zac0w2etmhravobl1akzqhpcdnlphptixmvahg' );
define( 'LOGGED_IN_SALT',   'u95qkirbvxkxp1zik6xfevw7orjs4mhm5qggm13sygfdowkcccad8kd1ar9eu1vt' );
define( 'NONCE_SALT',       'zh6vvq8fn6zdydtxxvmaj9zlxosjpifzbenvckb3qioejhsgaqajp3o59lrphehu' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
