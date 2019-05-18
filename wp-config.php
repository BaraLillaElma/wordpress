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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1:3307' );

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
define( 'AUTH_KEY',         '@,JSCbAF-yJ]5#A,68ycaxqk$38o`ms*m%86?*iBwt_fx=|Lo]4u`94J8+Ca/k@+' );
define( 'SECURE_AUTH_KEY',  'OS] Z 85kSRRtkBMmFa//QD#2k!dYRytM4uvl&cD/bn!>8Nqs{Ztp~@W1hb_|Z~O' );
define( 'LOGGED_IN_KEY',    'U!E|eJ~<E*c~v=sXtIOYys,N/Qs+jFxx%X;+8S+M{E|Z)gZe*^&Xb{k]hziLfu9(' );
define( 'NONCE_KEY',        'zRrhH))V9=SXy5<7[VELA.)((VXg8xpTZB1.0djwv^Xk8xJxlS8!V0n]9@u37?lp' );
define( 'AUTH_SALT',        '?u$+F]r^i[!Ov!!b]>L_c^6sB8yRb)p:5~SI!/a}|X~>^|dCE~FY9L@bgXp-biw,' );
define( 'SECURE_AUTH_SALT', 'K$HfW>O^(d_Y5_Z:64F1gVWCQ&}^8rinCTqwLq6^mzH(J))i[VA~hn?D~?,Y?xah' );
define( 'LOGGED_IN_SALT',   'hZC;RfzC)}D4.90-m2gN<19uq(& ZWjj2<,q1]>a/!fh`-Q`uHO NclP-6<t|1yO' );
define( 'NONCE_SALT',       ',A@:Fr?6PP-Q/=%5Ifp*} }_XFI9]cyRacD)w_!G2DQ)[T2LRQ2LE24WV;W,/Z%=' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
