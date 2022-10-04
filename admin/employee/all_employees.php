

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./employee.css"/> -->
    <link rel="stylesheet" href="./employee.css?v=<?php echo time(); ?>">
    <link rel="icon" href="../../img/logo.png"/>
    <title>Hostel Management System</title>
</head>
<body>
<div class="emp-header">
    <h3>Hostel Management System</h3>
    <div class="dashboard">
            <a href="../dashboard.php">Goto Dashboard🏠</a>
        </div>
  </div>
    <h1>All Employees</h1>
   
    <?php
    $link=new mysqli('localhost','root','Seetu@5353','hostel');

echo "<table class='table table-dark'>
<tr class='emp-table-heading'>
<th scope='col'>Name</th>
<th scope='col'>Phone</th>
<th scope='col'>Employee Type</th>
<th scope='col'>Gender</th>
<th scope='col'>Date of Birth</th>
<th scope='col'>Join Date</th>
<th scope='col'>Salary</th>
<th scope='col'>Address</th>
</tr>";
$employees=mysqli_query($link,"SELECT * from employee");
while($row=mysqli_fetch_array($employees)){
  echo "<tr class='emp-table-data'>";
  echo "<td>"; echo $row['name'];echo "</td>";
  echo "<td>"; echo $row['phone'];echo "</td>"; 
  echo "<td>"; echo $row['emp_type'];echo "</td>";
  echo "<td>"; echo $row['gender'];echo "</td>";
  echo "<td>"; echo $row['dob'];echo "</td>"; 
  echo "<td>"; echo $row['joindate'];echo "</td>";
  echo "<td>"; echo $row['salary'];echo "</td>";
  echo "<td>"; echo $row['address'];echo "</td>";

  echo "<td style='background-color:#fff;'>"; ?><a href="./edit_employee.php?id=<?php echo $row["name"]; ?>"> <button type="text/javascript" class='edit btn btn-primary'>Edit Detail</button><?php echo "</td>" ;
  echo "<td style='background-color:#fff;'>"; ?><a href="./delete_employee.php?id=<?php echo $row["name"]; ?>"> <button type="text/javascript" class='delete btn btn-primary'>Remove</button><?php echo "</td>" ;
  echo "</tr>";
}


?>





</body>
</html>