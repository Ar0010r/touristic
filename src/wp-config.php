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
define( 'DB_NAME', 'touristic' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'r$ci=.&?i0S_^V/1s3-j`pfq^Fz7e+.ragC$eJ&>natOT[X!~#c?E5*i>W_ZL8sX' );
define( 'SECURE_AUTH_KEY',  'k2)]4YHk$o1(`/C6&U;`XMb:+K)V%6YxX5|rP|_*^))OmELY^.wRat+Y]Lckmw)q' );
define( 'LOGGED_IN_KEY',    '^aMca-p/?:?KlW}B)DSo8PItmU>Rbfk!dF)h&%t0 ik)N?vwEB^(e4Ue+&rS5*oX' );
define( 'NONCE_KEY',        'suuE9d$5:QC*I5Q{$7KIe;Qv2J!2ill@E3z x{K==) S*Apm3|XR^xu:5DHK!7_&' );
define( 'AUTH_SALT',        '`HsRgu3QYU#Fi]Fq*+:<X+6c?}]m 1J<IVKZ:wi|AA)^%rTH>I^8HZ|T1C=YJ8HV' );
define( 'SECURE_AUTH_SALT', '%&2k!$4GhD+NQy/#9^fzl}%g4 e$9s%F/x:D+m4hXIo(UF>~/BiqC#2u=tKlTLy(' );
define( 'LOGGED_IN_SALT',   '_aU2/Va/Jnlg^X(_HIrzkIuu{n}[~Ot9cMV0a1pBppw;-TU8@`3BUBcFsqQ-NN<~' );
define( 'NONCE_SALT',       'XlBL/c3t<-r[MPET$6d1[F>jo LGUk8y&9c%5/x]O$/I@q-@JsYCAr(VCkg>a*]+' );

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
