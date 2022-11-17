<?php
define('dbhost', 'localhost');
define('dbuser', 'root');
define('dbpw', '');
define('dbname', 'project_2_login');
$conn = mysqli_connect(dbhost, dbuser, dbpw, dbname);
if (!$conn) {
    echo mysqli_connect_error() . "db not found";
}
