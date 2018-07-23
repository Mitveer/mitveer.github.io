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
define('DB_NAME', 'test_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'r65W{Rv;mYWke)znl /NpV?~}jMlaqWtTy]h%K>7&,~NIe8:df/.T /Tz+?ixCTy');
define('SECURE_AUTH_KEY',  'B}n53MgilFCtcW7o`+s`E+L!N9@a[pjO1z1xrcoeutCCLFo5F{8=M}p5L2.x{HM;');
define('LOGGED_IN_KEY',    'EIunQ`mddHB_VxH);Wl7&-RTt+nxo!FH)Q{h0kv F?z=)shj89)DN$[-@G.}rn!r');
define('NONCE_KEY',        'MB+j=++gm>$wWCeK5Y9nkZyRGt?Rp 4 /m<dwM7|O6Ee~2x`I;!Nk6-1LzJ&%F.2');
define('AUTH_SALT',        'H8L.c g`@u-aGZmuUpMrAj98M>c~M/#PkXfU, e3DgDTj(U1kjyh[3/13r>%NKmY');
define('SECURE_AUTH_SALT', '8iiGBzd{^EYE89?YU5mrgB[ 6vb}`NQD@5SgQ Rcu4MVX_0L:y/rZh]PH]Lc` =}');
define('LOGGED_IN_SALT',   ';%39~DG::wD@. #|Y[*YvM8k@u)`crRHAUeC{|Yd+rZ=cb6_hTm|!1ye)A{4j~g3');
define('NONCE_SALT',       'mW}B}g^Mc;s$5^j{]MKegd?0_<5!:P`;|zFUyxY4^cLKN-gK,uM/U-#i>4A(rls+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
