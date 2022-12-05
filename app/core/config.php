<?php
define('PORT', '8080');

/** 
* Conditional for ROOT constant to load localhost path or Live production path
* (also can be done for Database connection)
**/
if($_SERVER['SERVER_NAME'] == 'localhost') {

    /** database config */
    define('DBNAME', 'oop_mvc_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', 'root');
    define('DBDRIVER', '');
    // ROOT Path
    define('ROOT', 'http://localhost:8888/modern_mvc_oop/public');
} else {

    /** database config */
    define('DBNAME', 'oop_mvc_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', '');
    // ROOT Path
    define('ROOT', 'https://www.websitename.com');
}