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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         'lR_GP[YDai/d*21Lmh+,zyS$nRc.}C#5I U^XVVP8=6=AT$p=!pL|~H>~+ 1zB#c');
define('SECURE_AUTH_KEY',  'SU}}acW.;ph5YX03 ~TkoCV=XMEM:5F4HfN}ty]/l!%yvLKfG}pO%T=9G:36e)BO');
define('LOGGED_IN_KEY',    '*-ywec}g+]YQ+sMI/e;-Nju_-VnjL`=l6>7*|H2KPP3m[*9~epW16::|5);3rvu,');
define('NONCE_KEY',        '(Gs#uI:7&,!sARm`*QMB-8a!5{B;h47(8@pVc(% GCCd+ F,}=5|g[@z`%)1rPj#');
define('AUTH_SALT',        '>-FUG3`hSAWHB/4x IA5f9UDU??<8*vHO$p%/aSa;qZDz||efG-+b$8C!?0u,WHD');
define('SECURE_AUTH_SALT', 'yH:$&!C>584Du)F9lb$zO(ReTE[;oLl2|>>+QSG]Unyx|hT7C.6>YX][!*Te?x|Z');
define('LOGGED_IN_SALT',   'yXN (-}Ly9W9K$zg!~Yq-49ppd,!dKT59u.4G46;$c4y@kj.LmVk+0[L-nhP#-T$');
define('NONCE_SALT',       '$YK)sI%f5Q<RPW(^|Gzg?4_l01GCaqXI>>n?=Bv|+*_Isd]Jw{@6g3H@]R,]gc_I');

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

define('FS_METHOD', 'direct');