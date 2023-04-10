<?php

if(isset($_POST['submit'])){
  
  $ID = $_POST["id"];
  $Name = $_POST["uname"];
  $Department = $_POST["department"];
  $Email = $_POST["email"];
  $SubjectName = $_POST["sname"];
  
  try {
    $servername = "localhost";
    $dbname = "addteacher";
    $username = 'root';        
    $password = '';

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username , $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = "INSERT INTO teacher (ID, Name, Department, Email, SubjectName)
    VALUES ($ID, '$Name', '$Department', '$Email' , '$SubjectName')";
    
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
        <h2>Add Teachers Information</h2> 
        <form method="post" action="">  
            <div class="form-group"> <label> ID</label> <input type="text" name="id" placeholder="Enter teacher id "> </div>  
            <div class="form-group"> <label> Name</label> <input type="text" name="uname" value="" placeholder="Enter teacher name"> </div>
            <div class="form-group"> <label>Department</label> <input type="text" name="department" placeholder="Enter Department "> </div>
            <div class="form-group"> <label>Email</label> <input type="text" name="email" placeholder="Enter Email "> </div>
            <div class="form-group"> <label>SubjectName</label> <input type="text" name="sname" placeholder="Enter subject name "><br><br> </div>
             <input type="submit" name="submit" value="submit">
        </form>  
    </div>  
</body>  
</html>