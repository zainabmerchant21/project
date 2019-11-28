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
define( 'DB_NAME', 'krafty' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '+*SWMe^KlA*Wm0f4]{i[Ii(?jK<ajO_bUiR+A,dXk&DDp5==V-Z<7-:ugsDh8_Ua' );
define( 'SECURE_AUTH_KEY',  '}RC~C22`0|M6F_nPn0&+x&uN:(jH~&;w,XPAcI80Z?Fp89zF`|iCi>ZM$Fk7eLtR' );
define( 'LOGGED_IN_KEY',    'ECO.XPa(Mi=k RwTr}CjWog;U$n-]g;Go&pxADVmF2^MY]CVd8CUftY_nMXPvf(t' );
define( 'NONCE_KEY',        'cWU@&2_jx,==6!2-.uXd%zU~3g3C4Gyh[evBqW.#6![ZWD#X{AQ/tH^g5pXCkv!g' );
define( 'AUTH_SALT',        'vlX~}YxC>J@_C$*Y{UQe)Le}33yE!mQ66WTYRyK+wCtbCNf9#9<;%e$xb-3gHw6L' );
define( 'SECURE_AUTH_SALT', 'AJ&/H,p:__z7AYH#_Zw)RP`Nh<DryjSeItLJ6y`c9XRyvmM0-gTN3GUo$k,Gg<wx' );
define( 'LOGGED_IN_SALT',   '6HS^lNd#Y[p|=@;`uE@PouKMYhC]G+t]UVp*CnzQRdYNuhwbWIfNjSN?]%JGA}I&' );
define( 'NONCE_SALT',       'Iaoce4O<;S7.gp:9h= ^Ji^M6jA_U&6q*@mWWcvH&#Kcxn=soF5g+>CUR}FoG$>u' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kr_';

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
