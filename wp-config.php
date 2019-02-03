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
define('DB_PASSWORD', 'fdc927df2a4fdac537fbda16c1867ee38eb8ff03007c78df');

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
define('AUTH_KEY',         'l&:@8}yHh|49!70l2TlTnd:e62@*(Mmw[:I^R}}4ITYQ<Y!l.#]PacH83gIq|_/1');
define('SECURE_AUTH_KEY',  'j$p7uy?@(GJ^SKyUQO=Yy,kyDVQ94.JGCC8-n6|xECPk0lj)k]uX0S{`=y?xy+xF');
define('LOGGED_IN_KEY',    'J%sZUHzK9tg_vB{;_>[OHq{IGR93I8?tU4(f}IA.y&jkO[{{4PZ?hkq?5v@e!|%R');
define('NONCE_KEY',        '0De}.(!pJsflc0IxRP1`>[TF3A6%a[0$Pmvu!1-.MqL0G]OtlD>}z&Pdu/JAJM%X');
define('AUTH_SALT',        ';4<2g,C}%|!TW)$-SYi:O{W%xoK6guWq>Y1X%_FX= 3g}S>_P]jh|&id}cpZO7V`');
define('SECURE_AUTH_SALT', 'p3,2HsrYUW[DPO?Ivgxm7 T7B9NbMxiz5h[p83[p]J8fS_oay}|4U5u`X,FjKz&o');
define('LOGGED_IN_SALT',   'G-896XE-hS1er@?T0#Y`mE $frmjnd>4MgR0&-[mUDJF9yR?+$ry?/|It*}d^pK?');
define('NONCE_SALT',       'iixbw89<vU%P+^:1lLcSKpn3sl!ynb|%tp@8` SC/KKdyDWz&y6-y<w]}V&W&HLc');

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
