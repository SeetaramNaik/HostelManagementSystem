<?php
$link=new mysqli('localhost','root','Seetu@5353','hostel');


mysqli_query($link,"DELETE from employee where name='$_GET[id]'");

?>

<script>

window.location.href='../dashboard.php';

</script>