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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u716417840_sppanwala' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         ']jD5AV4>N(V,juvrfi{Kp>Req]HQNsjCQYsPx+S?{}u<KS)]VkE-La)~sX3[,LT{' );
define( 'SECURE_AUTH_KEY',  'z6OL^@!tKxxq@^r1|a%._W_iPx|yD<lRFoc(RT#g?q-ef@:S-t_,?:J.s]A+`jlI' );
define( 'LOGGED_IN_KEY',    'mAc[qD0-d/>z%y$9vQ~qNv8glDw=Yw+~S6ee?n&ei[@Y.~7^LQV1a`7[tJW=?DG(' );
define( 'NONCE_KEY',        'f.7gD-2eH oc/lHkjb6,$o[[vX=QK5ZQHR7%8)3201oqXi&C,E!)T&15kj8jFm}i' );
define( 'AUTH_SALT',        'V%qyEu&/}q |Xv^[T=qbESnK#v}BI(1 Yf=A`1/fu$%=&):JSg_56B`4 /@Y(.}^' );
define( 'SECURE_AUTH_SALT', '>/8i$fOfPqsN>U$%7e2_S#$/{=uR@e/r=E9ut2iaRhx|t8TVQVxnmHR)#:-4z?Hy' );
define( 'LOGGED_IN_SALT',   '8:i$U+6:Gq-Vt65{RmwV;.m5:YN|XQ?< ?}Z]WZ8r#(YplO{qPlEBj*$rYve&ui?' );
define( 'NONCE_SALT',       '?6Fo(&T&Dl;e{RnYRyA}7lWzHMPL0OIZad3o_[rM2b6!{ B_T;eKWC6)wRT4JCn,' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
