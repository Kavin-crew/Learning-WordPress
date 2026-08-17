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
define( 'AUTH_KEY',          'fg<yR,})u<[zP&gjMl&%YZ;rLm!cAZ>t.b{ZG00e~[bSn!Vl_V2K fB2Q.o(y{P=' );
define( 'SECURE_AUTH_KEY',   '>~KM1RrY`KFMp[]jMJD${`a ^`{j~e!p[<K]{b=9A_:5^jwDu*m*L]Br:wYr%-{8' );
define( 'LOGGED_IN_KEY',     ',qj3Gt,$h P6j_X_/bUowLv(BY41<>3~LH7?|Uxdb5&h5?zK:OmkcS[M|;6}9~E:' );
define( 'NONCE_KEY',         'K*e85H+6UNUthX?CQAgl sXw2)6}|W2}X6(?g#N4Dbn9U~Y@C+>lmb^uC+2vqQ}!' );
define( 'AUTH_SALT',         '>?nb#pesP5>g<g9?69hpAtM%]fsw#`3Mo{g&ICy.[rNw:0TwY#Y#9b O<Nh3Dus^' );
define( 'SECURE_AUTH_SALT',  '|mo66Aq,iS#kfxP&oY4q~[$ph4rx]OFPLDpffi]dj>f[Np@&Xrh/fv235yd(}8Ki' );
define( 'LOGGED_IN_SALT',    ']x-21ecwe9:c&T}JW2fGg7Al<W![y*U4sHQpDXe%wi&]a:|Z;}v._tY%J)[Qy$Ko' );
define( 'NONCE_SALT',        'CtgC,ogplVi+&GKykes1tqMW`]Owkyjp6?|.U-.+?~R0$5y65XP[|G24 %en@qb1' );
define( 'WP_CACHE_KEY_SALT', 'mP NyHFy i!A_bW6qOoelsHrtVWj576c`5I6<$%GYxDMAHAoHm++J4Flh)5rSq!_' );


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
