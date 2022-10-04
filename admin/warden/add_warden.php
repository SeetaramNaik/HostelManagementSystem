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
    <h2 style="margin-left: 680px;">Add Warden</h2>

    <form method="post" action="" class="add_warden_form">
    <div class="input-field">
        <input class="input" type="text" name="email" placeholder="Email"/>
    </div>
    <div class="input-field">
        <input class="input" type="text" name="name" placeholder="Name"/>
    </div>
    <div class="input-field">
        <input class="input" type="text" name="age" placeholder="Age"/>
    </div>
    <div class="input-field">
        <input class="input" type="text" name="salary" placeholder="Salary"/>
    </div>
    <div class="input-field">
        <input class="input" type="text" name="address" placeholder="Address"/>
    </div>
    <div class="input-field">
        <input class="input" type="text" name="phone" placeholder="Phone Number"/>
    </div>
    <div class="submit">
        <input class="input" type="submit" name="submit" value="ADD WARDEN">
    </div>
    </form>
    

    <?php
 
 $link=new mysqli('localhost','root','Seetu@5353','hostel');
 if(isset($_POST['submit'])){
   

 
        mysqli_query($link,"INSERT INTO `wardens`(`email`, `name`, `age`, `salary`, `address`, `phone`,`access`) 
        VALUES ('$_POST[email]','$_POST[name]','$_POST[age]','$_POST[salary]','$_POST[address]','$_POST[phone]','Give access to this site')");
   

  
?>
<script>
window.location.href='../dashboard.php';
</script>
<?php

}

?>



</body>
</html>