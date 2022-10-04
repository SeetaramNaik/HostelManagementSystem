<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./style.css"/> -->
    <link rel="stylesheet" href="./style.css?v=<?php echo time(); ?>">
    <link rel="icon" href="./img/logo.png"/>
    <title>Hostel Management System</title>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">    <title>Hostel Managent system</title>
</head>
<body>
    <!-- <div class="container">
          <h1>Hostel Management System</h1>
          <form method="post" action="" class="student-login">
            <input type="text" placeholder="Email" name="email" required/>
            <input type="password" placeholder="Password" name="password" required/>
            <input type="submit" name="submit" value="LOGIN"/>
          </form>
    </div> -->
  
    
 <form method="post" action="" class="login_form">
    <h1>Hostel Management System</h1>
    <div class="login-detail">
    <h2>Admin Login</h2>
    <div class="input-field">
        <input type="text" name="username" placeholder="username"/>
    </div>
    <div class="input-field">
        <input type="password" name="password" placeholder="Password"/>
    </div>
    <!-- <div class="register-link">
        <a href="#">Still haven't Registered? Click to Register</a>
    </div> -->
    <div class="submit">
        <input type="submit" name="submit" value="LOGIN">
    </div>

    </div>
    
 </form>

 <?php
 

  if(isset($_POST['submit'])){
    $link=new mysqli('localhost','root','Seetu@5353','hostel');

    $values=mysqli_query($link,"SELECT * from admin where username='$_POST[username]'");
while($row=mysqli_fetch_array($values)){
    $name=$row['username'];
    $pwd=$row['password'];
}
     if($_POST['username']!='' and $_POST['password']!=''){
        if($name==$_POST['username'] && $pwd==$_POST['password']){
            header('location: ./admin/dashboard.php');
            die;
         }
         else{
            echo "<script>alert('Username or password doesn't matched...');</script>";
         }
     }else{
        echo "<script>alert('Username or password doesn't matched...');</script>";
     }
    
}

?>


</body>
</html>