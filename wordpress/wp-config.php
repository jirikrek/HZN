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
define( 'DB_NAME', 'mafianjechyt1547' );

/** MySQL database username */
define( 'DB_USER', 'mafianjechyt1547' );

/** MySQL database password */
define( 'DB_PASSWORD', '2*Prdelky' );

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
define( 'AUTH_KEY',         'p-tbTc/rL=54~nJR6&2Np#.Mi*9Ox g{41 |X|h;~xK!>pV0Fj*#zwyMBUu>BvVA' );
define( 'SECURE_AUTH_KEY',  'tz_go%Y,&-stWn!<^0aNUI1=F_+8AH(7A*)Ny7cg?w6;)h/Uy-enh6&`|KEyFy^ ' );
define( 'LOGGED_IN_KEY',    'bO+@`(Q9z7gl|b`lehM} kZZb9zXM?N=f,5zkq!(t%1[j.RbQ:s|9.DwWth**.[D' );
define( 'NONCE_KEY',        'SI/@Zh^V>s*#i6C-z:efxC3`&(NJo+FNkoH+$ku_lr4BuU{v$;/xt|z0Fj+]+Y[8' );
define( 'AUTH_SALT',        '4dtPW`Iir5$sH2wELBJ]8p.@;#ch}bNxc-`M[_TZrRcy5lLiS<<IJfU=D]<]/yI5' );
define( 'SECURE_AUTH_SALT', 'M$idAU+<2/2~hFD?>e&B$zK(&YHBj~Aa#>@xUCgs_*g?}($KJZPA%B1h~Q1Zngr9' );
define( 'LOGGED_IN_SALT',   'x wsXf@!djo:(: ;xV!/_L+}h=nfHroo&Ei Ixu1H#f_e!.GS^f%m=IX/lC,AH%(' );
define( 'NONCE_SALT',       '~A^hOO0!nK6@R2p;;1]ezxkC:dtLMP~(6G|8W4{xC7mAa@P-(c?=0jHEOcIdf7.h' );
@ini_set( 'upload_max_filesize' , '512M' );

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
