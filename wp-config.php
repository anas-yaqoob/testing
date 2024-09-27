<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testing' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4GyQg$go-sG}`yyn3S4oz5~gyc)wJVt2EN>:>wQ:O#1JUCaD,kxwnRzhd%%-+r[>' );
define( 'SECURE_AUTH_KEY',  ')aZwVoq3$D}(w54p)X.6_ngxs;?:t8@l0iGOdywLZ=~e+SZ0E4}Z2h^@Z~#G3}SU' );
define( 'LOGGED_IN_KEY',    '}>Va|Z,n#Nc-@kP`e-[*yO%385B!rN_u<tnzXG@8JO8Cq&`.3WXj2S7r)_oeSF%)' );
define( 'NONCE_KEY',        '5*38oA=*(|AW*f-=]0}.}sE8QlP)XCCva$Nj ;$V]rI[7H+v421s4oj|yZRyM2iO' );
define( 'AUTH_SALT',        '!2(2y<S3DTpZ?SJ>Oj_?3s7h-8Mo7WBo5[=4n,b3`O0u: W1ED+vaB]0FAk1tC&Q' );
define( 'SECURE_AUTH_SALT', '?J@!kWzvhSRG1*}2D//4WWlB;c[b{E#>L:3FfuY(}AjoG|Oe_H._NKb%)2PjmXOI' );
define( 'LOGGED_IN_SALT',   'K$(*HGrPd$5w-R[R~PQuOa9o^o,JLr*+EFSm^BBg*9T$o=N]lWFL:ju$w?o>FT>/' );
define( 'NONCE_SALT',       'Nj#t~g9l:7sFWs92uc))df3;#nj<}62c.Bo#tX`7bFS-c.L)HoM#4@!3w&aeL^-E' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
