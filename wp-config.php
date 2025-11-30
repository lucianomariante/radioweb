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
define( 'DB_NAME', 'u447671260_KCG5t' );

/** Database username */
define( 'DB_USER', 'u447671260_WDla2' );

/** Database password */
define( 'DB_PASSWORD', 'fU8tmXNNnw' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '{kHh^k8SV`Jke4a.-JX4I49Q=X|QrToz,*Q+fT+n&dj%%^4vT;O7&s]- {~npt2d' );
define( 'SECURE_AUTH_KEY',   'VCt|wAVR89)zY>@-(MGiLPptZq~$p9V/CJb1Se7;8@SMtB^405=DhKi|3_MrcJ5i' );
define( 'LOGGED_IN_KEY',     'h/aF=7VhMfUL.zxiE0R<o/@y3oY24b=;3)st*4J3]Fl_N#Dxz6ur|fQO[4nRV&t%' );
define( 'NONCE_KEY',         '9ZA]xt[2^T<bD$a7V:{.YdDbv>UZ057}!|!-]1Hd,- 2}t-8;kI&btU@7CbavKQu' );
define( 'AUTH_SALT',         'TX9(zdl+n`>MCE*lVw=G`$VlkO)Hi)nb3BBI|!qg$p,&e`#N/>X!rjj7AIOr>;3C' );
define( 'SECURE_AUTH_SALT',  'JuYWo;v>H/x+0Y(N-]?tjw{p.qxl7_ ep`>5S!=*{.I|MRQV>uB+%QT%=Vqy<FL#' );
define( 'LOGGED_IN_SALT',    '=pc~=Ec6*N,J`MR+H5cxgE(k8}|j.JCjU(84y_i,{u|U)(Lw_VPBQ,X NE1YK>/+' );
define( 'NONCE_SALT',        ',0zM+tRZzw8c(;:xveajn.GXk<7$%Y[aSphz<7`>XVL4jV0k(^1WXZre+h !B9s3' );
define( 'WP_CACHE_KEY_SALT', 'HzF `Z4o-sQeG:c<|xQf?W*6IuTgmm8p#*1*Tjd%QF<iOd$JisHa#&]?9z7TG2K1' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '61096609fccd1f8093e92604905d9f7c' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
