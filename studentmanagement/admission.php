<?php

session_start();
// if (!isset($_SESSION['username'])) {
//     header("location:login.php");
// }
// elseif ($_SESSION['usertype']=='admin') {
//     header("location:login.php");
// }

$host="localhost";
$user="root";
$password="";
$db="collegeproject";

$data=mysqli_connect($host,$user,$password,$db);
$sql="SELECT * from admission";
$result=mysqli_query($data,$sql);
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>

    <?php
    
    include 'student_css.php';
    
    ?>
    <link rel="stylesheet" type="text/css" href="student.css">
</head>
<body>
    
        <?php
        
        include 'student_sidebar.php';
        
        ?>


     <div class="content">
        <h1>Applied For Admission</h1>
        <table border="1px">
            <tr>
                <th style="padding: 20px; font-size: 15px;">Name</th>
                <th style="padding: 20px; font-size: 15px;">Email</th>
                <th style="padding: 20px; font-size: 15px;">Phone</th>
                <th style="padding: 20px; font-size: 15px;">Message</th>  
                
            </tr>
            <?php
            
            while ($info=$result->fetch_assoc()) {
                
            
            
            ?>
            <tr>
                <td style="padding: 20px;"></td>
                <?php echo "{$info['name']}"; ?>
                <td style="padding: 20px;"></td>
                <?php echo "{$info['email']}"; ?>
                <td style="padding: 20px;"></td>
                <?php echo "{$info['phone']}"; ?>
                <td style="padding: 20px;"></td>
                <?php echo "{$info['message']}"; ?>
            </tr>

            <?php
             }
            ?>
        </table>
        
     </div>
     
</body>
</html>

