<?php
define('DB_SERVER', 'mysql.tunng.co');
define('DB_USERNAME', 'tunng');    // DB username
define('DB_PASSWORD', 'tunng@db');    // DB password
define('DB_DATABASE', 'tunngdb');      // DB name

//mysql_connect("mysql.tunng.co", "tunng", "tunng@db");
//mysql_select_db("tunngdb");
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die( "Unable to connect");
$database = mysql_select_db(DB_DATABASE) or die( "Unable to select database");
?>