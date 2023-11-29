<?php
session_start();
 if (!isset($_SESSION['username'])) {
    header("location:login.php");
 }
 elseif ($_SESSION['usertype']=='admin') {
   header("location:login.php");
 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<header class="header">
     <a href="">Admin Dashboard</a>
     <div class="logout">
     <a href="logout.php" class="btn btn-primary">Logout</a>
     </div>
     </header>
     <aside>
        <ul>
           

            <li>
                <a href="admission.php">Add Details</a>
            </li>

            <li>
                <a href="add_admin.php">Add Teacher</a>
            </li>

            <li>
                <a href="">Add Courses</a>
            </li>

            <li>
                <a href="">Add Result </a>
            </li>

            <li>
                <a href="">View Result</a>
            </li>


            <li>
                <a href="">Payment Details</a>
            </li>
        </ul>
     </aside>

</body>
</html>