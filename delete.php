<?php
include "config.php";

$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM events WHERE Event_id=$id");

header("Location:view.php");
?>