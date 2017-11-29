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
define('DB_NAME', 'WordPress_DB');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin123');

/** MySQL hostname */
define('DB_HOST', 'bj-rds-wordpress.c2pdlsfjxppi.us-east-1.rds.amazonaws.com:3306');

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
define('AUTH_KEY',         '@Ud^_&7e9[c.>>Q+_PmUphos28k)|`d^$@ZD8} VX_[V41ijr#Vp-$w0|A0lp!*&');
define('SECURE_AUTH_KEY',  '/9FU,D%p_tINgZeG(LY;hcGK7y)e-J#go1yJ!mcvDiYMoP^pvFX0!JDJ<GA#O23f');
define('LOGGED_IN_KEY',    '>1fIz.~a +]H%JXs>7x13^CEW!kj;#yoey0(*8Q),o#@q}`lU&1J1IO<#ODQ&-U2');
define('NONCE_KEY',        'hDlea~N>9HyJ)82 BD/S),~Eo3i[=vqd1-d$dxWd4pH_H^@}4Pmg*LOc)|EPU}Yi');
define('AUTH_SALT',        'KL8Ya.qR|G~B:0R+u,(j$3p}m%UTVA!u6Lj;A)d5Gwt:/yDomhyH@LHQfJDEm^ND');
define('SECURE_AUTH_SALT', 'u-gVD^vKU%U-_Qo.#?<(jK`?rSW?A=pey0ij Fhy%?/r}3wm.LkEH04`d cD}y}%');
define('LOGGED_IN_SALT',   '.E5i5G.{@eP3Gj94Q*3Hh-HYyyjTu,UhD<#Udpw3q5^y3t8Dep`I2+dMljAO??~j');
define('NONCE_SALT',       'W#*!lO@Ldu[9-9TMm~8q7rTRmcM#^&fuHgOn,E _+N}5/c$4ig9{HBV3.Y4%]I_D');

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

