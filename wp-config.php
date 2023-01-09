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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dwujezyc_efectivopro' );

/** Database username */
define( 'DB_USER', 'dwujezyc_dwujezyc' );

/** Database password */
define( 'DB_PASSWORD', 'uUKzpKlssy' );

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
define( 'AUTH_KEY',         ';lTO@Xb`HV<1>t|#>^|8rG#[5C]WYmucFmB1S!..8#Gm#!}uWCuq4 C6;1H9@_G)' );
define( 'SECURE_AUTH_KEY',  'Z!Gh;Px8)N3BJJ^ Q6HNTl;|I`,^4_,G;Jg@$XA/fHBSY,e-;(*e j({ u+tn&3G' );
define( 'LOGGED_IN_KEY',    'LkH+GB}uto7*xL]nW>c+S)Nfb>o1J&B)9/G(o?{3k~v$#$A*FBpra-xz6W{%Sa&4' );
define( 'NONCE_KEY',        '7<nPpbx2sc$v.[AhtA~+JtJ{r6!gYQ_nq}fqjnG3pV}~HcJKY-Hu!QWBt<0&B!Me' );
define( 'AUTH_SALT',        'Wszg>|Cj:?2?;roqkh+kjS^v{;<qjw(^Yg8=b}W8~q&Xpc=;*}p(lPN4JLEQI)re' );
define( 'SECURE_AUTH_SALT', 'UuRD-f65|>pMTe|8h,>0>0e}$cfehe;xP+f</7upUj#wpGw+DMk pPxsvl&`r0y.' );
define( 'LOGGED_IN_SALT',   'msmTu+JdklqhP[tW<U&}WSak`tLP%l8<X4aBV^dA4uSB#JfV2&8+G[$hy(43Uv``' );
define( 'NONCE_SALT',       ',@lg8t]q<59&_VqMNzkdC,0;f8l9NS&RQ5U(s8zN`5@fw(f=TbmATGa8i{#5z*g)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'as3_';

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
