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

 if (isset($_POST['add_admin'])) {
    $username=$_POST['name']; 
    $user_phone=$_POST['phone'];
    $user_email=$_POST['email'];
    $usertype="admin";
    $user_password=$_POST['password'];
    

    $check = "SELECT * FROM user WHERE username = '$username' ";
    $check_user=mysqli_query($data,$check);

    $row_count=mysqli_num_rows($check_user);

    if($row_count==1) {
        echo "<script type='text/javascript'>
        alert('Username already Exist. Try Another One');
        </script> ";

       // echo "Username already Exist. Try Another One";
    }

        else {
        
     

    $sql="INSERT INTO user(
        username,phone,,email,usertype,password) VALUES ('$username','$user_phone','$user_email','$usertype','$user_password')";
    
    $result=mysqli_query($data,$sql);
    if($result)
    {
        echo "<script type='text/javascript'>
        alert('Data Upload Successfully');
        </script> ";
    }
    else {
        echo "upload failed";
    }

        } 

 }



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

    <link rel="stylesheet" type="text/css" href="student.css">
    <style type="text/css">
        label {
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .div_deg {
            background-color: skyblue;
            width: 400px; 
            padding-top: 70px;
            padding-bottom: 70px;



        }


    </style>

    <?php
    
    include 'admin_css.php';
    
    ?>

</head>
<body>

    <?php
    
    include 'admin_sidebar.php';
    
    ?>

     <div class="content">
        <center>
        <h1>Add Teachers</h1> 

        <div class="div_deg">
            <form action="#" method="POST">
                <div>
                    <label for="">Username</label>
                    <input type="text" name="name">
                </div>

                <div>
                    <label for="">Email</label>
                    <input type="text" name="email">
                </div>

                <div>
                    <label for="">Phone</label>
                    <input type="number" name="phone">
                </div>

                <div>
                    <label for="">Password</label>
                    <input type="text" name="password">
                
                </div>

                <div>
                    
                    <input type="submit" class="btn btn-primary" name="add_student" value="Add Teachers">
                </div>
            
            
            
           
            </form>
        </div>

        </center>

      </div>
     
</body>
</html>

