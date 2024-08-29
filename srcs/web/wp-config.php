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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'alucar' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '0(^0b0@svY#hV3mFttWXA`/HEaUe^Te@bmY%x071T+ff,e7!ncy?2HFx5FY.WBKq' );
define( 'SECURE_AUTH_KEY',   'Y5)5#{~I97yp~Ok2ZHAk;??c)H(1o:3^uhy-y+g(e /{p,7zvA@*+*{%M8>ze`bc' );
define( 'LOGGED_IN_KEY',     '`>f/P8,<m_t$9;@jtg1uKx[ftVhJ|HGHG`389Q%Rh@bF{OtZGUJq:H2?*Rp9nN2S' );
define( 'NONCE_KEY',         '3(K{,F$u))xl$$7un$#4;P)RC0`:_4$o3Is:L=@l+;U1 ]@M{-qoHJ?(GTB*_iIZ' );
define( 'AUTH_SALT',         'iE#t9:%lH`pp*/&ldGg25t0DGC%A=Q2>wE[[skbv)K:@X`o!p9X+eqd7%k8v=~T!' );
define( 'SECURE_AUTH_SALT',  'Vu%1Nx,*?`D|DxpEYH6n35GOK!7vf1FPwmUY{~^O>{!|wz(]6D~88dC9,p-xJ,u8' );
define( 'LOGGED_IN_SALT',    'RfH$rn. g_O<ENMRFG>N(q,o@GM%WT~l}XG_muE_C1.5P7T,R ~rq`eZ][mn-~C.' );
define( 'NONCE_SALT',        '(clg2)x$koN`zjFB/9+a?|>Sg#q7>>@ z!q/b&?Z#4<U$:KtetRfHZ>!1}9z))!g' );
define( 'WP_CACHE_KEY_SALT', 'steGswk$R+Z$9:nx%@N&RG6F$_wVOA{9|V:!CN#]N7U>>fl|XO[wZW~+QiDaE>51' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
