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
define( 'DB_NAME', 'mywebsite' );

/** MySQL database username */
define( 'DB_USER', 'luka' );

/** MySQL database password */
define( 'DB_PASSWORD', '48VKpjLEQUlbPM1G' );

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
define( 'AUTH_KEY',         'o>;/7IXbSGFI:SD&:|9+:1-0A_5iZ_Bs8e?tJx0,u[Yo+;<WMzpfOX297!t&GF%Q' );
define( 'SECURE_AUTH_KEY',  '$WciM@_Xrvk$6~@o?vP2~Mb$88w7RK/k0_WJO_7|OHJK.o?-7(2wh18SY5Gpc2@J' );
define( 'LOGGED_IN_KEY',    ' AT9#QN;=!$Yj[Nzcjj#z^Lv99pLKQnSKo$2PlooS6ImB8N5~ktxV*ABxW[(kO.l' );
define( 'NONCE_KEY',        '0QOvD3|BG/00dwC^9VUG=l%_:5?tq>.r-YaX+E_jg$-5G<HVb)ZL>Mb+{a>1IV>W' );
define( 'AUTH_SALT',        'SxKq`zbla0+/)3Opj !&p>n>>SV&iCCY}=)Y[D==,S#^ZW*UfA~YgRb=tI~qRKCR' );
define( 'SECURE_AUTH_SALT', 'cofSG6j@`[4yz{$6Lh 1?5(JyMAkb:]?:y537B,<Y@/CQh784itbtvKVAaozJ/g9' );
define( 'LOGGED_IN_SALT',   'UFv_k0WAq>hxW/KGVM*z_I6TDV&t][*`SE~rQUM,`p8Xn26`B>S3hWhmVAjX93_s' );
define( 'NONCE_SALT',       '_sYJQy8`zKApM{t@>^MNb<4]@q7d]D6Xbj(_7%__SS8H(vUi=cD3Wz6Cr^)A%#SA' );

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
