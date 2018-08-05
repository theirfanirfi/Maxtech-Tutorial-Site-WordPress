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
define('DB_NAME', 'MAXTECHLIBS');

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
define('AUTH_KEY',         'pE9,x#J~^zb_ !27qV,mo+q>L4}x.zo:tj{:?qGdR,2(uF$#Mj_6l+w:.7M9$I/E');
define('SECURE_AUTH_KEY',  'u&FszS$&0m8YIgGBWvmK+k=qqsxO(9|L6QXM_qeyMs/9Q{wjITk2EEE9D=*#ds=|');
define('LOGGED_IN_KEY',    'j-#%(w<rB7:&yXF%TdMEQg|tF_,O9b6!/}P8l3$@HVxl<?.u{.z3TPvz&&erou_B');
define('NONCE_KEY',        '5rb*t?,WhyCKZ-X0?FPAy+|Oorw4Y~oeD!a`CXk Bm{[I|EYeixi,=M)Ae vH&[2');
define('AUTH_SALT',        'po{hD5MY vS9aaHwI<%)dn5v{7IGti/2^DhV~x#JU=(,<7~2bXlu2K 8-nH)NCS6');
define('SECURE_AUTH_SALT', 'E{E/%S-XKlA}eE>n ru_dK*bRYjuuM2#eXrbs64fc0iP40/.dw%i{?H~.0wu*%){');
define('LOGGED_IN_SALT',   'Tf7L:]d$i)PPNU&)]Voq)<ct6<F:LD%FrvsI) kr?/i*Jxu+:#mKV&@zho]a,a]B');
define('NONCE_SALT',       'b=9e`C8HZ2ZRr.Ork2Kf-BL3 Jkxnt24%&;=,`j3<v]Y:#&,&V4:E5j4( !s?=gG');

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
