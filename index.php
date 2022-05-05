<!DOCTYPE html>
<html>
  <head>

    <!-- Meta Data --> 
    <meta charset="utf-8">
    <meta name="description" content="User Input, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Grace S">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">

    <!-- Link to CSS file --> 
    <link rel="stylesheet" href="./css/style.css">

    <!-- Title --> 
    <title>Museum Admisson Fee in PHP</title>
  </head>
  <body>
    
    <!-- PHP echo to print the html to the page -->
    <h1><?php 
			echo "Museum Admisson Fee in JS";?></h1>

    <!-- Image -->
    <?php
      echo '<center><img src= "./images/museum.jpeg" alt="museum" width="35%" height="auto"></center>';
    ?>
 
    <!-- Buttons and Text Field -->
    <br>
    <form method= "post">
      Age: <input type="number" step="1" min="0" name="Age">
      <br>
      <br>
      <label for="day">Day:</label>
      <select name="day" id="day">
        <option value="">--Week Days--</option>
				<option value="Sunday">Sunday</option>
        <option value="Monday">Monday</option>
				<option value="Tuesday">Tuesday</option>
		    <option value="Wednesday">Wednesday</option>
        <option value="Thursday">Thursday</option>
		    <option value="Friday">Friday</option>         						
        <option value="Saturday">Saturday</option>
      </select>
      <input type="submit" name="submit" value="Display Cost" />
    </form>
    <br>
    <br>

    <!-- Define Constants -->
    <?php
      if(isset($_POST['submit'])) {
        
        $age = ($_POST['Age']);
        $day = ($_POST['day']);
        
        if ($age <=0) {
          echo "<h3>Please enter a valid age.</h3>";
        }
        else if ($age < 5 || $age > 95) {
          echo "<h3>The admisson fee is FREE for you.</h3>";
        } 
        else if (($age >=12) && ($age <=21)) {
          echo "<h3>You get a student discount.</h3>";
        } 
        else if ((($day == "Tuesday") && ($age > 21)) || (($day == "Thursday") && ($age > 21))) {
          echo "<h3>You get a discount price.</h3>";
        } 
        else if (($age > 21) || ($day != "")) {		
          echo "<h3>You have to pay regular price.</h3>";
        } 
        else {
          echo "<h3>Please make a proper selection.</h3>";
        }
      }
    ?>   
    <br>
    <br>
  </body>
</html>