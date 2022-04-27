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
define( 'DB_NAME', 'wilshire-prototype-db' );

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
define( 'AUTH_KEY',         'dbUJRS|1EI>@d/<,@Vkf|*GIhYX~ Vo2<zL0mB^NPYlh%uYXd?78*)aP.`@8$_&L' );
define( 'SECURE_AUTH_KEY',  'GyP2w{HsgxCyNiIAY6WrwILY;FSW9t#&BR2QrMIh~@fjNuR33C ^mBnXuquZOgkB' );
define( 'LOGGED_IN_KEY',    'm04(klWMM,&,eITWIhaKj$tO@*JEAPF#r+@<L_TYFk:c5O=-W^Q;3Alv(C*x*gI:' );
define( 'NONCE_KEY',        ',[7^*`%k&w*Phc~SG#@tdQFlHpQ|N7aR;$NoAd)BI9.2..tPQIGN|JrJTKG{!UVV' );
define( 'AUTH_SALT',        'A%fA%RJ;!F4+~zFT#[7rG,~~*6[fG-e# g:H qT_{?.Sf,&jMG 9vMV2Dlw=bE27' );
define( 'SECURE_AUTH_SALT', ',a?o$O p9#!{:9>jwaaK_ybnp?#Q|/$7m63)EnYfR]=*}GU:-oRi=0h l(!c^E*.' );
define( 'LOGGED_IN_SALT',   '[!37^Tp1Y:j0<jL?Z*m+1|jdxn&0xeo(he0!t*:A.LK#qq^n{g{_ $8U,|vrdBjV' );
define( 'NONCE_SALT',       '>&M7~rqV(MSg6VxDlFMVKh19ax6yxHs*r*:>H?AYM,?`WY(O>bj gCbwGur^9v@W' );

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
