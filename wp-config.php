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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '+6t<K<JHGuj0->r^+7y8lV}n$)^*%rri[9eRWPuH4#?1dVkR C_i1(?IHaWB{FI>' );
define( 'SECURE_AUTH_KEY',   '6pNC66g14Y/ig[mlc)y*n@|+XqBHV3QyE^sr$$Q6/;yv8&&IB+RB]pF_fo=Y`Q|P' );
define( 'LOGGED_IN_KEY',     '18dI,[8bq]ufw+e;&mwj@<dTg~&AL2vJs*[j n^KA=H=-20{<yb={A|xVj%;h^x.' );
define( 'NONCE_KEY',         ':yosSPcMu{X rcY:R4EBMd9Zb_8INF>KL[{YN^)p}Zm~+UT 9*S8C*O>5J:PA>s{' );
define( 'AUTH_SALT',         ':RAS@cKXlmSuWR.T% *bzgzZc}V)3WNn&sUdO|#<9{!=7#m}%zl8k+2/D 0I_uSz' );
define( 'SECURE_AUTH_SALT',  'kG,PA-3M!x/ob&rHYh^ARF4{YKKn9>*?Xt]pm/c?qkSis>aVw+dvOQ({-N9^[<nz' );
define( 'LOGGED_IN_SALT',    'F`?0WUgAuXy>u*Am|:@5Eup &PW1nxMq72a#v)jv70!X#z.:wYk7J7Zrvzv~p/9i' );
define( 'NONCE_SALT',        'LVOCtNQkbsm#D6Z23:yzE_>Vcbb5PKUJSLbz_ea<4mt-pacHk7O4q>dz]7$%USVK' );
define( 'WP_CACHE_KEY_SALT', '^&0D]oz.5hWV9/Vx{,5l{TF0NXeyO+z8L.IDs`W!s5?kieL2+w6{0|a2@zej^V9l' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
