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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '>l!(Vxl _-1sMOD{fo.A]=RaD ns$3l9c;h5We+](5W[.b~>_CdpPW&O^=AT`j1w' );
define( 'SECURE_AUTH_KEY',  ';?PJ7~}{X#|!qh8LD<5gcKrZEF<`NM;:b4ybe/{)7]e}Jf-:/d|%%AWs<>=S!d-3' );
define( 'LOGGED_IN_KEY',    'Yn>R!&-92$o5FK.FA4+[-z;{huc#(>48)+rSdhh{,@BC#u][lkhH0ycb2V =rlzq' );
define( 'NONCE_KEY',        '@d<.+5_$JIsQx5HCBvS.Z$zj@|*EMuiXH7+ekF##)ISp!]tcsZEz!4iO.Gg,::~c' );
define( 'AUTH_SALT',        'wGZ4^qq]M4#uS.[c+c,(E!nK=kq&[y$?e,#~(K2}{j,+neVbk|zR$.vk&_Lxy9-x' );
define( 'SECURE_AUTH_SALT', 'J9i$}>izB=,0B(F^m}L^iNR$Ab64D<aAjB$e.QB)m;~PBk@1*W_dP}KG:X` ~yz6' );
define( 'LOGGED_IN_SALT',   '7^;xavDsGW?X2zdp7<hcs1Dq/4Q]V)nm60G{~4,eH2!J;m?V5$m)YMr3i?y_3U<+' );
define( 'NONCE_SALT',       'Mg:JG!b8qsJfJ,-D6*E7i-Dlr~If6=;%R*31r)GV:Q9@|K5Iu!t9XydWt%:U[ `?' );

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
