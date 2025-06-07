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
define( 'AUTH_KEY',          'Bq!$LnIaap^h@cTu_ve#* HYqDGRW*U/KN;J|*QJ1xcF0wCW/E3jKC}}ds}r(lFO' );
define( 'SECURE_AUTH_KEY',   'MTLT3wCX|E.sf.G4}djk1cr}s`!XGaf)_=?w }u8.1o(LE802)Hd:)k#q<;[/q$=' );
define( 'LOGGED_IN_KEY',     ',)uN*K[QvIsz)&)<E vYH^A`;E<BTs@qO./0`M*4~ 4a=C-~.yCwk[Hh Oenti>H' );
define( 'NONCE_KEY',         'x0h0wTfjbB t0U*k; lV_vd;_&}MkqvH]meGGX,E{*I.T1x6vD5Hn=sG`uk;EF#`' );
define( 'AUTH_SALT',         '-u6w!eeh@d*,?.e,oTTxaNZZv>9#~D&`vn2li_p>irouw@v9CK<qXGEk#2Fc$Y:R' );
define( 'SECURE_AUTH_SALT',  ']g7/[5~vXG,4tcah#$DM>g-%-C7Vw;#$;[AktK* 2~2&g|K@gzubui@v%4COR]kG' );
define( 'LOGGED_IN_SALT',    'IgxqLVvwc2+.q^$)?kTWy chL/Jq5PXI*TE2Ov);IUir{uPDxI:Is(g&O@7C.6P}' );
define( 'NONCE_SALT',        '+%<l&RL9Q0zZpe0#vVC=mhGn,[-Q1puNozf0bn-<1&hmE}cRi5r-A;&2;-253t7%' );
define( 'WP_CACHE_KEY_SALT', 'zxjaa2;`SKj(n0HJiJ)F%>oe]wr4`x:`BuoEUM(l2Zx-bI?Mv (cjXtsuB9-6]>p' );


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
