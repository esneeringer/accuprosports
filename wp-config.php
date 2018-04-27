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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'scotchbox' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'bOL+.!(E}FRoW#3I|LF%+tmUWg2tMA-mrrq[J]Y+G~_(XWSLEm:<^<Oh=zXQ58R5');
define('SECURE_AUTH_KEY',  't>/?_l-~|>Jv0fYwIg!QrJuX*KRc3g^zP/xqP_&#PgiZwgb;!Mr6r6e?^O|WuT!^');
define('LOGGED_IN_KEY',    'KkNY- gn%/q>>-+E#K=`/<Ie5G6+Iw!}}wbunR-lcr~IS42(MPO#cA7suVK1x7C(');
define('NONCE_KEY',        't@x`+=F-1rf7l$97[XV.E-yBO%.9G63U+I|T(JIv0zR.R$3N:LP|F^[$:i6[^ ?w');
define('AUTH_SALT',        '`q$-.Z++K_%vswqGQhB;)|m:Y,Kyis{8!8Q/B}X(+R&x-~KnT*(B9+U)#ZM-eUg^');
define('SECURE_AUTH_SALT', 'F>3nM)kn|0jxGL-+ZR-/2w0:2Qw.BiQExMa=0TP1$7L~2Csq9goR*sV9NvB#{1f}');
define('LOGGED_IN_SALT',   '3u}YS:U~X_uXyD/-Bn t=*=y_wAS;,KTshaRq5Ogum5B@K.hB])FZ}Mw <ZIiOO#');
define('NONCE_SALT',       '++)pqHFlCHtSr@_7KJBhW+Q/wO!Zt]-_d,In7aGJ&;|vNHp:ijB,|C1E)r?->i|!');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
