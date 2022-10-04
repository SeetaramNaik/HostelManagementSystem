<?php 
   $link=new mysqli('localhost','root','Seetu@5353','hostel');

   //first student count
   $query=mysqli_query($link,"SELECT count(*) as count from students where semester='1'");
   $c=mysqli_fetch_array($query);
   $first_sem_student=$c['count'];

    //second student count
    $query1=mysqli_query($link,"SELECT count(*) as count from students where semester='2'");
    $c=mysqli_fetch_array($query1);
    $second_sem_student=$c['count'];

    //third student count
    $query2=mysqli_query($link,"SELECT count(*) as count from students where semester='3'");
    $c=mysqli_fetch_array($query2);
    $third_sem_student=$c['count'];

    //third student count
    $query3=mysqli_query($link,"SELECT count(*) as count from students where semester='4'");
    $c=mysqli_fetch_array($query3);
    $fourth_sem_student=$c['count'];

    //fifth student count
    $query4=mysqli_query($link,"SELECT count(*) as count from students where semester='5'");
    $c=mysqli_fetch_array($query4);
    $fifth_sem_student=$c['count'];

     //sixth student count
     $query5=mysqli_query($link,"SELECT count(*) as count from students where semester='6'");
     $c=mysqli_fetch_array($query5);
     $sixth_sem_student=$c['count'];

      //seventh student count
      $query6=mysqli_query($link,"SELECT count(*) as count from students where semester='7'");
      $c=mysqli_fetch_array($query6);
      $seventh_sem_student=$c['count'];

       //eigthth student count
     $query7=mysqli_query($link,"SELECT count(*) as count from students where semester='8'");
     $c=mysqli_fetch_array($query7);
     $eigthth_sem_student=$c['count'];


