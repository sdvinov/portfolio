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
define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '~Ls+Z$j-ufq=~wA4pEi(b=dSs(s}S7s93zxZ@`Tnn$MYl{Yw~KmVXG@8YYpl*;0^');
define('SECURE_AUTH_KEY',  '7*I:)!L%b_$P7/E&b+vxnm<G+0He4oo8fxU=7T!Ui9L+!|3u]QY=6wXd5^$Pg/R3');
define('LOGGED_IN_KEY',    'INCS#ajYa- g;Blj/u:G}k=y&,]1lhFw2p54QZ6gscZGEWyU#T+_t>8ZL&LRHODA');
define('NONCE_KEY',        'jvhrc^aPWf~),0CWFs=F..}r-|LWTja(!-HB9KQ-@s5W-EM,Dd:N*tW&-brwS.DI');
define('AUTH_SALT',        '/R[W4-s}qZX-{gXkMxQsaSce}t1[8#%e2=Gh2@38}-t`hf{a6G6s5Z7uDkx#BO9h');
define('SECURE_AUTH_SALT', 'wI < 0a=.l}if+SQ[KS/*Ev5YCsllW`Nnq*&xFcQZ4fqrQiETT4PcYN7:?hQujTh');
define('LOGGED_IN_SALT',   'kSP$r|2fCx{DV]T%.d$2a;-;MpPNKnE!6@cmk]JzzegjLsflTX?w?dyCxNIFI+TR');
define('NONCE_SALT',       ':ERk^_=$v#g]T^t~gMJPPt5zp,dS@q<-Fd,bpM<jea,{.t/RKH_W$FWgk`:FI$U ');

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
