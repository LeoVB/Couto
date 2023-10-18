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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'dTvc>F;>TT$v`+ho%NcQ8zFebXxTM%B((X?,O`v>:,%N{@yCN>.)UaZqk[+fNKPu' );
define( 'SECURE_AUTH_KEY',   '36&a7V4~~utR0.D@x4>_c?GVo~&&DQXJe`S#xf-g9G<7i{Mha[;zoI-`p9)996(^' );
define( 'LOGGED_IN_KEY',     'yAVl+nnWjnT)X$.bMrAx7HXx <]U}zMp]-3xTKtX9_fR3O&KM4?Q%A8%4P`4DCyh' );
define( 'NONCE_KEY',         'qbpfe6WB@q~2olx(^g.oap%rC,g|)oKpZ#3Bs+2#-)qmSGN..|k4;qe$(8C3 *:X' );
define( 'AUTH_SALT',         'L[Au7}K66qC+RYT}nW,8=7RE]c8ToL&IT<X^UD0xhf,{?K)*dIU}UEUm4NCmYcR~' );
define( 'SECURE_AUTH_SALT',  'oe`W&ZkkLVf4dFM]$xz7V!D%MIVF>Z{)pBm3(%`Zf?jcUPIg#(%@EOyY3>V%rMTF' );
define( 'LOGGED_IN_SALT',    '*a{cdPE0i>q Xz)Z_&c.rnyUC,!]IUtn.cW CS]XIt4r}:R=27~7K1K]Hl]{|>#H' );
define( 'NONCE_SALT',        '):!.&pVYJe7p24jfy(Xtkz@{b$B:2Id/UgFByeA_[:N_<@KG EwzI3GKS:`*=1;s' );
define( 'WP_CACHE_KEY_SALT', '^#kTVK)XOF?S06lbzOO&%=xZ;,UA3u2T~viUXbEV5T^:2L]<o+yaNWvNWm>%$L+@' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
