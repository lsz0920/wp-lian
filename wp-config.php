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
define( 'DB_NAME', 'lian' );

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
define( 'AUTH_KEY',         '1_Os%}R%c{!%:wu5x~ xK}9`^w:s*g/@%?Ip;boYf#AL E~tH(}w]mY:Cdx8w[)%' );
define( 'SECURE_AUTH_KEY',  'IV&W8]vYp8XZV@JKza6)9OA$]H~%aR7Pteb:l8k/^CCCQ}REH(uOcD`Z$IW/FuB:' );
define( 'LOGGED_IN_KEY',    '{W++DJMl{XOY71N+>_jV9y;sx>r{548e~lYH&(psmCioO?Z|GO^fxFU31%9g-{ig' );
define( 'NONCE_KEY',        '9L*w`D7>GE=vBw{;GW, ~9)1TW0DxcYi^+d4MB}*G_nv4})i7G~ea@#gByCzqeK_' );
define( 'AUTH_SALT',        'm$elf;R,V m)>>rF8(L<qvkEum{QrC^y[8j|x&Qrwks~pK2K%dN@^k#8-9w}!qh&' );
define( 'SECURE_AUTH_SALT', ';{>r6)&rl~03Q)7zR~g.,2keqazB@yA/j7t:CoA0 B6R@W$|>Jk{2a 9%(R-#A|m' );
define( 'LOGGED_IN_SALT',   'T`3RaW%xa~.4{KjL|(16nr7}Ar~!+Pv^?VcitT`{qm|lIa7(s)Dr8+x^a)FY~L7p' );
define( 'NONCE_SALT',       ')}Z-sjWi;O 40a*;u+A<T*}/X+(f,w//[PB)00guA~~:[1}c^aSlqUC^@VynA-lK' );

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
