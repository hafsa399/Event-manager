 
 <html>
 <body>

 <nav class="navbar">
        
        <div class="nav-left">
           EventManager
        </div>
  <ul class="nav-right">
    <li><a href="main.php" class="active">Home</a></li>
    <li><a href="view.php">ViewEvent</a></li>
    <li><a href="main.php">About</a></li>
  </ul>
</nav> 

<style>
.navbar {
  display: flex; /* Use Flexbox for layout */
  justify-content: space-between; /* Pushes content to the ends */
  align-items: center; /* Vertically centers the content */
  padding: 0 20px; /* Some padding on the sides */
  height: 70px; /* Set a height for the navbar */
  /* Gradient blue background */
  background: linear-gradient(
    80deg,
    rgb(10, 9, 82) 20%,
    rgb(69, 62, 201) 71%,
    rgb(0, 83, 206) 77%
  );
  color: rgb(149, 241, 216); /* Text color */
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.nav-left {
  font-size: 24px;
  font-weight: bold;
}

.nav-right {
  list-style-type: none; /* Remove bullet points */
  margin: 0;
  padding: 0;
  display: flex; /* Use Flexbox for links within the list */
}

.nav-right li {
  margin-left: 20px; /* Space between links */
}

.nav-right li a {
  color: rgb(149, 241, 216); /* Link color */
  text-decoration: none; /* Remove underlines */
  padding: 10px 15px;
  transition: background-color 0.3s;
  border-radius: 4px;
}

.nav-right li a:hover {
  background-color: rgba(255, 255, 255, 0.2); /* Hover effect */
}
</style>
</body>
</html>