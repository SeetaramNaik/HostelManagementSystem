<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./meals.css"/> -->
    <link rel="stylesheet" href="./meals.css?v=<?php echo time(); ?>">
    <link rel="icon" href="../../img/logo.png"/>
    <title>Hostel Management System</title>
</head>
<body>
    <div class="meal-details-header">
        <h1>Hostel Management System</h1>
        <div class="dashboard">
            <a href="../dashboard.php">Goto Dashboard🏠</a>
        </div>
    </div>
     <h2>All Meals</h2>


    <!-- <div class="meal-card">
        <div class="day">
            <h1>Day</h1>
        </div>
        <div class="day-meal">
            <h4>fd</h4>
            <h4>dhf</h4>
            <h4>fhdf</h4>
            <h4>dfjnd</h4>
        </div>
        <div class="edit-btn">
        <a href="./edit_employee.php"> <button type="text/javascript" class='btn btn-primary'>Edit Detail</button>
        </div>
    </div> -->

    <?php
    $link=new mysqli('localhost','root','Seetu@5353','hostel');

  echo "<div class='all-day-meals'>";

  $meals=mysqli_query($link,"SELECT * from meals");
  while($row=mysqli_fetch_array($meals)){
  
  echo "<div class='meal-card'>";

  echo "<div class='day'>";
        echo "<h3 style='color:#000;'>";echo $row['day']; echo "</h3>";
  echo "</div>";

  echo "<div class='day-meal'>";
        echo "<h4>Morning   :<span>"; echo $row['morning']; echo "</span></h4>";
        echo "<h4>Afternoon   :<span>"; echo $row['afternoon']; echo "</span></h4>";
        echo "<h4>Evening   :<span>"; echo $row['evening']; echo "</span></h4>";
        echo "<h4>Night   :<span>"; echo $row['night']; echo "</span></h4>";
  echo "</div>";

  echo "<div class='edit-btn'>";
         echo "<div class='room-detail-btn'>"; ?><a style="text-decoration:none;cursor:auto;color:#000;" href="./edit_meal.php?id=<?php echo $row['id']; ?>"> <button type="text/javascript" class='room-btn'>Edit Meals</button><?php echo "</div>" ;
  echo "</div>";

  echo "</div>";

  
}
echo "</div>";


?>


</body>
</html>