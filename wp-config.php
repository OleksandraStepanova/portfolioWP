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
define( 'AUTH_KEY',          '[{W/]6 @*0DS_>I91)02y1aI*AM9k9d_}di&:X!#Y8YUxgY$LURmRAN,{!==-5[L' );
define( 'SECURE_AUTH_KEY',   'dc;}EA72:cV!$:xn$)vR]@):KZ&Sjsk@GC]dxuUP-LJwQn4wh}hu; ePup1,EH_`' );
define( 'LOGGED_IN_KEY',     'S&Mn4^<$bB6Y;mb_-SRsUG5xh!W5y3xUmQCJh_MVQ+xY>L,b=X:z)W=6ob[43N1,' );
define( 'NONCE_KEY',         '.y:9tA7UofFI0pyj$,KJZ14ZcmM4LYW/[9aI1`U~}Z]b:?{7TmYbe4_/Ne/P~pt!' );
define( 'AUTH_SALT',         '7~$@U`#_nII#h9+L##u/<!<@ tz&LkIcpt]AgVHn]tXoR]y]L9UCe|i%H`r5IR$s' );
define( 'SECURE_AUTH_SALT',  '#9`26.V#?A^a~xX>2VC0mnf /C7`+uC<3$fsEJ<?SkJ{<D0!0@S!x!EE{n`VDdkE' );
define( 'LOGGED_IN_SALT',    '7sI!J#m%!tLzhii~AEi59~&lI~RXK=W!dx:ssd&s+<?$=d[:i=fkZf`5Tj*rok:V' );
define( 'NONCE_SALT',        '7)i+s8/`o>,GegUU_gT?L/-xG/%cdA%hZzQdjd&_gCNJ4zdxP=fL%3R>#drJ5=,$' );
define( 'WP_CACHE_KEY_SALT', 'xcmywi1rd?,(7Jh4Iq`O_S|O/E$IUmG2)6w1m)!~5]y@]73/Q; elI&=N*v]K7Nc' );


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
