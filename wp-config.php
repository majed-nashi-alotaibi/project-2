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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'oxygctdj_wp179' );

/** Database username */
define( 'DB_USER', 'oxygctdj_wp179' );

/** Database password */
define( 'DB_PASSWORD', 'p.[z(@5)2V6SUigm' );

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
define( 'AUTH_KEY',         'dnmgo7x5zi5uajru6xa6sjnjchnjuu8tpjva5wrkdrmgmqvgd8lgjiw4nchnj954' );
define( 'SECURE_AUTH_KEY',  'zkzydougxua14suzqto6slncpugyyihjeqkjncfiiancm6uppqoc88hdlbgebiie' );
define( 'LOGGED_IN_KEY',    's7lavkfyurbio32tspwwavrlr4i6bnebdvtoqkdsucu6wc1vlpykw8lvgsszbj0c' );
define( 'NONCE_KEY',        '8l4wfbotal1ogz8jbizkse9iqboubp4ebkw7t1oct6gijhu7ztk0srf4fzqaqrju' );
define( 'AUTH_SALT',        'x114olgxfl6rbbtqd5pwraasjohqbi2olpdmk8rroqsuxts3mc9ohllfbzrnfpdb' );
define( 'SECURE_AUTH_SALT', 'j4vuvjsaskgvq7k556zo5vp1eafvulppb0tpsqdfhnl57ervodl2luljrptrop8p' );
define( 'LOGGED_IN_SALT',   '2oagde7alqftpmdq8ehkkwylujc8hsbelmatjpzbha9bzi0zq1ilkgf41xzb2xuv' );
define( 'NONCE_SALT',       '5dbqnufaiu3pbstjtlp35sawfd6qxy9vjzlxhr6j9epzbjru4r7ohff9wfnpkbnk' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1u_';

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
