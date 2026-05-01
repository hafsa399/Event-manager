<?php
include "config.php";

$sql = "SELECT * FROM events";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>View Events</title>
<?php include 'nav.php'; ?>

<style>

body {
  font-family: Arial;
  margin:0;
  background: #f5f7ff;
  text-align:center;
}

h1{
margin-top:20px;
color:#20069f;
}

.container {
  width: 90%;
  margin: auto;
  margin-top: 30px;
}

/* Card Layout */

.card-container{
display:grid;
grid-template-columns: repeat(auto-fit, minmax(400px,1fr));
gap:40px;
}

/* Event Card */

.card{
background:white;
padding:20px;
border-radius:10px;
box-shadow:0 4px 10px rgba(22, 72, 59, 0.84);
text-align:left;
 transition:0.3s; 
background-color:  #47e1b86f;
}

.card:hover{
transform:translateY(6px);
}

.card h3{
color:navy;
margin-bottom:10px;
}

.card p{
margin:5px 0;
}

.label{
font-weight:bold;
color:#333;
}

/* Buttons */

.actions{
margin-top:15px;
}

a {
padding:6px 12px;
text-decoration:none;
border-radius:20px;
margin-right:5px;
}

.edit{
background:#20069f;
color:white;
}

.delete{
background:rgb(221, 45, 74);
color:white;
}

</style>

</head>

<body>

<h1>Scheduled Events</h1>
<p>Manage and monitor all your upcoming activities.</p>

<div class="container">

<div class="card-container">

<?php

if(mysqli_num_rows($result) > 0){

while($row = mysqli_fetch_assoc($result)){

?>

<div class="card">

<h3><?php echo $row['Event_name']; ?></h3>

<p><span class="label">ID:</span> <?php echo $row['Event_id']; ?></p>

<p><span class="label">Date:</span> <?php echo $row['Event_date']; ?></p>

<p><span class="label">Time:</span> <?php echo $row['Event_time']; ?></p>

<p><span class="label">Location:</span> <?php echo $row['Event_location']; ?></p>

<p><span class="label">Description:</span> <?php echo $row['Event_description']; ?></p>

<div class="actions">

<a class="edit" href="edit.php?id=<?php echo $row['Event_id']; ?>">Edit</a>

<a class="delete" href="delete.php?id=<?php echo $row['Event_id']; ?>">Delete</a>

</div>

</div>

<?php
}
}
?>

</div>

</div>

</body>
</html>