<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|				 (and in table creation queries made with DB Forge).
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_group = 'mysql';
$active_record = TRUE;

//POSTGRES
$db['default']['hostname'] = 'localhost';
$db['default']['username'] = 'postgres';
$db['default']['password'] = 'asdf0123';
$db['default']['database'] = 'larq';
$db['default']['dbdriver'] = 'postgre';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;

//MYSQL
//$db['mysql']['hostname'] = 'localhost';
//$db['mysql']['username'] = 'quint870_larq';
//$db['mysql']['password'] = 'asdf0123';
//$db['mysql']['database'] = 'quint870_cch';
//$db['mysql']['dbdriver'] = 'mysql';
//$db['mysql']['dbprefix'] = '';
//$db['mysql']['pconnect'] = TRUE;
//$db['mysql']['db_debug'] = TRUE;
//$db['mysql']['cache_on'] = FALSE;
//$db['mysql']['cachedir'] = '';
//$db['mysql']['char_set'] = 'utf8';
//$db['mysql']['dbcollat'] = 'utf8_general_ci';
//$db['mysql']['swap_pre'] = '';
//$db['mysql']['autoinit'] = TRUE;
//$db['mysql']['stricton'] = FALSE;

//MYYSQL
//$db['mysql']['hostname'] = '200.137.132.9'; 
//$db['mysql']['username'] = 'larq_site';
//$db['mysql']['password'] = '#lab@rqu30log1a';
//$db['mysql']['database'] = 'larq_db';
//$db['mysql']['dbdriver'] = 'mysql';
//$db['mysql']['dbprefix'] = '';
//$db['mysql']['pconnect'] = TRUE;
//$db['mysql']['db_debug'] = TRUE;
//$db['mysql']['cache_on'] = FALSE;
//$db['mysql']['cachedir'] = '';
//$db['mysql']['char_set'] = 'utf8';
//$db['mysql']['dbcollat'] = 'utf8_general_ci';
//$db['mysql']['swap_pre'] = '';
//$db['mysql']['autoinit'] = TRUE;
//$db['mysql']['stricton'] = FALSE;

//MYSQL
$db['mysql']['hostname'] = 'localhost';
$db['mysql']['username'] = 'root';
$db['mysql']['password'] = '';
$db['mysql']['database'] = 'larq';
$db['mysql']['dbdriver'] = 'mysql';
$db['mysql']['dbprefix'] = '';
$db['mysql']['pconnect'] = TRUE;
$db['mysql']['db_debug'] = TRUE;
$db['mysql']['cache_on'] = FALSE;
$db['mysql']['cachedir'] = '';
$db['mysql']['char_set'] = 'utf8';
$db['mysql']['dbcollat'] = 'utf8_general_ci';
$db['mysql']['swap_pre'] = '';
$db['mysql']['autoinit'] = TRUE;
$db['mysql']['stricton'] = FALSE;

//SERVIDOR
$db['server']['hostname'] = 'http://bdsites.ufma.br';
$db['server']['username'] = 'larq_site';
$db['server']['password'] = '#lab@rqu30log1a';
$db['server']['database'] = 'larq_bd';
$db['server']['dbdriver'] = 'postgre';
$db['server']['dbprefix'] = '';
$db['server']['pconnect'] = TRUE;
$db['server']['db_debug'] = TRUE;
$db['server']['cache_on'] = FALSE;
$db['server']['cachedir'] = '';
$db['server']['char_set'] = 'utf8';
$db['server']['dbcollat'] = 'utf8_general_ci';
$db['server']['swap_pre'] = '';
$db['server']['autoinit'] = TRUE;
$db['server']['stricton'] = FALSE;

/* End of file database.php */
/* Location: ./application/config/database.php */