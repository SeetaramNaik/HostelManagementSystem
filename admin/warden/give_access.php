<?php

$link=new mysqli('localhost','root','Seetu@5353','hostel');

$check=mysqli_query($link,"SELECT * from wardens where email='$_GET[id]'");
$arr=mysqli_fetch_array($check);
$status=$arr['access'];
$name=$arr['name'];
$email=$arr['email'];
if($status=="Give access to this site"){
    $update_status1=mysqli_query($link,"UPDATE wardens set access ='Remove access to this site' where email = '$_GET[id]'");
    mysqli_query($link,"INSERT INTO `admin`(`email`,`username`, `password`) VALUES ('$email','$name','$name')");
}
else{
$update_status=mysqli_query($link,"UPDATE wardens set access ='Give access to this site' where email = '$_GET[id]'");
mysqli_query($link,"DELETE FROM `admin` WHERE email='$_GET[id]'");
}
?>

<script>
    window.location.href='./all_wardens.php';
</script>