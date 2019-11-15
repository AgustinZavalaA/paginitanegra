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
define( 'DB_NAME', 'wp-blog-2019' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$yhCK;V>/D,I5)x@0hL4}5Ns<isC)Q~,1!UeCRu?; :OB`C5P?IRj=+! embIiyF' );
define( 'SECURE_AUTH_KEY',  '_6X2B3.rbf)^4sHAN* T ^S<{~ Q0[91#2xyHe)<YNY-ERcax2|BbsG0`QQzDXrO' );
define( 'LOGGED_IN_KEY',    'O?r1QAp#wfW;bw?W4}yvqWxIzbGab6LM,Wj|ZM^=^<(UJaHgTX3;[fFH%c:Y_Nk8' );
define( 'NONCE_KEY',        '~}biib{PyU5xqvq+aqR,ESlS-J&cDp->/E&|vD?EZ@:ibF?[73:o2O/&[`{ZTRRU' );
define( 'AUTH_SALT',        '!#K?{)|{aP{r|A*U)=(U_P33~Y6eT[]9NG|>Bh^#UZTGz3#m38O9?x!`h|9,a=lV' );
define( 'SECURE_AUTH_SALT', 'c)vrds}n`b1;fpnAt0:6|~$XOpaCIdmK*il~kK7[jazwQvTVzYkLc*3L%<_c8N|j' );
define( 'LOGGED_IN_SALT',   'Tm$1&Xp<NpX]aSk#>?4z?9vLQ(x*YPO4Zt(,+1|o|0HC9=#JQs-[]SBdN-?aw$,F' );
define( 'NONCE_SALT',       'JA@3je?yu1AK.+q!}i4%y5@cOmAyD&}riPN_oYk|dJ8L?<H{>20> 3%s-{rfaRB`' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
