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
define( 'DB_NAME', 'astrospace' );

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
define( 'AUTH_KEY',         '~Hh[SK$oFeCu^(k9yS=ui~diI4Iwp*)qbmu:<4IiZ%}](0.3c$3B-dE7N=vbyXtS' );
define( 'SECURE_AUTH_KEY',  '}rXWk(*-:vmP%tG18`TPFP0vE$SGK.F@s}QawJoz12onV~=WHO%<891vop6ZQx.w' );
define( 'LOGGED_IN_KEY',    'E,&48+Qo[<l a_bNh7fsalD>[!r;3:cY8*a(#&+`~_lfQwdeP[0iC$|ZqY!6WqX@' );
define( 'NONCE_KEY',        '9<Z*r[=5@rjCgIwnwkc-tT4;vfG1xC_Jh(F$g{NIYW<y>%^t~zyO.[[K`,nDNWZN' );
define( 'AUTH_SALT',        '+/<6Wd&=TYmC.S/Um}kgr[BBHCHSCKkH}>AM`q~=]/lX}upd@dpK/lK#qBbtuq>Q' );
define( 'SECURE_AUTH_SALT', '3O 6REMov?5amE0OoGxImk.{q2fh7qUl;Uz!}B8*[S#p[o)&Up)Er6&g~`D_lq]X' );
define( 'LOGGED_IN_SALT',   'wIk(!,TJt+(fty9ch ;R>5Yrcs3RV#arkO|Wdhyk(}0PPDDD|U#=<&UF3Kf*)O5S' );
define( 'NONCE_SALT',       ',wDUBK-oS@_cw^1B@5#)?Xm?$eouwe=XJ` 7lU_l9Tq/D*]m.Cv)vkAtt9ceMWTV' );

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
