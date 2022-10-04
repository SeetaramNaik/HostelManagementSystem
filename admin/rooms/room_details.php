

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./rooms.css"/> -->
    <link rel="stylesheet" href="./rooms.css?v=<?php echo time(); ?>">
    <link rel="icon" href="../../img/logo.png"/>
    <title>Hostel Management System</title>
</head>
<body>

    <div class="room-details-header">
        <h1>Hostel Management System</h1>
        <div class="dashboard">
            <a href="../dashboard.php">Goto Dashboard🏠</a>
        </div>
    </div>
    <div class="room-header">
        <h1 class="room-detail-header" style="margin-top:10px;"><span class="room-text">Room Details</span><span class="room-emoji">🛌</span></h1>
    </div>
   
   
    <?php
    $link=new mysqli('localhost','root','Seetu@5353','hostel');
echo "<div class='room-detail-table'>";
echo "<table class='table room-table'>
<tr class='room-table-heading'>
<th scope='col'>Room Number</th>
<th scope='col'>Maximum Beds available</th>
<th scope='col'>Already allocated beds</th>w
<th scope='col'>Available beds</th>
<th scope='col'>View</th>
</tr>";
$room=mysqli_query($link,"SELECT * from rooms");
while($row=mysqli_fetch_array($room)){
  echo "<tr class='room-data'>";
  echo "<td class='room-number'>"; echo $row['room_no'];echo "</td>";
  echo "<td>"; echo $row['max_bed'];echo "</td>"; 
  echo "<td>"; echo $row['allocated'];echo "</td>";
  echo "<td>"; echo $row['max_bed']-$row['allocated'];echo "</td>";

  echo "<td class='room-detail-btn'>"; ?><a href="roommates_detail.php?id=<?php echo $row["room_no"]; ?>"> <button type="text/javascript" class='room-btn'>View in Detail</button><?php echo "</td>" ;
  echo "</tr>";
}
echo "</table>";
echo "</div>";


?>
</body>
</html>