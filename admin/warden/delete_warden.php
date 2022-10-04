<?php
$link=new mysqli('localhost','root','Seetu@5353','hostel');


mysqli_query($link,"DELETE from wardens where email='$_GET[id]'");

?>

<script>

window.location.href='../dashboard.php';

</script>