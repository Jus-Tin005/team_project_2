<?php

/*
! ........................................ Database connection Area Here ..................................
*/


declare(strict_types = 1);
error_reporting(E_ALL);
ini_set("display_errors", '1');

$connect = new PDO(' mysql:host=localhost;dbname = fullcalendar_project',  'root',  ' ' );

if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

$data = array();

$query = "SELECT * FROM calendardbs ORDER BY id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["id"],
  'title'   => $row["title"],
  'start'   => $row["start_event"],
  'end'   => $row["end_event"]
 );
}

echo json_encode($data);

?>
