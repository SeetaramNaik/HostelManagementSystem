<?php
$link=new mysqli('localhost','root','Seetu@5353','hostel');

$values=mysqli_query($link,"SELECT * from students where usn='$_GET[id]'");
while($row=mysqli_fetch_array($values)){
    $email=$row['email'];
    $usn=$row['usn'];
    $name=$row['name'];
    $branch=$row['branch'];
    $semester=$row['semester'];
    $address=$row['address'];
    $phone=$row['phone'];
    $room_no=$row['room_no'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./students.css"/> -->
    <link rel="stylesheet" href="./students.css?v=<?php echo time(); ?>">
    <link rel="icon" href="../../img/logo.png"/>
    <title>Hostel Management System</title>
</head>
<body>
  <div class="container">
  <div class="edit_student_header">
        <h1>Hostel Management System</h1>
        <div class="dashboard">
            <a href="../dashboard.php">Goto Dashboard🏠</a>
        </div>
    </div>
    <h2 style="text-align: center;margin-left:650px;">Edit <?php echo $name; ?>'s Details</h2>

    <div class="container" style="margin:20px;margin-bottom:50px;">
        <form class="edit_student_form" method="post" action="">
          <div class="row mb-3">
            <label for="inputEmail3" class="label">Name   </label>
            <div class="col-sm-10" style="margin-left: 50px;">
              <input class="edit_input" name="name" type="text" class="form-control" id="inputEmail3" value="<?php echo $name; ?>" />
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputEmail3" class="label">USN</label>
            <div class="col-sm-10" style="margin-left: 50px;">
              <input class="edit_input" name="usn" type="text" class="form-control" maxlength="10" value="<?php echo $usn; ?>"/>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputEmail3" class="label">Email</label>
            <div class="col-sm-10" style="margin-left: 50px;">
              <input class="edit_input" name="email" type="text" class="form-control" id="inputEmail3" value="<?php echo $email; ?>"/>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputEmail3" class="label">Branch</label>
            <div class="col-sm-10" style="margin-left: 50px;">
              <input class="edit_input" name="branch" type="text" class="form-control" id="inputEmail3" value="<?php echo $branch; ?>"/>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputEmail3" class="label">Semester</label>
            <div class="col-sm-10" style="margin-left: 50px;">
              <input class="edit_input" name="semester" type="text" class="form-control" id="inputEmail3" value="<?php echo $semester; ?>"/>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputEmail3" class="label">Phone Number</label>
            <div class="col-sm-10" style="margin-left: 50px;">
              <input class="edit_input" name="phone" type="number" class="form-control" id="inputEmail3" value="<?php echo $phone; ?>"/>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputEmail3" class="label">Address</label>
            <div class="col-sm-10" style="margin-left: 50px;">
              <input class="edit_input" name="address" type="text" class="form-control" id="inputEmail3" value="<?php echo $address; ?>"/>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputEmail3" class="label">Room Number</label>
            <div class="col-sm-10" style="margin-left: 50px;">
              <input class="edit_input" name="room_no" type="text" class="form-control" id="inputEmail3" value="<?php echo $room_no; ?>"/>
            </div>
          </div>
          <div class="row submit" style="margin-left: 70px;margin-top:30px;">
              <input class="input" name="update" type="submit" value="UPDATE" />
          </div>
        </form>
      </div>
  </div>
    


<?php
  if(isset($_POST['update'])){
  $update=mysqli_query($link,"UPDATE `students` SET `name`='$_POST[name]',
  `usn`='$_POST[usn]',`email`='$_POST[email]',`branch`='$_POST[branch]',`semester`='$_POST[semester]',
  `phone`='$_POST[phone]',`address`='$_POST[address]',`room_no`='$_POST[room_no]' WHERE usn='$_GET[id]'");

  ?>
<script>

window.location.href='../dashboard.php';

</script>

<?php
  }
?>



</body>
</html>