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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'p,&;h3fFBU9)*d.k6^n4c=)tlx-1qa?Jk=JChk|G>C/`pwWpd-M$A2)lYa2ED)k)' );
define( 'SECURE_AUTH_KEY',  '}2+-3Y:bFW``2tq0p5Ky0&Y, }|9JucU,}uO2-FVlfMb/@oJxX3Am3tDQ+Z7{0~l' );
define( 'LOGGED_IN_KEY',    'O]7+l{duOUzrLLUaaI>O):cKnUbvTQ`v<<rJ]Z6?O_Q:)Bj)5k;Gih[e{ihpz@mL' );
define( 'NONCE_KEY',        ':d2YKQPNV(5<Fp?=j(n;U*R|dZthU^*/<;k@E08|#IrbB$)92Y?1 HS+}XaXW$T)' );
define( 'AUTH_SALT',        'Sz+J5mzH7sHqX(_tH!@(1:rCNDWc31|v@<*!}3ggg>9Rq_+x&vGk;WmdQhj%vaY?' );
define( 'SECURE_AUTH_SALT', 'P7(![Z/c4(yeMFNTeGSL_-2#O@Up9mEg=U2-44f3P+@#,ADqFmi_=7~[&n+fU]L{' );
define( 'LOGGED_IN_SALT',   '%b82U`8m?y.h]=_NM>7vs!?F,*UpG;077./8k]/gEBXoYUNY+  Co{=x?z(C=6yJ' );
define( 'NONCE_SALT',       '2*379.kOlwb:FRm137&7HweCLvc3R<|;3!_<m=.a=Y]q=,E%@:K;.xld2Aoq-$gp' );

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
