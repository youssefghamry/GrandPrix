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
define( 'DB_NAME', 'GrandPrix' );

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
define( 'AUTH_KEY',         'f=5i)LUGN45cW;?J6kBy_n7f -gcEk_zmXAl)Ot+Zky$y?oQh7))&X8KLaMU1VG@' );
define( 'SECURE_AUTH_KEY',  'b9-4x.ZBE]Yd,ZcG]N1,Y>lpN?VlV]@;}Lr<^_D)N8@xZjDk_7XS(y_y+Ugpo3yE' );
define( 'LOGGED_IN_KEY',    'jG?&n9G][wL;h;wRZ+;nW}f{jb/uL+.Zp@)f{WR3r#DdV,b*IUT<~|#Yu9fJjV:a' );
define( 'NONCE_KEY',        '0</I#xA/8_z_GX8<y>7*&m#xGJ7q^kM4&1ePnY^8K>_zZz8mowOFv;9N!Vq1,L_x' );
define( 'AUTH_SALT',        '_wRu0V%=KS[?(cN5>?1~&wRHvuN@&Nq6)$9%7B^UU{?Vuk~<V^0]&]}cxJ}gH5yR' );
define( 'SECURE_AUTH_SALT', '&,x5& >Q+kEz`{<[%V1HWGsl7dW<v#R<8]b@ATP{2=9%<0>if~S4hC:=3N.aaD1Q' );
define( 'LOGGED_IN_SALT',   ']]uvHIa&kwR,calyE r>9k7yn]Q:TA22{-wiVY.ja:@_ Yps_/%A~_].kEj#]%l9' );
define( 'NONCE_SALT',       'aV}~!@kJTSwrkoh*^/09Iw0p-<%*9_hfQPso4ubK2F<);piK2g^]T=y[}r<pov{<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_GrandPrix';

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
