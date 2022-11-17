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

if(isset($_POST["id"])){
                $query = "
                                        UPDATE calendardbs
                                        SET title=:title, start_event=:start_event, end_event=:end_event
                                        WHERE id=:id
                                ";
                $statement = $connect->prepare($query);
                $statement->execute(
                                                        array(
                                                                        ':title'                => $_POST['title'],
                                                                        ':start_event'     => $_POST['start'],
                                                                        ':end_event'      => $_POST['end'],
                                                                        ':id'                    => $_POST['id']
                                                        )
                );


                // $title = $_POST['title'];
                // $start = $_POST['start'];
                // $end = $_POST['end'];
                // $id = $_POST['id'];
                // $sql = "UPDATE calendardbs SET title='$title', start_event='$start', end_event='$end' WHERE id = $id";
                // $conn->query($sql);


}

?>