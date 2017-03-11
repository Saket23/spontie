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
define('DB_NAME', 'new_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Welcome1');

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
define('AUTH_KEY',         'gu20+mgLk;RJFrhSDVX tE*qFZMD4)q7+8~as*/I!WbkrGy(7s4TK>Q;t^LW*5#L');
define('SECURE_AUTH_KEY',  'f8XeAm{8+tde LC$x we|@hx<0l1[x~YZgjW6=A0nrsgay(r.bJ4,Yjm},q~y%u4');
define('LOGGED_IN_KEY',    'W<^O[~kt8ARWR^rYfi@$~vyw#q9Z/m;bY(n+*U?>d#%?^]%_/D.Ai*8YI!07.WO:');
define('NONCE_KEY',        'wT9)q=cM0|NIlB3ZbNlhU(e)}!c-xp@GD6sci}[U|$+k?v/KG%-Sly5Y -6JL8<S');
define('AUTH_SALT',        'LLwn#j;Jr%L}PI&)~9i44#S0@EZ)CgJPs^cCY%dY.BzDH>I#gQd?*HVu{oxU_MwF');
define('SECURE_AUTH_SALT', 'PI[^QxGFWkM!HVtaWx)>|0t?r>C @rK;bdKj&R!<[{3zQoOX#+K!8{sX8+YvWvr*');
define('LOGGED_IN_SALT',   'VbnnTA)xD..J?W*2I/j{x;x<h-0.Nx2XV4Wc?U!#86 fn}3OrI*@$yl?%{hMw0={');
define('NONCE_SALT',       ',r1:(RMKkAH#/}^oG1fE`R,BXqTeNId-`Fwi0#<W2v<WmSmvkm9q}~/.x~%9b_>-');

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
