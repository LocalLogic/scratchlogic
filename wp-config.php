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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'scratchlogic');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '[~R%*^y2P[yyb|(j9lUr(DU5nt!&>Ky*zmV&+rM#/>8|(R4Q&r3j@q=|-(n,E.-f');
define('SECURE_AUTH_KEY',  'uY3Eg<_9OfJxpo2*~-eL-*K2S6GpM{WcB6Exjf>es#ESXZ?Xl;-9f>r&@+,0Xcm|');
define('LOGGED_IN_KEY',    'o+/<v6+-+|!)a_:2(eO>c$Y5$MNd>Rdo`7FEkS!Stvh3rKJ;dds#%KcL}|-UJI}u');
define('NONCE_KEY',        '`bm-Hcf*<DDc=MwiBlvcBt;Ii|%qOEM:]7S;E/atQAhiOOp))-`-:e6_Izt~{Jdk');
define('AUTH_SALT',        '+Xa,1|hZw$y8~ >qq$O83lQ?e2iK~(^gx;;_|b`]S7NfQPl~vYe;ch71Gv7UXy<U');
define('SECURE_AUTH_SALT', 'o`-uYZht<# 9+|(ITf|d[A(88#]j}`zXEbP~-{W_W]E2Fi})3dncsIwV0Fbw9b$B');
define('LOGGED_IN_SALT',   '-Y=!R/1sC|I*u*/ob$[2yC-3{N=<00WN8TnK{V$UF5)}OlAj[ff;)r.B:#)j4M-@');
define('NONCE_SALT',       '-g>=?@?|A89F|/I`Uh8c~VO&FMiXP!6JXz@+}k%wAa?H tm/PFforPnN_dTte;!i');

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
