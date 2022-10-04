<?php
$link=new mysqli('localhost','root','Seetu@5353','hostel');

$values=mysqli_query($link,"SELECT * from wardens where email='$_GET[id]'");
while($row=mysqli_fetch_array($values)){
    $email=$row['email'];
    $name=$row['name'];
    $age=$row['age'];
    $salary=$row['salary'];
    $address=$row['address'];
    $phone=$row['phone'];
}

?>

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
        <h3 style="font-size: 30px;"> Hostel Management System</h3>
        <div class="dashboard">
            <a href="../dashboard.php">Goto Dashboard🏠</a>
        </div>
    </div>
    <h1>Edit <?php echo $name; ?>'s Detail</h1>


    <form method="post" action="" class="add_warden_form">
    <div class="input-field">
        <input class="input" type="text" name="email" placeholder="Email" value="<?php echo $email;?>"/>
    </div>
    <div class="input-field">
        <input class="input" type="text" name="name" placeholder="Name" value="<?php echo $name;?>"/>
    </div>
    <div class="input-field">
        <input class="input" type="text" name="age" placeholder="Age" value="<?php echo $age;?>"/>
    </div>
    <div class="input-field">
        <input class="input" type="text" name="salary" placeholder="Salary" value="<?php echo $salary;?>"/>
    </div>
    <div class="input-field">
        <input class="input" type="text" name="address" placeholder="Address" value="<?php echo $address;?>"/>
    </div>
    <div class="input-field">
        <input class="input" type="text" name="phone" placeholder="Phone Number" value="<?php echo $phone;?>"/>
    </div>
    <div class="submit">
        <input class="input" type="submit" name="update" value="EDIT DETAILS">
    </div>
    </form>
    

    <?php
  if(isset($_POST['update'])){
  $update=mysqli_query($link,"UPDATE `wardens` SET `email`='$_POST[email]',`name`='$_POST[name]', `age`='$_POST[age]', 
  `salary`='$_POST[salary]',`address`='$_POST[address]', `phone`='$_POST[phone]' WHERE email='$_GET[id]'");

  ?>
<script>

window.location.href='../dashboard.php';

</script>

<?php
  }
?>



</body>
</html>