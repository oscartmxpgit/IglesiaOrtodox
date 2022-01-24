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
 * * MySQL settings
 * * small change
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
define( 'DB_NAME', 'IglOrtodox' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'samsung2*' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'KwGTYgcEsBSbDsBN97aspCFV4xIkLWzvfjC6J3OpLw9qf92Pqow7HbujO0VJP0EM' );
define( 'SECURE_AUTH_KEY',  'dq3n8ySZsNMVjxIkXT9DACVgrFwB0I4TjjAocxAig9q77Hvwzm8XwSlindxve6gd' );
define( 'LOGGED_IN_KEY',    '0eAFtQeLyQ2wTURg8LIwhLb3Yt43Q2cWm56VV548IFS5Rf8aMTHKQpugKWDRYIhX' );
define( 'NONCE_KEY',        'kGRx2jje60oTD2ScTUHm9U0FQmQ70YGNIHdBO86Uc4uBWVIMuesktQ9578Gwc0pJ' );
define( 'AUTH_SALT',        'v80ozMpGCrMfn0T8F3HcZ48iIgDasUaE5llgIa8HGr603AknczdV6hNRriJcqzxv' );
define( 'SECURE_AUTH_SALT', 'SytFw8ypsGvcKzjN0B1gJqC5BY7Iu5ERUTH2ZRicbYP7DQbHxZRmaSANg5uBMkY3' );
define( 'LOGGED_IN_SALT',   'xrSA4ii2MPMv4YP5GQiDNGpxYUAtB39AsOSqO1dOHIfdYZW7j5l5tKzUiJP9iATf' );
define( 'NONCE_SALT',       'ltZQzHfGnf2Mctvts7mSAi0hbxZ8Y3YX406pCQ71efhbpX58Mn60krZNxzgBftJz' );

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