?>

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
    <div class="all-stud-header">
        <h1>Hostel Management System</h1>
        <div class="dashboard">
            <a href="../dashboard.php">Goto Dashboard🏠</a>
        </div>
    </div>
    <div class="all-semester">
        <div class="semester">
            <div class="first-four">
                <div class="first-sem">
                    <!-- <h2><a href="./students/all_semesters_students/first_sem.php?id=1">First Semester Students</a><span class="number">2</span></h2> -->
                    <div class="stud-text">
                         <h1 style="width:50%;margin-top:50px;margin-left:30px;">First semester students</h1>
                         <h1 style="font-size: 80px;"><?php echo $first_sem_student; ?></h1>
                    </div>
                    <!-- <div class="stud-detail">
                        <a href="#">See Detail</a>
                    </div> -->
                    <a href="./all_semesters_students/first_sem.php?id=1" class="stud-detail">See Detail</a>                 
                </div>
                <div class="first-sem">
                    <!-- <h2><a href="./students/all_semesters_students/first_sem.php?id=1">First Semester Students</a><span class="number">2</span></h2> -->
                    <div class="stud-text">
                         <h1 style="width:50%;margin-top:50px;margin-left:30px;">Second semester students</h1>
                         <h1 style="font-size: 80px;"><?php echo $second_sem_student; ?></h1>
                    </div>
                    <!-- <div class="stud-detail">
                    <a href="#">See Detail</a>
                    </div> -->
                    <a href="./all_semesters_students/second_sem.php?id=2" class="stud-detail">See Detail</a>
                </div>
                <div class="first-sem">
                    <!-- <h2><a href="./students/all_semesters_students/first_sem.php?id=1">First Semester Students</a><span class="number">2</span></h2> -->
                    <div class="stud-text">
                         <h1 style="width:50%;margin-top:50px;margin-left:30px;">Third semester students</h1>
                         <h1 style="font-size: 80px;"><?php echo $third_sem_student; ?></h1>
                    </div>
                    <!-- <div class="stud-detail">
                    <a href="#">See Detail</a>
                    </div> -->
                    <a href="./all_semesters_students/third_sem.php?id=3" class="stud-detail">See Detail</a>
                </div>
                <div class="first-sem">
                    <!-- <h2><a href="./students/all_semesters_students/first_sem.php?id=1">First Semester Students</a><span class="number">2</span></h2> -->
                    <div class="stud-text">
                         <h1 style="width:50%;margin-top:50px;margin-left:30px;">Fourth semester students</h1>
                         <h1 style="font-size: 80px;"><?php echo $fourth_sem_student; ?></h1>
                    </div>
                    <!-- <div class="stud-detail">
                    <a href="#">See Detail</a>
                    </div> -->
                    <a href="./all_semesters_students/fourth_sem.php?id=4" class="stud-detail">See Detail</a>
                </div>
                
                 <!-- <h2><a href="./students/all_semesters_students/second_sem.php?id=2">Second Semester Students</a></h2>
                 <h2><a href="./students/all_semesters_students/third_sem.php?id=3">Third Semester Students</a></h2>
                 <h2><a href="./students/all_semesters_students/fourth_sem.php?id=4">Fourth Semester Students</a></h2> -->
            </div>
            <div class="second-four">
            <div class="first-sem">
                    <!-- <h2><a href="./students/all_semesters_students/first_sem.php?id=1">First Semester Students</a><span class="number">2</span></h2> -->
                    <div class="stud-text">
                         <h1 style="width:50%;margin-top:50px;margin-left:30px;">Fifth semester students</h1>
                         <h1 style="font-size: 80px;"><?php echo $fifth_sem_student; ?></h1>
                    </div>
                    <!-- <div class="stud-detail">
                    <a href="#">See Detail</a>
                    </div> -->
                    <a href="./all_semesters_students/fifth_sem.php?id=5" class="stud-detail">See Detail</a>
                </div>
                <div class="first-sem">
                    <!-- <h2><a href="./students/all_semesters_students/first_sem.php?id=1">First Semester Students</a><span class="number">2</span></h2> -->
                    <div class="stud-text">
                         <h1 style="width:50%;margin-top:50px;margin-left:30px;">Sixth semester students</h1>
                         <h1 style="font-size: 80px;"><?php echo $sixth_sem_student; ?></h1>
                    </div>
                    <!-- <div class="stud-detail">
                    <a href="#">See Detail</a>
                    </div> -->
                    <a href="./all_semesters_students/sixth_sem.php?id=6" class="stud-detail">See Detail</a>
                </div>
                <div class="first-sem">
                    <!-- <h2><a href="./students/all_semesters_students/first_sem.php?id=1">First Semester Students</a><span class="number">2</span></h2> -->
                    <div class="stud-text">
                         <h1 style="width:50%;margin-top:50px;margin-left:30px;">Seventh semester students</h1>
                         <h1 style="font-size: 80px;"><?php echo $seventh_sem_student; ?></h1>
                    </div>
                    <!-- <div class="stud-detail">
                    <a href="#">See Detail</a>
                    </div> -->
                    <a href="./all_semesters_students/seventh.php?id=7" class="stud-detail">See Detail</a>
                </div>
                <div class="first-sem">
                    <!-- <h2><a href="./students/all_semesters_students/first_sem.php?id=1">First Semester Students</a><span class="number">2</span></h2> -->
                    <div class="stud-text">
                         <h1 style="width:50%;margin-top:50px;margin-left:30px;">Eighth semester students</h1>
                         <h1 style="font-size: 80px;"><?php echo $eigthth_sem_student; ?></h1>
                    </div>
                    <!-- <div class="stud-detail">
                    <a href="#">See Detail</a>
                    </div> -->
                    <a href="./all_semesters_students/eigthth_sem.php?id=8" class="stud-detail">See Detail</a>
                </div>
                <!-- <h2><a href="./students/all_semesters_students/fifth_sem.php?id=5">Fifth Semester Students</a></h2>
                <h2><a href="./students/all_semesters_students/sixth_sem.php?id=6">Sixth Semester Students</a></h2>
                <h2><a href="./students/all_semesters_students/seventh_sem.php?id=7">Seventh Semester Students</a></h2>
                <h2><a href="./students/all_semesters_students/eigthth_sem.php?id=8">Eighth Semester Students</a></h2> -->
            </div>
          
        </div>
    </div>
</body>
</html>