

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- <link rel="stylesheet" href="./wardens.css"/> -->
       <link rel="stylesheet" href="./wardens.css?v=<?php echo time(); ?>">

    <link rel="icon" href="../../img/logo.png"/>
    <title>Hostel Management System</title>
</head>
<body>
  <div class="add_warden_header">
  <h3 style="font-size: 30px;">Hostel Management System</h3>
    <div class="dashboard">
            <a href="../dashboard.php">Goto Dashboard🏠</a>
        </div>
  </div>
    <h1>All wardens list</h1>
   
    <?php
    $link=new mysqli('localhost','root','Seetu@5353','hostel');

echo "<table class='table table-dark'>
<tr class='emp-table-heading'>
<th scope='col'>Email</th>
<th scope='col'>Name</th>
<th scope='col'>Age</th>
<th scope='col'>Salary</th>
<th scope='col'>Address</th>
<th scope='col'>Phone</th>
</tr>";
$wardens=mysqli_query($link,"SELECT * from wardens");
while($row=mysqli_fetch_array($wardens)){
  echo "<tr class='emp-table-data'>";
  echo "<td>"; echo $row['email'];echo "</td>";
  echo "<td>"; echo $row['name'];echo "</td>"; 
  echo "<td>"; echo $row['age'];echo "</td>";
  echo "<td>"; echo $row['salary'];echo "</td>";
  echo "<td>"; echo $row['address'];echo "</td>"; 
  echo "<td>"; echo $row['phone'];echo "</td>";

  echo "<td style='background-color:#fff;'>"; ?><a href="./edit_warden.php?id=<?php echo $row["email"]; ?>"> <button type="text/javascript" class='edit btn btn-primary'>Edit Detail</button><?php echo "</td>" ;
  echo "<td style='background-color:#fff;'>"; ?><a href="./delete_warden.php?id=<?php echo $row["email"]; ?>"> <button type="text/javascript" class='delete btn btn-primary'>Remove</button><?php echo "</td>" ;
  echo "<td style='background-color:#fff;'>"; ?><a href="./give_access.php?id=<?php echo $row["email"]; ?>"> <button type="text/javascript" class='access btn btn-primary'><?php echo $row['access'];?></button><?php echo "</td>" ;

  echo "</tr>";
}
echo "</table>";


?>
</body>
</html>