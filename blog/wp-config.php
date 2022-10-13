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
define( 'DB_NAME', 'vdrayoti_blog' );

/** Database username */
define( 'DB_USER', 'vdrayoti_blog' );

/** Database password */
define( 'DB_PASSWORD', ']Nzp82S.36' );

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
define( 'AUTH_KEY',         'wfounosxdhxjpo6aqoygidwl3rfd4y0he7klge3ywngcrwjo0p7ouumxqiw5w928' );
define( 'SECURE_AUTH_KEY',  'neqficrieojp1eqashy46dq7w8a5jpmtaekb6llvcqegie96u8ejntqkvbzij0lo' );
define( 'LOGGED_IN_KEY',    's5gfqthfporpqd8tdx09zumj82es8gbpeuohkntatiuy8h50a5armcq8ovey8atd' );
define( 'NONCE_KEY',        'mbniigovsjdislovqspijkpygs92za9hmeuqwv3rhduzaykaeantwa3hh6n4v700' );
define( 'AUTH_SALT',        'elhqv2xdfkyxtmwaiuarmusbsn1dj1gpeuusixndqgrmkw6zoyydy3hitoodqjjj' );
define( 'SECURE_AUTH_SALT', 'lleoxpdnmzkyvekzw0eipgopjwpowtmzsclnch0idczztaamcueenhapf7sbwdyp' );
define( 'LOGGED_IN_SALT',   '8jiibisrpattznqgrboddto0j4adphm0bzctutrl4hzonyuctjv1ovt7yr7etile' );
define( 'NONCE_SALT',       'jjcmodjuyt4xkdhdsubr1ptbmgilsdkrvb5zjs7r0fes3xxvivjixcza5zur6d3t' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'blog_';

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
