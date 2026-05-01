<?php
include "config.php";

$name = mysqli_real_escape_string($conn, $_POST['Event_name']);
$date = mysqli_real_escape_string($conn, $_POST['Event_date']);
$time = mysqli_real_escape_string($conn, $_POST['Event_time']);
$location = mysqli_real_escape_string($conn, $_POST['Event_location']);
$description = mysqli_real_escape_string($conn, $_POST['Event_description']);

$sql = "INSERT INTO events (Event_name, Event_date,Event_time, Event_location, Event_description)
VALUES ('$name', '$date','$time', '$location', '$description')";

if(mysqli_query($conn,$sql)){
    header("Location:view.php");
}else{
    echo "Error: " . mysqli_error($conn);
}
?>