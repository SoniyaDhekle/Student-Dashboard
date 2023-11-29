<?php
session_start();
//  if (!isset($_SESSION['username'])) {
//     header("location:login.php");
//  }
//  elseif ($_SESSION['usertype']=='student') {
//    header("location:login.php");
//  }

 $host="localhost";
 $user="root";
 $password="";
 $db="collegeproject";

 $data=mysqli_connect($host,$user,$password,$db);

 $sql="SELECT * from user WHERE usertype='student'";
 $result=mysqli_query($data,$sql);
 ?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="student.css">


    <?php
    
    include 'student_css.php';
    
    ?>

    <style type="text/css">

        .table_th{
            padding:20px;
            font-size:20px;

        }

        .table_td{
            padding:10px;
            background-color: skyblue;
        }
    </style>

</head>
<body>

    <?php
    
    include 'student_sidebar.php';
    
    ?>

<!-- <header class="header">
     <a href="">Student Dashboard</a>
     <div class="logout">
     <a href="logout.php" class="btn btn-primary">Logout</a>
     </div>
     </header>
     <aside> -->
        <ul>
           

            <li>
                <a href="admission.php">Add Details</a>
            </li>

            <li>
                <a href="add_student.php">Add Students</a>
            </li>

            <li>
                <a href="view_student.php">View Students</a>
            </li>

            <li>
                <a href="">My Courses</a>
            </li>

            <li>
                <a href="">Add Certificated </a>
            </li>

            <li>
                <a href="">View Result</a>
            </li>


            <li>
                <a href="">Payment Details</a>
            </li>
        </ul>
     </aside>
     <div class="content">
        <center>
        <h1>Student Data</h1> <br>
        <table border="1px">
            <tr>
                <th class="table_th">UserName</th>
                <th class="table_th">Phone</th>
                <th class="table_th">Email</th>
                <th class="table_th">Password</th>
                <th class="table_th">Delete</th>
            </tr>
            <?php
            while ($info=$result->fetch_assoc()) {
               
            
            ?>
            <tr>
                <td class="table_td">
                <?php echo "{$info['username']}";?>
                </td>
                <td class="table_td">
                <?php echo "{$info['phone']}";?>
                </td>
                <td class="table_td">
                <?php echo "{$info['email']}";?>
                </td>
                <td class="table_td">
                <?php echo "{$info['password']}";?>
                </td>
                <td class="table_td">
                <?php echo "<a href='delete.php?student_id={$info['ID']}'>Delete</a>";?>
                </td>
            </tr>

            <?php
            }
            ?>
        </table>
        </center>
     </div>
     
</body>
</html>

