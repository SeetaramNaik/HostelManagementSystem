<?php
$link=new mysqli('localhost','root','Seetu@5353','hostel');
$room_no=mysqli_query($link,"SELECT `room_no` as room from students where usn='$_GET[id]'");
$room=mysqli_fetch_array($room_no);
$room_number=$room['room'];
$values=mysqli_query($link,"SELECT * FROM `rooms` WHERE room_no='$room_number'");
    while($row=mysqli_fetch_array($values)){
        $allocated=(int)$row['allocated'];
    }

mysqli_query($link,"UPDATE `rooms` SET `allocated`=$allocated-1 WHERE room_no='$room_number'");


mysqli_query($link,"DELETE from students where usn='$_GET[id]'");

?>

<script>

window.location.href='./all_students.php';

</script>