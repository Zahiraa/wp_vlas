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
define('DB_NAME', 'vlas_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'dv0(5%1U^W%8&`4f2M5d6M&3[1zgM5[rB`<5i Z==e,A/6-UAwUfJTw VRC3*X55');
define('SECURE_AUTH_KEY',  'a#8H]VQLe)Qr?ywc~I^WF_Tye>/T33$w{(|>cKwq{TC30Lj!}ILC;F`IQO:&btu+');
define('LOGGED_IN_KEY',    '3G!hShogQD:tV(F1y/#rpIK5G|7,=ktlq~A1%Yz`K@~i_{T+AcAnJF>+mtqUneqP');
define('NONCE_KEY',        '#0:dB,NU8nbhr/_&qLftM=em{P@6B->1=I*>YM7f-8E?IemQ3%!*EwH)VrLYZ^<.');
define('AUTH_SALT',        'Nog&Kc+|!C#*y5KKmejI#Q)$yP24F5j,bM0GdF8&Ky+V xw;i0v&Ho,F{uf[zi{l');
define('SECURE_AUTH_SALT', 'DoBP=P#oy/vAoo@,KKTtd_Zmb:fK)(]HsOzN`TCc^7%=c}i6$,DWj5S4/wpU(<y4');
define('LOGGED_IN_SALT',   '6rr$m.Wm|g|Q:FCb$^a~cA+lq=tFHNt4I V(VaCP8bjU,}=DxNyT#^[{`,}7VE_C');
define('NONCE_SALT',       '(a  F3a9q/Xg>/V&23(vAY$_BKTxTm9)x2XMB>G_I5:hl?IQ+l(WW]>Yp/}*Mopr');

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
