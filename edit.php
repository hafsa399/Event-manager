<?php
include "config.php";

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM events WHERE Event_id=$id");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<body>
<?php include 'nav.php'; ?>


<h2>Edit Event</h2>

<form action="update.php" method="POST">

<input type="hidden" name="id" value="<?php echo $row['Event_id']; ?>">

Event Name:
<input type="text" name="event_name" value="<?php echo $row['Event_name']; ?>"><br><br>

Event Date:
<input type="date" name="event_date" value="<?php echo $row['Event_date']; ?>"><br><br>

Event Date:
<input type="time" name="event_time" value="<?php echo $row['Event_time']; ?>"><br><br>

Event Location:
<input type="text" name="event_location" value="<?php echo $row['Event_location']; ?>"><br><br>

Description:
<textarea name="event_description"><?php echo $row['Event_description']; ?></textarea><br><br>

<input type="submit" value="Update Event">

</form>

</body>
</html>