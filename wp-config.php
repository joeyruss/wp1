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
$_SERVER['HTTPS'] = 'on';
$_SERVER['SERVER_PORT'] = 443;

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp1' );

/** MySQL database username */
define( 'DB_USER', 'ploi' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bLC2uQjgVw0hG0QoyIQd' );

/** MySQL hostname */
define( 'DB_HOST', '10.2.11.95' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_REDIS_HOST', '10.2.11.142' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_DATABASE', 0 );
// define( 'WP_REDIS_PASSWORD', 'secret' );
define( 'WP_REDIS_TIMEOUT', 1 );
define( 'WP_REDIS_READ_TIMEOUT', 1 );

// supported clients: `phpredis`, `credis`, `predis` and `hhvm`.
// define( 'WP_REDIS_CLIENT', 'phpredis' );

// automatically delete cache keys after 7 days
// define( 'WP_REDIS_MAXTTL', 60 * 60 * 24 * 7 );

// bypass the object cache, useful for debugging
// define( 'WP_REDIS_DISABLED', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Z,-G(@M)w,`[ezpZ!jEWCbxZC{#h5^Z9L1ZV3-FE@qZ|0)n=Js2`0N5TDeE{D7>:' );
define( 'SECURE_AUTH_KEY',  'r>RZNcEuDbp90~-YA`lTkh^rA?7C9%P*]5^u`uY3xFVJvwmL=QFq$[6Mv$!a_]]=' );
define( 'LOGGED_IN_KEY',    ')`hR9<LwpN+#L$Qx0dB}bU3Y+GJT(lxo~hV3X7/8a/]~&.-M[|%04n5->#!ci^oM' );
define( 'NONCE_KEY',        '(AT=7C{oXG|CVe&SV&F+)CggUE&8*4?49zWr=hFMM)+hz3DK13/>)yys@9/!yh-r' );
define( 'AUTH_SALT',        'FMRSqwBA;~U?NwSIt.If^q/Z`g.SlW5N^!)n+l(eh*DlK6BXA@gRtLI}T4V/T`e}' );
define( 'SECURE_AUTH_SALT', 'uAE%dwXj{Z/O%? OS`Hh$=jO+px%SM;S%kk&b&D1-qo4aN6Dg+kCZ:81Gtz({U0H' );
define( 'LOGGED_IN_SALT',   '*gI}4q#sX/m~sL*yWdSV>T&DK9tF?XJ|~+#oj;f^KA+c`&FiCgK{?`^pf{Iu345>' );
define( 'NONCE_SALT',       'W*5IW0F<y2e;Yq>bUdC*!4 dC23xVKCt0$?WhtV%O3*oTf~Fd5:)M&e8 yYQB@~4' );

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
