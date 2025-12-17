<?php
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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Kw&l5)m(?LW]yoy<FY^] dP,UZOB8c.*[3Z1yyq5Vf}1.l{M`J%7&u-W ?b@GXu9' );
define( 'SECURE_AUTH_KEY',  'GcC&$^{;?i}wWq%,+HKQ#B#-W>LMM23]%]lq+RC]PBDW9==X*L n&.tm9Tir//Gz' );
define( 'LOGGED_IN_KEY',    'P;)jN J!nmfI`VE3~0d!yc`5W!jmAhM<&5x[tB]ctq9Ee:<FAt+=r-+yeW##i0ta' );
define( 'NONCE_KEY',        '3eO@^FDfJxvRUa@in[@@8X6^%$R._qK2c:6j@wu=/&zjNwwJl4M)co sH]_CIm7Y' );
define( 'AUTH_SALT',        'wUe<R($d3sL<-%c=|k;t7W!o?nZwnx2rPQ2q=aQhc2@]7>R} 8D!p}.4lV{1b[`g' );
define( 'SECURE_AUTH_SALT', 'x0!&^q_hG|`s/]Ksth9_1q.Z]%F4qu$zXCr7f>U-Q?HsgX2gz}qD#L|/tRfCD`6T' );
define( 'LOGGED_IN_SALT',   'YP`9H~T=!SM?Ca|V#tRN4kA{yro6.OLhDn~6H{crHi_v$DS@l48@k/|@Q9khYQPG' );
define( 'NONCE_SALT',       '|DS Epms[t&(7mQ%Ybs8,@b #j}jjb|PBMS_?Ts)X28CVkm*`;2P=Ca(>$b;lM0O' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
