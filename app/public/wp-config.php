<?php

//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', 'vBusNtTLR5cXFIO1Gw1RUkYICtnPL82pG0jwEIH0U06ewic4AnYZDE0SHa7j7fzP');
//END Really Simple Security key
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
define( 'AUTH_KEY',          'f1aJL,~PH!1;yuN^B^?C&F+/7yDnx/4U}fgFTXXY5i3k*:Op;-~lwJ#2pLR`-D,{' );
define( 'SECURE_AUTH_KEY',   'Lf}#MwEyFt+(<<mC[D*(U^%3Y5+m^+]=[<[pHZ~,0u;v*@|1{,n/}q!5K=Qy,#&$' );
define( 'LOGGED_IN_KEY',     'zj*ca+?B1*6YoCi.:+X)7#;lkYD0`3VY^$XS|kwvvmxPbtpnc%GslyjhObyR0z-9' );
define( 'NONCE_KEY',         '#)R7697Gfln_S+*x,@u+}u$!@wj]I]0t)^,A#Sj|oc+SVG~Bm6|P#DAa qE0w2t%' );
define( 'AUTH_SALT',         'YfLV~[RSLc;|:^nFN3w1tQSOpVV%]we>_LB!MrUZ_2Sh!t~ZXF.zk?|3-:{Ol+.}' );
define( 'SECURE_AUTH_SALT',  '+ZrhB>ec]L[xKE<$i&QUaRzl8q@);67q9_yJu2?Z5KZw<Kl6;#^K>-9Oj`uof ? ' );
define( 'LOGGED_IN_SALT',    'xrA &~}4x9=a)H/*!fFm6C2hO@8@M/i&D@Qp^A:QK_r]oaMQNX3x]02Pb79[QoFK' );
define( 'NONCE_SALT',        'tI&9jUXH<E)8D}~Zc.FU?>1;jy4%oS$?F(zI;VY!;apnYqRbv|+LhVpBq4?pIlQ>' );
define( 'WP_CACHE_KEY_SALT', 'P#GQ&Jyf!zU`btz*mH$jmFv61|DUXJe[&#)gvh(Cc*N1#%YxUEX4m723CP+sfUq0' );


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
