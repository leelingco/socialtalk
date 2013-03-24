<?php
//This file cannot be called directly, only included.
if (str_replace(DIRECTORY_SEPARATOR, "/", __FILE__) == $_SERVER['SCRIPT_FILENAME']) {
    exit;
}

/** The database Host */
define('G_DBTYPE', 'mysql');
/** The database Host */
define('G_DBHOST', 'mysql.cambridgesolutions.net');
/** The database user*/
define('G_DBUSER', 'socialtalk');
/** The database user password*/
define('G_DBPASSWD', '0fferpal');
/** The database name*/
define('G_DBNAME', 'socialtalk');
/** The database tables prefix*/
define('G_DBPREFIX', '');

/** The servername offset */
define('G_OFFSET', '/socialtalk_linli/www/');

/**Software root path*/
define('G_ROOTPATH', str_replace("\\", "/", dirname(dirname(__FILE__)))."/");

/**Current version*/
define('G_VERSION_NUM', '1.0');

/**Include function files*/
require_once('globals.php');
?>
