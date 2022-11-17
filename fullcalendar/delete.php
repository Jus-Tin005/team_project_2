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
              DELETE from calendardbs WHERE id=:id
                                                                                ";
 $statement = $connect->prepare($query);
 $statement->execute(
                                                array(
                                                ':id' => $_POST['id']
                                                        )
                                  );






// $id = $_POST['id'];
//     $sql = "DELETE FROM events WHERE id = $id";
//     $conn->query($sql);




}

?>




