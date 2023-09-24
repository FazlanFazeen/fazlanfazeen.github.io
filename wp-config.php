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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fazlan' );

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
define( 'AUTH_KEY',         '6 c7O(w#7uNfqdL_o/q2-Y1x]C.5`#;kMbi&P&W@k{S`eVZx# }_8q+Z/hpmVO^A' );
define( 'SECURE_AUTH_KEY',  '&QV+wd;)2Om|YosfsO4TWjS=<yx]npBX`xRxGgA>@`nb$L(B)r.a{1FG`kbobqd]' );
define( 'LOGGED_IN_KEY',    'd-.Q<s_lWbN;0v1$OL%:MZ(4,Xvt=!OvNA1n{@^Ua-UU/l<Y*b-<d$$AzdWmQ7bX' );
define( 'NONCE_KEY',        '.ov%Ilp,#zRbD#FMsVCHH!LJwfiQr;v.2AabPB9l+M$=;YO>~p-sGB*;P8`(M/2A' );
define( 'AUTH_SALT',        '8(k@[o_9$Eq;mH|y8~(YT6L5+}^`%c+QhM*ZlXjjwq=R%!<(e$9ri!Yi=f$uOaO2' );
define( 'SECURE_AUTH_SALT', '.G~]k/8EEDm0d?Nz_qM3<%}5p2!9eJ(tc35;YSRQ!Y3<R^ef5_e jL@;Y3JK0mXT' );
define( 'LOGGED_IN_SALT',   '6Nz4~ly[%WA-P{6Qj]KLtqZJT|^Ef:5nF9|1A9<zo5=vH]DzRFS`pW]/SK1XUrqD' );
define( 'NONCE_SALT',       'k&-Qk]xN5D.JYA],m.sLFN.O^y%s%}iIC<>FQi.hq&pM>?)  An%.m6Gv7s;mbb[' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
