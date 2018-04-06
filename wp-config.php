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
define('DB_NAME', 'webdesi2_cholla-medical');

/** MySQL database username */
define('DB_USER', 'webdesi2_cholla');

/** MySQL database password */
define('DB_PASSWORD', '5;pP07EWfmOw');

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
define('AUTH_KEY',         'O<b?F%}^drhxEoUp[zMQuFcB9v~,!zftL@%Dg_x-?NI?L498i5n$?|4~fDoFAsO-');
define('SECURE_AUTH_KEY',  '+Nt-^Z(pe,)er]{ag}}2}/S5<gO7aa8b{hdIVZ_z CaZ|mm,.H<~y:Mv>!1$_I^:');
define('LOGGED_IN_KEY',    'WIO/#Zv9,gy9t- $Q7VTFo([!UhmB46kzqM0-us`M>c-yw]trzhDQB+KKwf5Qx<k');
define('NONCE_KEY',        '0%$4wsmYx~DF@UF60wHSGNuf#axC0^dXFEfWZl{gEV3dUeduBI,d.`Vk0=Q=r(Sa');
define('AUTH_SALT',        ':0]p|.MD8vC23`&|(2K%|UN=SLPj?lMZW:3P{ x6Ncv%Vhx..m:C=o!h!v*}#(K0');
define('SECURE_AUTH_SALT', 'Pl~B.0BH$6Idhla-M_=M)W~_Rdf#w?t]b$u_]duNj$@C.Z|8n!71OUQk&!}9JhIb');
define('LOGGED_IN_SALT',   'N?j-#2MOu*$+L5hMgPzoj/@{!Yi<S<989]/&k)4UI+slIRI1wX_DZ{Z]MU_|,].}');
define('NONCE_SALT',       '&Pyo[w~WAtgn0F7or6A;&{CJk90N[JJRzy&QnYLlCn],l?TgH}.TL@HSLD>zGK$!');

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
