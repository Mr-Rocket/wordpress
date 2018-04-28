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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '~TYPfTgGVaxm)^N1(2V(Y{*Q(y*11:|PSz_yKltx[jW&P&ee#.i)Oq4aX.6a<_)^');
define('SECURE_AUTH_KEY',  '8acO`[0$@`V L~v=;$J9R*=E,6?dAwP..=O$CIKTo]IkK=o*6*y6&yI{/4uyYff?');
define('LOGGED_IN_KEY',    'h!&na#DR 7*)T*/fP|%`KyVp,iaRqvalaYGf_sxa;nH_&&J.54x?7lq>~qoVXLBL');
define('NONCE_KEY',        '/9i:A)=EE;Op+rFK6-]bE_6wuWvK0Lfs3xxM_C*.$.rV3|~Nl;^yg+yZvk_RnO7}');
define('AUTH_SALT',        '`Q[!Am]I[HuTJfh{<B$Ieh|]B$Vc?>gviIO7BR?3qglGZjZ|T9Xi-,^v CxwzC{O');
define('SECURE_AUTH_SALT', '6O=_Sa?A7_m6sk|x<_cJd1gSb5@(l|t-:Yg:Kb{ If/Ke]cz.B?!kfIAnadV7z/8');
define('LOGGED_IN_SALT',   'JlJ~AHPMOG9>T>,)Ve$g3$lt^rM&dmTG>@}f3E5EcYt{4d O]mY;bq%5[UnAL$$_');
define('NONCE_SALT',       'R=/D>wa=km0jb?R0fry6/h[AoDf9]:NGL6S:s41m<|w/sdq*Dt/mx;gkM+mb[=N5');

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
