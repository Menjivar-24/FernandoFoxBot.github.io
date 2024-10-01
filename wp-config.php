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
define( 'DB_NAME', 'web_ejemplo' );

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
define( 'AUTH_KEY',         '@j_#X=>cbJ>BPgAEN03:UN4<`u<WPyoDxZFKsm?t[* TD6]ks&OCaw$Sm[ht3,+o' );
define( 'SECURE_AUTH_KEY',  '6>M%N]d5<ql:]9$U8H5Tj#5d!og);;Wu{B:M[=owey#O|7+w8l-/Y]]Vu!,(V0jb' );
define( 'LOGGED_IN_KEY',    '.[:AKbXWO^:FMj1h=#H^!tEeVXH9r77)g_}Hfubx34T]VV+>u}DCm6gv?< _IiT1' );
define( 'NONCE_KEY',        ',o6X[h$>H[ogvF#zDb/r$N=Nc>U.aI<s$>D>k7y]{@3f$:TgGmPe6DD~|.:J1U:W' );
define( 'AUTH_SALT',        '<2 Z?m)v=|V/Z0a 0Y)A-Lu:u)<Fs%re{`+ q@^2z,Y^;AV,I %W8l.& M8@[sn}' );
define( 'SECURE_AUTH_SALT', '%Z U-Rrt5?sZY=OlV]7{r?A#I=AfXcO-a7Jfp:oB( xNnC0JuJ]En}cGWi}Cs<kO' );
define( 'LOGGED_IN_SALT',   't#R:G_Z@;![y_8}Zn^_g4{a^&uzP&Pz=AU-GIP1.rEmK[aOQ}%k1);x I `f^%7n' );
define( 'NONCE_SALT',       'v(T]$L 6zt1mKy^}KG[yCI,eV%43Y87!k{))NEqC$;LTEoH/f*v-TNdRPbixx&CA' );

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
