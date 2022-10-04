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
    <div class="add_student_header">
        <h1>Hostel Management System</h1>
        <div class="dashboard">
            <a href="../dashboard.php">Goto Dashboard🏠</a>
        </div>
    </div>
    <h2 style="margin-left: 680px;">Add Student</h2>
    <form method="post" action="" class="add_student_form">
    <div class="input-field">
        <input class="input" type="text" name="email" placeholder="Email"/>
    </div>
    <div class="input-field">
        <input class="input" type="text" name="usn" placeholder="USN or Register Number"/>
    </div>
    <div class="input-field">
        <input class="input" type="text" name="name" placeholder="Name"/>
    </div>
    <div class="input-field">
        <input class="input" type="text" name="branch" placeholder="Branch"/>
    </div>
    <div class="input-field">
        <input class="input" type="text" name="semester" placeholder="Semester"/>
    </div>
    <div class="input-field">
        <input class="input" type="text" name="address" placeholder="Address"/>
    </div>
    <div class="input-field">
        <input class="input" type="text" name="phone" placeholder="Phone Number"/>
    </div>
    <div class="input-field">
        <input class="input" type="text" name="room_no" placeholder="Room Number"/>
    </div>
    <div class="submit">
        <input class="input" type="submit" name="submit" value="ADD STUDENT">
    </div>
    </form>

     



    <?php
 
 $link=new mysqli('localhost','root','Seetu@5353','hostel');
 if(isset($_POST['submit'])){


    $values=mysqli_query($link,"SELECT * FROM `rooms` WHERE room_no='$_POST[room_no]'");
    while($row=mysqli_fetch_array($values)){
        $room_no=$row['room_no'];
        $max_bed=(int)$row['max_bed'];
        $allocated=(int)$row['allocated'];
    }
   

    if($allocated<$max_bed){
        mysqli_query($link,"INSERT INTO `students`(`email`, `usn`, `name`, `branch`, `semester`, `address`, `phone`,`room_no`) 
        VALUES ('$_POST[email]','$_POST[usn]','$_POST[name]','$_POST[branch]','$_POST[semester]','$_POST[address]','$_POST[phone]','$_POST[room_no]')");

        mysqli_query($link,"UPDATE `rooms` SET `allocated`=$allocated+1 WHERE room_no='$_POST[room_no]'");
}
    else{
        echo "<script>alert('Room is already FULL!!!');</script>";
    }

   

  
?>
<script>
window.location.href='../dashboard.php';
</script>
<?php

}

?>





</body>
</html>