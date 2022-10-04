<?php
    $newDate = date('l');

    $link=new mysqli('localhost','root','Seetu@5353','hostel');
    
    $values=mysqli_query($link,"SELECT * from meals where day='$newDate'");
    while($row=mysqli_fetch_array($values)){
        $morning=$row['morning'];
        $afternoon=$row['afternoon'];
        $evening=$row['evening'];
        $night=$row['night'];
    }
    //student count
    $query=mysqli_query($link,"SELECT count(*) as count from students");
    $c=mysqli_fetch_array($query);
    $student=$c['count'];

    //employee count
    $query1=mysqli_query($link,"SELECT count(*) as count from employee");
    $d=mysqli_fetch_array($query1);
    $employee=$d['count'];

     //room count
     $query2=mysqli_query($link,"SELECT count(*) as count from rooms");
     $d=mysqli_fetch_array($query2);
     $room=$d['count'];

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="../css/dashboard.css"/> -->
    <link rel="stylesheet" href="../css/dashboard.css?v=<?php echo time(); ?>">
    <title>Hostel Management System</title>
</head>
<body>
    <div class="header">
        <!-- <div class="hostel-icon">
            <img src="../img/hostel.png" style="width:100px;height:100px; color:#fff;"/>
        </div> -->
        <h1>Hostel  Management  System</h1>
        <div class="logo" style="display: flex;align-items:center;">
          <img src="../img/logo.png" alt="Logo"/>
          <div class="logout" style="display: flex;align-items:center;">
          <a style="margin-right: 30px;color:#fff;" href="../index.php">Logout<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg></a>
          </div>
          
        </div>
        
 
    </div>
   




<div class="content d-flex"> 

<div class="left-side">


<div class="dropdown p-2">
  <button class="btn btn-secondary dropdown-toggle" style="background-color: #000;color:#fff;width:100%;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Manage students
  </button>
  <div class="dropdown-menu" style="width: 95%;" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" style="width: 95%;" href="./students/add_student.php">Add Students</a>
    <a class="dropdown-item" style="width: 95%;" href="./students/all_students.php">List Students</a>
    <!-- <a class="dropdown-item" style="width: 95%;" href="#">Something else here</a> -->
  </div>
</div>



<div class="dropdown p-2">
  <button class="btn btn-secondary dropdown-toggle" style="background-color: #000;color:#fff;width:100%;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Manage Rooms
  </button>
  <div class="dropdown-menu" style="width: 95%;" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" style="width: 95%;" href="./rooms/room_details.php">Room Details</a>
    <a class="dropdown-item" style="width: 95%;" href="./rooms/add_room.php">Add Room</a>
    <!-- <a class="dropdown-item" style="width: 95%;" href="#">Something else here</a> -->
  </div>
</div>

<div class="dropdown p-2">
  <button class="btn btn-secondary dropdown-toggle" style="background-color: #000;color:#fff;width:100%;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Manage Employees
  </button>
  <div class="dropdown-menu" style="width: 95%;" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" style="width: 95%;" href="./employee/add_employee.php">Add New</a>
    <a class="dropdown-item" style="width: 95%;" href="./employee/all_employees.php">List Employees</a>
    <!-- <a class="dropdown-item" style="width: 95%;" href="#">Something else here</a> -->
  </div>
</div>


<div class="dropdown p-2">
  <button class="btn btn-secondary dropdown-toggle" style="background-color: #000;color:#fff;width:100%;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Manage Meals
  </button>
  <div class="dropdown-menu" style="width: 95%;" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" style="width: 95%;" href="./meals/all_meals.php">See All</a>
    <!-- <a class="dropdown-item" style="width: 95%;" href="#">Something else here</a> -->
  </div>
</div>


<div class="dropdown p-2">
  <button class="btn btn-secondary dropdown-toggle" style="background-color: #000;color:#fff;width:100%;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Manage Wardens
  </button>
  <div class="dropdown-menu" style="width: 95%;" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" style="width: 95%;" href="./warden/add_warden.php">Add Warden</a>
    <a class="dropdown-item" style="width: 95%;" href="./warden/all_wardens.php">List Wardens</a>
  </div>
</div>
       


<!-- 

       <div class="sidebar">
            <a href="./room_details.php">Room Details</a>
       </div> -->


</div>



<div class="right-side">
    <div class="stat d-flex">
        <div class="students">
          <div class="stud-info">
          <div class="student-icon">
                 <img src="../img/people.png" style="width:100px;height:100px;"/>
            </div>
            <div class="student-detail" >
                <h3><?php echo $student; ?></h3> Total Students 
            </div>
          </div>
          <!-- <div class="stud-more-detail">
             <a href="./students/all_semesters_students/first_sem.php?id=1" class="stud-detail">See Detail</a> 
          </div> -->
          
        </div>
        <div class="employees">
            <div class="employee-icon">
                 <img src="../img/people.png" style="width:100px;height:100px;"/>
            </div>
            <div class="employee-detail">
                 <h3><?php echo $employee; ?></h3> Total Employees
            </div>
           
        </div>
        <div class="rooms">
            <div class="room-icon">
                 <img src="../img/bed.png" style="width:110px;height:100px;"/>
            </div>
            <div class="room-detail">
         <h3><?php echo $room; ?></h3>  Total Rooms 
            </div>
            
        </div>
        
    </div>


<div class="right-side-bottom">


<div class="meals">
    <h3><?php echo $newDate; ?>'s Meal <span style="font-size:50px;">🍛</span></h3>
    <div class="day-meals">
         <h6><span>Morning   :</span>   <span class="meal-name"><?php echo $morning; ?></span> </h6>
         <h6><span>Afternoon :</span>   <span class="meal-name"><?php echo $afternoon; ?></span></h6>
         <h6><span>Evening   :</span>   <span class="meal-name"><?php echo $evening; ?></span></h6>
         <h6><span>Night     :</span>   <span class="meal-name"><?php echo $night; ?></span></h6>
    </div>
   
</div>



<div class="calendar">
        <div class="calendar-header">
            <span class="month-picker" id="month-picker">April</span>
            <div class="year-picker">
                <span class="year-change" id="prev-year">
                    <pre><</pre>
                </span>
                <span id="year">2022</span>
                <span class="year-change" id="next-year">
                    <pre>></pre>
                </span>
            </div>
        </div>
        <div class="calendar-body">
            <div class="calendar-week-day">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>
            <div class="calendar-days"></div>
        </div>
       
        <div class="month-list"></div>
    </div>




  </div>
</div>


</div>
    
<script src="../js/dashboard.js"></script>
<!-- <script src="../js/sweetalert.min.js"></script>
<script>
  swal("Good job!", "You clicked the button!", "success");
</script> -->

</body>
</html>