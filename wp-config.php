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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cardesign_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'YWdH9EG<kn@vpAgW7+{(:pzw2mb`H=l#,fcA$khv@<UcK6WlrbgjbXZ5P^|nSe,+' );
define( 'SECURE_AUTH_KEY',  'z}KcT.+F|g>{l[bu|s1ucy^gpl KjA|`xpH36DbU>i^mr:&HN5$$t<n7:g:se}WZ' );
define( 'LOGGED_IN_KEY',    'i+4l5<C})D-&d3k5v_-I}Yu]h{V$PYz%l,ES~0[L6S]nNMEv=VBx[9T`@|GM ;C|' );
define( 'NONCE_KEY',        '68D~,Z)BOYtK]baz+rJJ7w#Q35V>M>e/pxA>pI;hu1zHS^BH|2|4~zRkLapp$2Ct' );
define( 'AUTH_SALT',        'ByrW*DKZ~)seYv m&VXtjd[:V|cm& I0:r6FYuXCiKU=~v*m2}|!7Bze5![#r>MV' );
define( 'SECURE_AUTH_SALT', 'b^_}h@N(489Wuc$3-wj~svsrAAU 0|_(>yNuNA@bYdW*NHAcB@d`!LF`s2{ea/f8' );
define( 'LOGGED_IN_SALT',   '7a*{qBUP5G5U{-@OcL&kJNa`r+cR6gih(*r..Z^)~Lv;Z6wn1|?%<V;5;,7]chbH' );
define( 'NONCE_SALT',       '{G0Y5*x4CWw6f2QI7~=,kSUN6}u;9_p9wuZzUL>eg+X(Z?>Zk;(+`2z&k5K3S&n ' );

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
