<?php

if(isset($_POST['submit'])){
  
  $Rollno = $_POST["rollno"];
  $Name = $_POST["uname"];
  $Subject = $_POST["subject"];
  $Semester = $_POST["semester"];
  $Date = $_POST["date"];
  $Attendance=$_POST["attendance"];
  
  try {
    $servername = "localhost";
    $dbname = "hajiri";
    $username = 'root';        
    $password = '';

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username , $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = "INSERT INTO attendance (Rollno, Name, Subject, Semester, Date ,Attendance)
    VALUES ($Rollno, '$Name', '$Subject', '$Semester' , $Date , '$Attendance')";
    
    // var_dump($sql);
    // die();

    $conn->exec($sql);

    echo "New record created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
}
?>

<html>  
  <head>  
    <title>Attendance</title>  
    <link rel="stylesheet" type="text/css" href="add.css">
</head>  
  
<body>  
    <div class="container">  
        <h2>  Student Attendance</h2> 
        <form method="post" action="">  
            <div class="form-group"> <label>Rollno</label> <input type="text" name="rollno" placeholder="Enter roll no "></div>  
            <div class="form-group"> <label>Name</label> <input type="text" name="uname" value="" placeholder="Enter name"> </div>
            <div class="form-group"> <label>Subject</label> <input type="text" name="subject" placeholder="Enter subject "> </div>
            <div class="form-group"> <label>Semester</label> <input type="text" name="semester" placeholder="Enter Semester "> </div>
            <div class="form-group"> <label>Date</label> <input type="text" name="date" placeholder="Enter date "> </div>
            <div class="form-group"> <label>Attendance</label> <input type="text" name="attendance" placeholder="Enter attendance "> </div>
             <input type="submit" name="submit" value="Submit">
        </form>  
    </div>  
</body>  
</html>

