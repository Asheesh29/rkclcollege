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
define( 'DB_NAME', 'wordpress_start' );

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
define( 'AUTH_KEY',         '11w^ra9U`N (PAM8_#A:RoO|#SfovrdRO+yS?F^vZlf`@mykHLh9<bkfq0nnj]uJ' );
define( 'SECURE_AUTH_KEY',  'a1Tq,j%E`DTVIhY=JSBcAxri*YHN=4D!:w}xMy5_Xq{nQ9.[A{!AZYD.Ilaf,*U+' );
define( 'LOGGED_IN_KEY',    'FYn8{O+HCeb^d=D9/lMR#fZ~|o*JtgE<Jya)bDAS&>F&ncg%eh7IJ,c;M,;MjxWP' );
define( 'NONCE_KEY',        '-Gl1/(59FF|@|Ww#:YS]B_b.`]@ydE@oW&gJOdI+{.B;m7Zmiq)BNPt:Xuw]c2M_' );
define( 'AUTH_SALT',        '@r]n{!L-Z*X  O/FdH)MgLuno_BU3ghkH`*4d mpM2s~v+B*Z~p+hp=5O!y6H2vM' );
define( 'SECURE_AUTH_SALT', 'D2~XQ`/Sqwj h}tu}F=,fXeQR=wGqra.y)Ff1Ub$~k?Z=>atc(/@bb}p7ZO$xUIg' );
define( 'LOGGED_IN_SALT',   'n{yJvBsK5Xvcb~|`<%<D^%!{5M*EJKC#ffu%]?*m0`&Dup`n@|>9&AY]L.YN*B[f' );
define( 'NONCE_SALT',       '6(XW|V?8PC|{Q-=VFfR}I)Oc)Tb yeh2^~A=@zMc,f}oZU1nUTm]-h`;m2%nvK3&' );

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
