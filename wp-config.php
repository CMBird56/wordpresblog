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
define('DB_PASSWORD', 'iwonderwhy56');

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
define('AUTH_KEY',         ',dy[>Z*[db)3z^3&9b9a8Enq^?;)y5<e+9-|D+me%%n)i|}d=EIhSj~?6LI;K_nc');
define('SECURE_AUTH_KEY',  'SR|ma=G Cg7?Sj>*!5;SGjv[e,@#:2t`{$0ai?R ;%-RDKRH6QXk-k-j+A:L^!@5');
define('LOGGED_IN_KEY',    '))yPUP{&|-u=.0zKM6Vq;zXT rB}p3OtM~^|K~K#G^dQ=rpQw7ZR*s:4c-jvaVr8');
define('NONCE_KEY',        'JRWwP{ 0[<{@WxS6(._}->n6B*}[?>f>w$9+/@Oo.(EDH(?vJ {Y|2P0o&SP(j)K');
define('AUTH_SALT',        '9X5G2{rs|+LX9i~WloV=~Z~. B;p(]HhDF{6Brtb|V,RK!a1,*LtD@W>}vJDpa3/');
define('SECURE_AUTH_SALT', '6I(lN;wW3%<Z>;+$J qM_EtN(I:e,d)a9o:ko|1UQ($#DihC>PEQOBX-74$JVO.v');
define('LOGGED_IN_SALT',   '!-WaA$[H+_!yj-c%^^Zn|K|p,>9fb1>ErF[ X}FYIBvqFWBa~?Na$QbNOB(` TBK');
define('NONCE_SALT',       '+9ZG)RC3Daym1@hxm7e5M[d`i2A/9AX*j$B#+COb@$xH;<8pD9GSNlYMkD74C={L');

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
