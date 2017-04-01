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
define('DB_NAME', 'details');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         'f-a!aK(W~H%D@g!:Y+|>$MJKFhS>E2PAg`LqZ/ Z4W/Qr%]z&E7O[juXH|uahgkr');
define('SECURE_AUTH_KEY',  'eVN?4_,iuPRiDD u6.LM^l6ucsP(GT7OjRJX*Qj-^n1xdp%*l!^.!Z]Stp.(Vb+K');
define('LOGGED_IN_KEY',    'f+zE53;d77mXpG7FqG@D3}/t9(IO0$>Zj=}#uR.^z8t2R?-*_7F3=1G9w|yZF3z%');
define('NONCE_KEY',        '%Aj/_h>DIV Hz5)H-wE|2oMe:Ip.Ka(D6WiY/SYu$B,(Y`?koSM7wFC mR5VW1b=');
define('AUTH_SALT',        'hvGm9?<f(x{a-C>si^NAd QPm$:N<T4+^5G.$-sA-Mj,Xx(A3g5VUw*I)AEK0P]<');
define('SECURE_AUTH_SALT', 'jt~09z S)WIrHUQ<=^21gof*x@iU!GLeg 0D$_iMN{H,W+L~;5Z0bL|.x.P7LX46');
define('LOGGED_IN_SALT',   'G fyFG$r2Zwt/b).5 @[9]Bc^OWw.A-R/|iInQ7h|Mr#Mfi4iY9; #]n&ykRmX*f');
define('NONCE_SALT',       'U>{_dje^V4RQ5T#.;1H4=su_21x-jkcX|J,w)/Jq tVuAp$.@Dsnz}-0gyq}B [0');

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
