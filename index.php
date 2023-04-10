<html>
    <head>
        <title>Making Login Page</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style1.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
      <h2 style=text-align:center>Attendace Management System</h2>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Attendance System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="user.php">Create Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add.php">Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add1.php">Teachers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewstudent.php">View Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewteacher.php">View Teachers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="attendance.php">Attendance</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/spa1.png" alt="SPA1" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/spa2.png" alt="SPA2" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/spa3.jpg" alt="SPA3" width="1100" height="500">
    </div>
  </div>
  
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
  <div>
    <h2 class="text-center">About Us</h2>
    <p>Attendance Management System is a software developed for daily student attendance in schools, colleges, and institutes. It facilitates to access the attendance information of a particular student in a particular class. The information is sorted by the operator, which will be provided by the lecturer or teacher for the particular class.</p>
  </div>
</section>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> 
    </body>
</html>