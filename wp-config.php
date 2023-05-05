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
define( 'DB_NAME', 'bdabogados' );

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
define( 'AUTH_KEY',         'XQ_~)_<z8K|9F,$[/LeZpnzVRE>N.WSINE>;!vUDyVrI_MsR~=3}]+<CxcB0Qd}Q' );
define( 'SECURE_AUTH_KEY',  'N[&7 tHNq33x<Uqff6e_K$yAlmWFbEHa5Rs:m?x&d stLx?gX4CA`c:3J5)qK[sy' );
define( 'LOGGED_IN_KEY',    '~;wS.D!_8d8-PkD{)K;Cdx[OM8SB[stFBpM5_ }%A7Z#:FN^f4FTwpiGV`=6`/o`' );
define( 'NONCE_KEY',        'nr%-kI.X$+$r%(><-9qJ!YVD$}d8vU=?BCdFj`AE)Gt2R!Vzd2V9l-:,{XI~YrX+' );
define( 'AUTH_SALT',        '>ke0.K5N8Q9[[kHWq_U:5d{$PEH{-uqwj-`<MTA5NZ3~/I[!o,8gIbCC5?_?%{]C' );
define( 'SECURE_AUTH_SALT', ';tKte=MG[Uba1zAx3d(.pDu0?)P<u,5TKYJ M4ZYHz=RG(#ob^o#xzYkU]kwt -r' );
define( 'LOGGED_IN_SALT',   '$oZdSl*s 9j->Mfp.5oCJk!qw=EU=Wz%M$8Eb+wO}tZ<Rqzsd)0:Bi+lLGTe[t$W' );
define( 'NONCE_SALT',       '<eUP8NX-tp{h-$Qr.ghZ :Gz4~T2`nO[&3[dU0j:+o,L83N-q`I(KE^`xK$.hA[>' );

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
