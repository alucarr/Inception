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
define( 'AUTH_KEY',          '}yLx!rz5(i{L~jiQWq-Gw!NL$]?u?4guLVm+YB,IR0=uCA_4J*uXk#qV}U`a{;M=' );
define( 'SECURE_AUTH_KEY',   '=I,BQEqi!.anQ^]qQ2h*pjOZ,b7#]#-3a[H6<w>q5jh`-5=8~d6A&+f1MT*6dSj|' );
define( 'LOGGED_IN_KEY',     'hKINZm&(Lw~!#!Li|~}KHIg5lq4,-edJ@%5{Lnsw&vip@>MJt/PgZ8j@)dX6qWM4' );
define( 'NONCE_KEY',         'I]=GL2W2e3H8)g8r(ePYr@lK@?Td:-d4p71n>g&@bSD$p1SEr)Jo}$HMk1?sXQJk' );
define( 'AUTH_SALT',         'o?/mEr^:((?9sH*>W3lJ%WhhG5lxq!#(/$6wWBUYM<T+IQ(7j:69NSG4d|-1q_8R' );
define( 'SECURE_AUTH_SALT',  '8YP}o|JYlv!~;vvZR=@[oakl4N0p}_a8*ujbNB&b:z{dT_SF-(,H5Td,c1p8](U<' );
define( 'LOGGED_IN_SALT',    'XIwmv]JPVLkT<fLJ:Q60ha-|kq?+=>{LB_$&pp?th72O**/ROO>9q|UT~koDB[72' );
define( 'NONCE_SALT',        ']QWO +.<PU-ELF{4]X$?-2{;v)pSh4(P)UC/>;+nav68Lv{~[cuz!1kMKo_R$PIj' );
define( 'WP_CACHE_KEY_SALT', 'yL1v,A~ ~^ij7+r0Jni3XH4b90TPM|xB=E]ta5>$t0KU!>yYo}HFwF^h.,|S6&JC' );


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
