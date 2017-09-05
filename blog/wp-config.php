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
define('DB_PASSWORD', 'TypaWuHb');

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
define('AUTH_KEY',         'fx5mFBL3Pwsgm*A;Z[>PsP0QnJ[MJlkm@&(_fi=%3+l$PG7S(@$8<_G9z#o,/37-');
define('SECURE_AUTH_KEY',  '({<7^*H>OIfG@DC{*[f8f?3xebr2Tu^4U{azxtn%aXTR(E5.)^&gCL^;`0x1V[mA');
define('LOGGED_IN_KEY',    'GD&e.AA|;JU`@p7v^e,pcZ}A?&5x#m$DhnN(09P5`0FLwcI@EFgrfm(7B})Ktjxr');
define('NONCE_KEY',        '>6d##YumV>Bga1s#SrVz5f8V5z1F:_(FR%xP<7?Z8P*>sAqng@ Mp9-Mj`a~(fYL');
define('AUTH_SALT',        ' u)$wm.sp#.]y(@WZ{D1CF)H|o$g0ev^?H}gH+8(+@hpgCsI<w+p;Lu Gu~._{<o');
define('SECURE_AUTH_SALT', '9TfA4=DI-xSA>U}cAr&gxA8j()F<?)G.7)p>LmfLj 2(QGUtPk;U:Ya,J8<k0lu}');
define('LOGGED_IN_SALT',   '`1ZW.GL*&s#3wf=p&sv%Z_rohi|zyZ@rtLKZM%SjRF-1@oRf5F!8/ZdVv2e|w{Iv');
define('NONCE_SALT',       'e?X]klRrfZ9G<v6S;x,G%F{r$NQ/0n LefB()8#C<*akZ)R5qX>{<F/}BEbG.7W<');

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
define('FS_METHOD','direct');
