<?php
include "config.php";

$id = $_POST['id'];
$name = $_POST['event_name'];
$date = $_POST['event_date'];
$time = $_POST['event_time'];
$location = $_POST['event_location'];
$description = $_POST['event_description'];

$sql = "UPDATE events SET 
Event_name='$name',
Event_date='$date',
Event_time='$time',
Event_location='$location',
Event_description='$description'
WHERE Event_id=$id";

mysqli_query($conn,$sql);

header("Location:view.php");
?>

