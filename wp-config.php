<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'portofolio' );

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
define( 'AUTH_KEY',         '7XUK?]pUbL*/@KT}#J)uNAAmAv8cO(oDd5x4UN#*RSm?huFAne!G,i{Q.bd[RJK=' );
define( 'SECURE_AUTH_KEY',  '[8]1nCk=$Bq8r#V}P$.tiY=<1uCy!7xsL:I_|Tp1?v;e%#!EQ{.#+c-}++iI|>Q-' );
define( 'LOGGED_IN_KEY',    'zS>Ug|8ENCiT$@j4sz6PU5g|XR0]brz11i%@,T_Bu~czeR2d5]o,:^k0qRWKdc)`' );
define( 'NONCE_KEY',        's0{9OLGJ=p7-&OgBup-:3HTPd@62W_e8FuoSr<Y5%Psck-=cywP]~(MHQ[%b6 yv' );
define( 'AUTH_SALT',        '(j}{J2yl0mt/S9$*$wFoPEP*C_:_u]2:QzKMmib-z^5d~ls`KTf{d!i2?i2w?Oak' );
define( 'SECURE_AUTH_SALT', 'MFc759eziilV+9$|}p7yNFz`LD(c%]w_Ic~TB!m7/:IRE/b+T`Pl 9;yYwhVSGK3' );
define( 'LOGGED_IN_SALT',   '>=04=j?rAVf];N1W9.TkL*OpoRR!,{@) .4i@b4sDSU{74q1V6]DdjTPQZ)qj/[o' );
define( 'NONCE_SALT',       'k,Ur-tUUw|];k#I@aq#9%^2(^ SS!E<kDM=H#]AJQ3sLu`LuUs[]ND^&WM3P~km2' );

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
