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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'f46e7630e058ac31c0d4c9c413dfd7445a097d40c58111f4');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '|~/eYD|:6l_gAMu@W8ueR)l|I31BIg&0eG%<X i8@cl2f17AS2}.+idXjpjUC/2N');
define('SECURE_AUTH_KEY',  'K& p){3-9*VhOGO$&3c?vF@m,tv8VQ=2mB<KC_5t6#4xGMh1:}/@)IjKT ET2B0c');
define('LOGGED_IN_KEY',    ' Z9cU09gF(7=&d@M3sSSAUt&vN.^.C4KN-exCnal%)W7ZE-:9{/<U/RM{tWDyp5B');
define('NONCE_KEY',        '[z-qp$kBq>YQpEK~D!J:7hto2iH$glF!hC>`&$71;KV*[ah!%.CDkFJ<ZRy?n^q<');
define('AUTH_SALT',        'rkjv&J{:?Cg4BMqEt6`k Zf<j/n[mYKx3yb]Qd>*dIY[GIxbbyeile0caHT#P*A&');
define('SECURE_AUTH_SALT', ')Au[.HyvEA^ufo_J/C2MR`^_r&)y1Yt9|371m =An=CmE1tSxw:u!t_GMwQLvb&>');
define('LOGGED_IN_SALT',   'j+7V%.vodsAUWuR/kOp i5N?i+)NInZv(vPcoaZNn7y+@QFU#lV.b>*_U|353F6b');
define('NONCE_SALT',       '.,gk@J#f{DIJ/!T >uaxd?xJRVxD5LG1JQ$WGk@&!=Gj[&IX}-7,w@i/j2$,G3(t');

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
