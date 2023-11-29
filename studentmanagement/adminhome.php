
<?php
session_start();
 if (!isset($_SESSION['username'])) {
    header("location:login.php");
 }
 elseif ($_SESSION['usertype']=='admin') {
   header("location:login.php");
 }
 
 $host="localhost";
 $user="root";
 $password="";
 $db="collegeproject";

 $data=mysqli_connect($host,$user,$password,$db);

 $sql="SELECT * from user WHERE usertype='admin'";
 $result=mysqli_query($data,$sql);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="admin.css">


    <?php
    
    include 'admin_css.php';
    
    ?>

</head>
<body>

    <?php
    
    include 'admin_sidebar.php';
    
    ?>

<header class="header">
     <a href="http://127.0.0.1:5500/add_admin.html">Admin Dashboard</a>
     <div class="logout">
     <a href="logout.php" class="btn btn-primary">Logout</a>
     </div>
     </header>
     <aside>
        <ul>
           

            <li>
                <a href="admission.php">View Details</a>
            </li>

            <li>
                <a href="add_admin.php">Add Teachers</a>
            </li>

            <li>
                <a href="">Add Students </a>
            </li>

            <li>
                <a href="">Add Courses</a>
            </li>


            <li>
                <a href="">Add Result</a>
            </li>


            <li>
                <a href="">Payment Details</a>
            </li>
        </ul>
     </aside>
     <div class="content">
        <h1>Admin Dashboard</h1>
     </div>
     
</body>
</html>

