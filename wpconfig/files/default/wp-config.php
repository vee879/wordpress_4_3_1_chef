<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('WP_REDIS_HOST', 'group3.xxwny3.0001.usw2.cache.amazonaws.com');
 
define('WP_SITEURL', 'http://' .$_SERVER['HTTP_HOST']);
define('WP_HOME', 'http://' .$_SERVER['HTTP_HOST']);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'Group3DB');

/** MySQL database username */
define('DB_USER', 'Group3DB');

/** MySQL database password */
define('DB_PASSWORD', 'Group3DB');

/** MySQL hostname */
define('DB_HOST', 'group3db.cmawhnjuythp.us-west-2.rds.amazonaws.com');

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
define('AUTH_KEY',         'ek0Luwh^>IdIgP:JCu|zpX%8MY1WJg5Xmo?9pTRR55][F&QsaB[m&&}tP9*6`FuN');
define('SECURE_AUTH_KEY',  '+>k4#{x*,(g78gB2mL?%FRy:ZUO]1(]j8+zfbqy;-LdjA@/{}g++0T)^@::#u(?V');
define('LOGGED_IN_KEY',    'L_}Vr41(o@boHWBi)~5z1`-nzI3ay$ztp`NR]8vao2rV>|k(:X.3QYa<P-[KAP7l');
define('NONCE_KEY',        'e#fn0?!F%X|2NwPvGcN;|-ZjiK~7OQxxUU)H{h}nEz-r|-#8|Qwm?o)@L)+xegSK');
define('AUTH_SALT',        'gQy:70&o&<Ec/ lTZMqVfJT*{h9~^sB0+J8;nW>IVVkt4M|cReO-nnU9K%|27!|K');
define('SECURE_AUTH_SALT', '-d%?8-!<4?I,E+XFkez[:sqy>GPhdZJWSC-Mt!`}qz/aAU{9}C#x,E^RL!^ryMrq');
define('LOGGED_IN_SALT',   '^8>qZ}3$rl0;g|{4xEH]::z{~!:/PeJrg5[:VM0+3J4<y+Y]Dx!k05P<&+8p@nhp');
define('NONCE_SALT',       'hSwPMrnlgq2$Q?U-/]**j&xj)%M1q@Y]/$|`U4,jV{S~|$+i41|mX}&%H?9E$(J)');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** Disable file editing from the WordPress dashboard. */
define('DISALLOW_FILE_EDIT', true);
