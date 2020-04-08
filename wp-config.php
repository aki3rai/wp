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
define( 'DB_NAME', 'wordpress-db' );

/** MySQL database username */
define( 'DB_USER', 'akipress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'september3san' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'P@.QpL+xjp!{i@q,l|5Hx_Y#5lB}]|.hjXf&QsS_q.rIE$pP|;^f~6Zl`rbm|]w)');
define('SECURE_AUTH_KEY',  'W=*{BkE%O%EgFrf@o?.N}FC}W~#gl|]bR(~i{NXt~03x-s2yw_$_%lIZ)M;1|BGi');
define('LOGGED_IN_KEY',    'Xy1$9H8_s,@y7F(/-6g Z;s0 2}8OHO.,rbdAPj4xRtPRFX -M:RtK;P^`6qn.z`');
define('NONCE_KEY',        'Ewi`:KcxW-5,Dh9Z#:`1Ovh{f|T6D<|=g5%dk:s8qrQgR|8>[Ghr,EZ>-# &vflX');
define('AUTH_SALT',        '#0gVY71XvoPEOr)+aneO*v$rf{^Ra/~A[A58*Z{j!P*(Ww,3d6PZ2hRCc4QqlC|N');
define('SECURE_AUTH_SALT', '_r!w7)`t+-Cgr+$_/G(Q?TbYGJ,B@lnArI* 0/z|7P9sfu.Yl %u{dJ|UF^Dlfgq');
define('LOGGED_IN_SALT',   '+oBP*#V/)/%cneW74ZjZ+AR5d?[yOA/NFLG=0vI8y)9&q#5DYO-N2}6xUQI/b~1e');
define('NONCE_SALT',       'ZN:<!e0/@-<KNs*D$|{gy^a$Uo,g4/?^}?Saa p~N!>>%L[4a9+yEpJ`7}2A4VAk');

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
