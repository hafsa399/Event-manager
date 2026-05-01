<!DOCTYPE html>
<html>
<head>
<title>Add Event</title>
<link rel="stylesheet" href="style1.css">
</head>
<body>

<?php include 'nav.php'; ?>

<div class="container">

<h1>Add New Event</h1>

<form action="insert.php" method="POST">

<label>Event Name</label>
<input type="text" name="Event_name" placeholder="Enter Event" required>

<div class="row">

<div class="group">
<label>Event Date</label>
<input type="date" name="Event_date" required>
</div>

<div class="group">
<label>Event Time</label>
<input type="time" name="Event_time" required>
</div>

</div>

<label>Event Location</label>
<input type="text" name="Event_location" placeholder="Location" required>

<label>Description</label>
<textarea name="Event_description"></textarea>

<input type="submit" value="Save Event">

</form>

</div>

</body>
</html>