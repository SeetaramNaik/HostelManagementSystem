<?php
$link=new mysqli('localhost','root','Seetu@5353','hostel');

$values=mysqli_query($link,"SELECT * from meals where id='$_GET[id]'");
while($row=mysqli_fetch_array($values)){
    $day=$row['day'];
    $morning=$row['morning'];
    $afternoon=$row['afternoon'];
    $evening=$row['evening'];
    $night=$row['night'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./meals.css"/> -->
    <link rel="stylesheet" href="./meals.css?v=<?php echo time(); ?>">
    <link rel="icon" href="../../img/logo.png"/>
    <title>Hostel Management System</title>
</head>
<body>

    <div class="meal-details-header">
    <h1>Hostel Management System</h1>
        <div class="dashboard">
            <a href="../dashboard.php">Goto Dashboard🏠</a>
        </div>
    </div>
    <h2 style="text-align: center;margin-left:650px;">Edit <?php echo $day; ?>'s Meal</h2>

<div class="container" style="margin:20px;">
        <form class="edit_meal_form" method="post" action="">
           
         
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label label">Morning Meal</label>
            <div class="col-sm-10">
              <input name="morning" type="text" class="edit_input" id="inputEmail3" value="<?php echo $morning; ?>" />
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label label">Afternoon Meal</label>
            <div class="col-sm-10">
              <input name="afternoon" type="text" class="edit_input" maxlength="10" value="<?php echo $afternoon; ?>"/>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label label">Evening Meal</label>
            <div class="col-sm-10">
              <input  name="evening" type="text" class="edit_input" id="inputEmail3" value="<?php echo $evening; ?>"/>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label label">Night Meal</label>
            <div class="col-sm-10">
              <input name="night" type="text" class="edit_input" id="inputEmail3" value="<?php echo $night; ?>"/>
            </div>
          </div>
        
          <div class="row submit">
              <input name="update" type="submit" value="UPDATE" class="form-control btn btn-primary" id="inputPassword3" />
            </div>
        </form>
      </div>


      <?php
  if(isset($_POST['update'])){
  $update=mysqli_query($link,"UPDATE `meals` SET `id`='$_GET[id]',
  `morning`='$_POST[morning]',`afternoon`='$_POST[afternoon]',`evening`='$_POST[evening]',`night`='$_POST[night]' WHERE `id`='$_GET[id]'");

  ?>
<script>

window.location.href='../dashboard.php';

</script>

<?php
  }
?>
    
</body>
</html>