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
    <div class="add-room-container">
    <div class="add-room-header">
        <h1>Hostel Management System</h1>
        <div class="dashboard">
            <a href="../dashboard.php">Goto Dashboard🏠</a>
        </div>
    </div>
    <h1 style="text-align: center;">Add details of room</h1>
    <form method="post" action="" class="add_room_form">
    <div class="input-field">
        <input class="input" type="text" name="room_no" placeholder="Add Room Number"/>
    </div>
    <div class="input-field">
        <input class="input" type="text" name="max_bed" placeholder="Maximum number of Beds"/>
    </div>
   
    <div class="submit">
        <input type="submit" name="submit" value="ADD ROOM">
    </div>
    </form>
    </div>
    



    <?php
 
 $link=new mysqli('localhost','root','Seetu@5353','hostel');
 if(isset($_POST['submit'])){
   

    
    mysqli_query($link,"INSERT INTO `rooms`(`room_no`, `max_bed`, `allocated`) 
    VALUES ('$_POST[room_no]','$_POST[max_bed]','0')");



   

  
?>
<script>
window.location.href='../dashboard.php';
</script>
<?php

}

?>

</body>
</html>