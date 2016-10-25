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
define('DB_NAME', 'blitz_creative');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'blitz123');

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
define('AUTH_KEY',         'Xy(CBcP!|:$A|rV;-|qI3 zz2[-+ >.YbVZ[t-.uvvOlf(~.|TASKYWOw5G-N`-=');
define('SECURE_AUTH_KEY',  '$:l~=|J~&pS 86nr T}IL5F]1GY4|>TIv{DYrFFYpj6fc9i-JyZ.i{|4HWbChv}1');
define('LOGGED_IN_KEY',    'c9|`-/SZX:X3|!crss-F I$P}=J^b|O7pJiF5H2RQi,&JgA+oOlEvb*4[@vc*?eH');
define('NONCE_KEY',        'zVc?T]Kn0O8U~_s{HxGC3-g{Et@40[@;8n1PJxQ@NqexpHxH2t!FnX{+cb(qjW)H');
define('AUTH_SALT',        'vCjFw-Ha]9at8(PP4em>wWsy|sVvW+A[]||{?N1~0&aG~qt=6xm:2^O|&P)X!33^');
define('SECURE_AUTH_SALT', 'jE1-RIl&9m@&[G-kF 2srr.1q_>0#(bd}6o6CLqsb-XgGD,jmr)$Mo989Y|X*xKr');
define('LOGGED_IN_SALT',   '(;+~41~&3Bx<J#.OB=C+,-(D+Ceo? ;A` u4PQ&4@F&H64Cw0bs:E6s&Wi+Ff>pF');
define('NONCE_SALT',       '>AJ@3+Cgl^Ofih[Lr#`}E{Exh;w1-P#,%hX82:Kdb%-;D*5P*ETT9$c2!,=]?sNH');

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
