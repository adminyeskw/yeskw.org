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
define('DB_NAME', 'yeskindnessworks');

/** MySQL database username */
define('DB_USER', 'yeskindnessworks');

/** MySQL database password */
define('DB_PASSWORD', 'yeskindnessworks@632');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')S?Snzv_}mRoq7RFv,UC(V`NVU.Nx%:U/l|iHM[ETT(jtW=wl;#L3H<fJsu){r41');
define('SECURE_AUTH_KEY',  '+[7|nZhciUqj?V!6=Vka,&/3#Ro65u9:NTvfWwpnSqoW>[0}; V4e,A#!e4VO.%F');
define('LOGGED_IN_KEY',    'USnHLhadeKJ<4UM)].&]J0V/F=DLf}X`w&.Z:[94B%pnn]$fIcO(eqRQmFu~E.ge');
define('NONCE_KEY',        '-jAq,0 eC^;$_3QHcoL),?g/9TA[[x0  ^JZU5$a k;WlU6q~TRd]/1y?!{W%c8=');
define('AUTH_SALT',        'o+-Gd0HUB_(/n%%nog`Ui<X&v8#z~EC=9bs$E@.T254M,fJ2,|Vf7s_l.lY[B.f{');
define('SECURE_AUTH_SALT', '3u#xg5ER8f?,*D7aD,B:+VMP+f^od:Av!UP3bxM5Amyk&V>b_m.cZor7uG!sU4a1');
define('LOGGED_IN_SALT',   'jc]c|X0{G@xVAD1;/aTn0xsG[2wX MCyJ8JKxhQ s:01BEN#4vLMA[&KZYqW2kbJ');
define('NONCE_SALT',       'c=&,E#j(._MV[>GW=+ZfEI8RU6Ua52V]BimF_#k[JdfRTFt`4U8yYM %-5E^fAjQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
