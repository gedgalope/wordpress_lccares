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
define( 'DB_NAME', 'LC.Cares' );

/** MySQL database username */
define( 'DB_USER', 'LC.Cares.Admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'LCC4r3s2019' );

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
define( 'AUTH_KEY',         'D#&9<|c/}f#yP:v3(sI{s*}4QV`I%Q|7w>*hdE<!;Gv(tn4Uq=OqH#Ol.BmaN>@4' );
define( 'SECURE_AUTH_KEY',  'P[4(q|dsd+d_1(?/m{S(sm:iJI_3QH=(3O;JMmmGUh,V($ci1,Il5<cC*l9+p)9J' );
define( 'LOGGED_IN_KEY',    '>dz]*E8*{oV7H7Ah1WN]uW*!=e*?rhGAuBLFp%t`4a-M*q1.8Vp>d&*K)X?)`KAf' );
define( 'NONCE_KEY',        ')F3gvwTJ 1CY4DZ$C3PEE#>[xlla0U/QA9`:cl|B-l1&zcFx=EPpaOr(~M6qoKqr' );
define( 'AUTH_SALT',        '1-aZ<aHnA4z&o%/o%iA ipL+r]8B^jnQbY?m8qwMbu/dNJ)IZ5{?izcS76s?G^-/' );
define( 'SECURE_AUTH_SALT', 'tj[E(mp]GC+u1zsrjtA!:ugs?*9a)mK)^=UVyn^t?a0L,w~*c2eCglS6]RB]4?+H' );
define( 'LOGGED_IN_SALT',   'uh;7;NEf~<0BbcOLY{X`uv#cs{<zQy>Z<SzEJW6 ]]WXSZGX+wyje8+87PR7[8Fz' );
define( 'NONCE_SALT',       '4.DhW>bE$3ZdIE]Yz7#M|P|;!Jk=Sxcvfx;%.6s%L0*+ @OU/M?|<R--a4nPWG@S' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lccareswp_';

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
