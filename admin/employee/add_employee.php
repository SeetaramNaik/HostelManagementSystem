<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../img/logo.png"/>
    <!-- <link rel="stylesheet" href="./employee.css"/> -->
    <link rel="stylesheet" href="./employee.css?v=<?php echo time(); ?>">
    <title>Hostel Management System</title>
</head>
<body>

    <div class="add-emp-header">
        <h3 style="font-size: 30px;">Hostel Management System</h3>
        <div class="dashboard">
            <a href="../dashboard.php">Goto Dashboard🏠</a>
        </div>
    </div>
    <h2 style="margin-left:750px;">Add Employee</h2>
    <form method="post" action="" class="add_emp_form">
    <div class="input-field">
        <input class="input" type="text" name="name" placeholder="Name"/>
    </div>
    <div class="input-field">
        <input class="input" type="text" name="phone" placeholder="Phone Number"/>
    </div>
    <div class="input-field">
        <input class="input" type="text" name="emp_type" placeholder="Employee type"/>
    </div>
    <div class="input-field">
            <select style="width:75%;" class="input" name="gender" class="form-select" placeholder="Select Gender" aria-label="Default select example" required>
                <option selected>Male</option>
                <option>Female</option>
            </select>
    </div>
    <div class="input-field">
         <!-- <label>Date of Birth</label> -->
        <!-- <input placeholder="Date of Birth" class="input" type="date" name="dob" /> -->
        <input placeholder="Date of Birth" class="input" type="text" onfocus="(this.type='date')" id="date">

    </div>
    <div class="input-field">
        <!-- <label>Join Date</label> -->
        <!-- <input class="input" type="date" name="joindate" placeholder="Join Date"/> -->
        <input placeholder="Join Date" class="input" type="text" onfocus="(this.type='date')" id="date">
    </div>
 
    <div class="input-field">
        <input class="input" type="number" name="salary" placeholder="Salary"/>
    </div>
    <div class="input-field">
        <input class="input" type="textarea" name="address" placeholder="Address"/>
    </div>
    <div class="submit">
        <input type="submit" name="submit" value="ADD EMPLOYEE">
    </div>
    </form>

     

    <?php

 $link=new mysqli('localhost','root','Seetu@5353','hostel');
 if(isset($_POST['submit'])){
   

    
    $query_run=mysqli_query($link,"INSERT INTO `employee`(`name`, `phone`, `emp_type`, `gender`, `dob`, `joindate`, `salary`,`address`) 
    VALUES ('$_POST[name]','$_POST[phone]','$_POST[emp_type]','$_POST[gender]','$_POST[dob]','$_POST[joindate]','$_POST[salary]','$_POST[address]')");

    if($query_run){
        $_SESSION['status']="EMPLOYEE ADDED SUCCESSFULLY";
        $_SESSION['status_code']="success";
        header('Location: all_employees.php');
    }
    else{
        $_SESSION['status']="ERROR IN ADDING EMPLOYEE";
        $_SESSION['status_code']="error";
        header('Location: all_employees.php');
    }

   

  
?>
<!-- <script>
window.location.href='../dashboard.php';
</script> -->
<script src="../js/sweetalert.min.js"></script>
<?php
if(isset($_SESSION['status'])){
 
  ?>
    <script>
       swal({
            title: "<?php echo  $_SESSION['status']?>",
            // text: "You clicked the button!",
            icon: "<?php echo  $_SESSION['status_code']?>",
            button: "OK...Done!",
        });
    </script> 
  <?php
   unset($_SESSION['status']);
}

?>
<?php

}

?>


<!-- <script>
  swal("Good job!", "You clicked the button!", "success");
</script> -->
</body>
</html>