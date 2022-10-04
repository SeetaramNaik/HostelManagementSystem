
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
    <h2>Roommates <?php echo $_GET['id']; ?></h2>

    <?php
    $link=new mysqli('localhost','root','Seetu@5353','hostel');
    echo "<table class='table table-dark'>
<tr class='sem-table-heading'>
<th scope='col'>Email</th>
<th scope='col'>USN</th>
<th scope='col'>Name </th>
<th scope='col'>Branch </th>
<th scope='col'>Semester </th>
<th scope='col'>Address</th>
<th scope='col'>Phone</th>
</tr>";


$roommates=mysqli_query($link,"SELECT * from students where room_no='$_GET[id]'");
while($row=mysqli_fetch_array($roommates)){
  echo "<tr class='sem-table-data'>";
  echo "<td>"; echo $row['email'];echo "</td>";
  echo "<td>"; echo $row['usn'];echo "</td>"; 
  echo "<td>"; echo $row['name'];echo "</td>";
  echo "<td>"; echo $row['branch'];echo "</td>";
  echo "<td>"; echo $row['semester'];echo "</td>"; 
  echo "<td>"; echo $row['address'];echo "</td>";
  echo "<td>"; echo $row['phone'];echo "</td>";

 
  echo "<td style='background-color:#fff;'>"; ?><a href="../students/edit_student.php?id=<?php echo $row["usn"]; ?>"> <button type="text/javascript" class='edit btn btn-primary'>Edit Detail</button><?php echo "</td>" ;

  echo "</tr>";
}


?>
    
</body>
</html>