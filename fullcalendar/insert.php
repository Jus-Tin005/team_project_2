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

if(isset($_POST["title"])){
               $query = "
                                INSERT INTO calendardbs
                                (title, start_event, end_event)
                                VALUES (:title, :start_event, :end_event)
                                ";

                $statement = $connect->prepare($query);
                $statement->execute(
                                                        array(
                                                                        ':title'  => $_POST['title'],
                                                                        ':start_event' => $_POST['start'],
                                                                        ':end_event' => $_POST['end']
                                                                )
                );



                // $title = $_POST['title'];
                // $start = $_POST['start'];
                // $end = $_POST['end'];
                // $sql = "INSERT INTO calendardbs(title, start_event, end_event) VALUES ('$title','$start','$end')";
                // $conn->query($sql);



}


?>
