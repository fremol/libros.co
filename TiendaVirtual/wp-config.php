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
define( 'DB_NAME', 'TiendaVirtual' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define("WPLANG", "es_ES");

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0P^j0KJ/7s^b<e`QY(HyAu*l(OL<h3UN^d`XoF{af1drOiQ]mxvY3A;6BPK!6w[f' );
define( 'SECURE_AUTH_KEY',  '$_{1JB[A]H~s3R>)iiOu2w=gm<@5kexP(rP&>9Op+r]aU]{Zx|j0u~)FvZI/G41+' );
define( 'LOGGED_IN_KEY',    'CA-W*.X!hckfR3La=ch[OkjD.}oc-KjZkB|3#R5i?GbcOunU0GfPD[N=I3n,clG-' );
define( 'NONCE_KEY',        'aUX+bFvS$qE#ZbC0,-7^6D$OL<WT64I%W}HgrEN0JvVq``jnl3<eJlM~!}&_s+Lv' );
define( 'AUTH_SALT',        'v*k9 7:eLq*_NZO}w[aX3`rC][faCM7e%i1V5U($o1o)CflSAg1}|@z*@wIcvAnA' );
define( 'SECURE_AUTH_SALT', 'Khu7v(q?_JtP{}-aAHjSrJ#R7XW=>wbxRg;r ;xZ8qV)c~sAme(V`jbm45CA-%f8' );
define( 'LOGGED_IN_SALT',   'Sd&+>.Q[PY7V6{q>|&Mi>rin_`8`D{v92t=4meifSqiM{A6i~xcB-.iV|EyGm1av' );
define( 'NONCE_SALT',       '?ec9+*[v:FqdK/Fp!u)>!xjN|4:|SAPTb%(G#x=6.?y30Vqb*wIXEu(88G4*G_fi' );

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
