<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'martsblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'J=xd*Y cXcc=b~|nh~-cewa):@aH+WRrj?r[&yE<+U@G-tJKJ6d-of`QAY eo00O');
define('SECURE_AUTH_KEY',  'Iy`}C5_{5WQ>HZ`H}|. V:AKH?+ynv[OAsRq<u=C$R& jEe;?o{Nov-yvRt`D$jY');
define('LOGGED_IN_KEY',    'vfe$Vu-#|!#h|R?D,/!?]hWq8e1wL5@~Y-&</CX9X/Q6n4L>;^}`Q|,-4esX#IZg');
define('NONCE_KEY',        '7fheo%=?]1vF[f~^=`w>lxVyL}yu(nTQ9pk&^<HPF^d{lM@ylU0}qOpea0C2V#d{');
define('AUTH_SALT',        '@xS@>RBvO}htO&.vc+qYrlG OeaMBDlJW3$YD,n~7zzR wb{PSm| kGZM_uECz#o');
define('SECURE_AUTH_SALT', 'L|RSVCDz9e%?U~EH@-~H+D;;px.0s(U#J/`.RoSqD.-n#7aLj%d4@th,,o%_J^$Z');
define('LOGGED_IN_SALT',   '+i71sc1YAsXVMF./A9]96*T0`f:Bau+[34/faR=r7,}4)l9|z%;%9e_Y.84Ob3$I');
define('NONCE_SALT',       'X|.p|JYy43d4Z9q(eFi}T@$kh4E7L+cuy9<{QR&]2X*3d}j3dA0(+$;=b&j{Rfl6');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
