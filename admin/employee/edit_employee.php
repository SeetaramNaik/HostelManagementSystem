<?php
$link=new mysqli('localhost','root','Seetu@5353','hostel');

$values=mysqli_query($link,"SELECT * from employee where name='$_GET[id]'");
while($row=mysqli_fetch_array($values)){
    $name=$row['name'];
    $phone=$row['phone'];
    $emp_type=$row['emp_type'];
    $gender=$row['gender'];
    $dob=$row['dob'];
    $joindate=$row['joindate'];
    $salary=$row['salary'];
    $address=$row['address'];
}

?>

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
    <div class="edit_emp_header">
        <h3>Hostel Management System</h3>
        <div class="dashboard">
            <a href="../dashboard.php">Goto Dashboard🏠</a>
        </div>
    </div>
    <h2>Edit <?php echo $name; ?>'s Detail</h2>

    <form method="post" action="" class="edit_employee_form">

            <div class="row mb-3">
                <label for="inputEmail3" class="label">Name  </label>
                <div class="col-sm-10" style="margin-left: 50px;">
                    <input class="edit_input" name="name" type="text" class="form-control" id="inputEmail3" value="<?php echo $name; ?>" />
                </div>
            </div>

            <div class="row mb-3">
                 <label for="inputEmail3" class="label">Phone Number</label>
                 <div class="col-sm-10" style="margin-left: 50px;">
                    <input class="edit_input" name="phone" type="number" class="form-control" id="inputEmail3" value="<?php echo $phone; ?>"/>
                </div>
             </div>

             <div class="row mb-3">
                 <label for="inputEmail3" class="label">Employee Type</label>
                 <div class="col-sm-10" style="margin-left: 50px;">
                    <input class="edit_input" type="text" name="emp_type" placeholder="Employee type" value="<?php echo $emp_type; ?>"/>
                </div>
             </div>

             <div class="row mb-3">
                 <label for="inputEmail3" class="label">Gender</label>
                 <div class="col-sm-10" style="margin-left: 50px;">
                    <select name="gender" class="edit_input" aria-label="Default select example" value="<?php echo $gender; ?>">
                        <option selected>Male</option>
                        <option>Female</option>
                    </select>
                </div>
             </div>

             <div class="row mb-3">
                 <label for="inputEmail3" class="label">Date of Birth</label>
                 <div class="col-sm-10" style="margin-left: 50px;">
                    <input class="edit_input" type="date" name="dob" placeholder="Date of Birth" value="<?php echo $dob; ?>"/>                
                 </div>
             </div>

             <div class="row mb-3">
                 <label for="inputEmail3" class="label">Join Date</label>
                 <div class="col-sm-10" style="margin-left: 50px;">
                     <input class="edit_input" type="date" name="joindate" placeholder="Join Date" value="<?php echo $joindate; ?>"/>
                 </div>
             </div>

             <div class="row mb-3">
                 <label for="inputEmail3" class="label">Salary</label>
                 <div class="col-sm-10" style="margin-left: 50px;">
                    <input class="edit_input" type="number" name="salary" placeholder="Salary" value="<?php echo $salary; ?>"/>
                 </div>
             </div>

             <div class="row mb-3">
                 <label for="inputEmail3" class="label">Address</label>
                 <div class="col-sm-10" style="margin-left: 50px;">
                    <input class="edit_input" type="textarea" name="address" placeholder="Address" value="<?php echo $address; ?>"/>
                 </div>
             </div>
             <div class="row submit" style="margin-left: 70px;margin-top:30px;">
               <input class="input" name="update" type="submit" value="UPDATE" />
             </div>
    </form>


    <?php
  if(isset($_POST['update'])){
  $update=mysqli_query($link,"UPDATE `employee` SET `name`='$_POST[name]',
  `phone`='$_POST[phone]',`emp_type`='$_POST[emp_type]',`gender`='$_POST[gender]',`dob`='$_POST[dob]',
  `joindate`='$_POST[joindate]',`salary`='$_POST[salary]',`address`='$_POST[address]' WHERE name='$_GET[id]'");

  ?>
<script>

window.location.href='../dashboard.php';

</script>

<?php
  }
?>


</body>
</html>