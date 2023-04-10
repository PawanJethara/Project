
<?php

if(isset($_POST['submit'])){
  
  $Regno = $_POST["regno"];
  $uname = $_POST["uname"];
  $Department = $_POST["department"];
  $Batch = $_POST["batch"];
  $Semester = $_POST["semester"];
  $Email = $_POST["email"];
  
  try {
    $servername = "localhost";
    $dbname = "college";
    $username = 'root';        
    $password = '';

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username , $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = "INSERT INTO student (RegNo, uname, Department, Batch, Semester, Email)
    VALUES ($Regno, '$uname', '$Department', $Batch , '$Semester', '$Email')";
    
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
    <title>Adding process</title>  
    <link rel="stylesheet" type="text/css" href="add.css">
</head>  
  
<body>  
    <div class="container">  
        <h2>Add Students Information</h2> 
        <form method="post" action="">  
            <div class="form-group"> <label>Regno.</label> <input type="text" name="regno" placeholder="Enter registration no. "> </div>  
            <div class="form-group"> <label>Name</label> <input type="text" name="uname" value="" placeholder="Enter name"> </div>
            <div class="form-group"> <label>Department</label> <input type="text" name="department" placeholder="Enter Department "> </div>
            <div class="form-group"> <label>Batch</label> <input type="text" name="batch" placeholder="Enter batch "> </div>
            <div class="form-group"> <label>Semester</label> <input type="text" name="semester" placeholder="Enter Semester "> </div>
            <div class="form-group"> <label>Email</label> <input type="email" name="email" placeholder="Enter Email "> </div> 
             <input type="submit" name="submit" value="Submit">
        </form>  
    </div>  
</body>  
</html>



