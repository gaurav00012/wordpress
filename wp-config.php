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
define('AUTH_KEY',         'QxhP/^8K;Qp[;@9e9eGch/lo7dTbJR?t$^:<6IilNCc0aD&e6qE`U2PE6G1T|o!8');
define('SECURE_AUTH_KEY',  'P|B$8GetlVA^!]&ey:B/VMDF]wqmiga$X2t`**=.$Cp8BC)KzNOx-MRG8cb4kSuO');
define('LOGGED_IN_KEY',    ')qu8-58it_%~{nZ FYG@Dy@4.C-H+1^(Xp.hN_eb0o~yAf{OB^#w|{SX<eK}-bPW');
define('NONCE_KEY',        '0-OizrF3yKU Lr3j$`3/Im:QoH49#{TbRGSL|$9+7 %g^=U^?H3.k)5^VKVIR4;Z');
define('AUTH_SALT',        'kI<$&Ab^(k<dr,a)fPk4P/fX`4UoJw5?eMGps?jf<P~oyq2ysyn_P_DS{YKQc-N|');
define('SECURE_AUTH_SALT', '=&u(`o?U?56C?;l;2xLF7xwq2V}^>a#ds=6H]Eb0OgESe^2[@$BKMY+-}KpAO.A#');
define('LOGGED_IN_SALT',   '`a,zc1N1I*9ow6eJ57G!ul~--DsTT)cuAdySa>/(M@?UJKgC<exdn,AwG{52K)QH');
define('NONCE_SALT',       '5+*{>u_QkkiNP.]%z ldtdgeVmoVZP}0i$!<S}=a@Mt7qDMstKE4W*bVfUweD_{|');

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
