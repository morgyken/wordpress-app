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
define('DB_NAME', 'homeassignwp');

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
define('AUTH_KEY',         'Y<nRe>uu9@shu[0}CP%H,O&eDN>|#Fe s0QHX7P~s7|oMO4l=3ZzQUp5!x}5r8?3');
define('SECURE_AUTH_KEY',  '5u*[]RdK3ud<qhd`&P$.->2&vnPl,{eRT 8S[c>C,pDhdy29Xu,A`6HtUU%@Xw(!');
define('LOGGED_IN_KEY',    'l2W9;Dw%!&{S-w`P-fQVmOv-wCY+;+)hvKH$fn/S//LP5@@.:_;1yo]>+q/VfwN[');
define('NONCE_KEY',        'LI9-iE<}k@_;Qa `lcpqAa<<1h;lYDyt8Am,:F!S.|J,x_6,$S]/s$SUUYSDGWS#');
define('AUTH_SALT',        'w$+*1q~1OB5VzU]Aa0r`3W;~qNu49gA-S*)P2Ex(Pw+fXr1u!wGc(noxd%_Qcg2.');
define('SECURE_AUTH_SALT', 'QQOeQv  Bpv93W,,Vsk>)mzvO4c]P?:^^~~l,B#S+}YV65MODAtt|q607zRsyH$p');
define('LOGGED_IN_SALT',   'ujKLy=7VK[5,@=XDFKUq$ $_rZi>19p8Xhf`kG1t`(@S:2!+N_i5secu~H03WDxD');
define('NONCE_SALT',       'COq1KsC(:6iP~$gwgDFY9e=>lz&4F(GnU[&sd9$|n4K191*R+~TffjOY,+_=mg@,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'homeass_';

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
