
    <?php

        error_reporting(0);  
        //session_start() 

       $host="localhost";
       $user="root";
       $password="";
       $db="collegeproject";

       $conn=mysqli_connect($host,$user,$password,$db);
       echo "Successful Connected <br><br>";
    


       if ($conn===false) {
         die("Connection error");
       }

        if ($_SERVER["REQUEST_METHOD"]=="POST") {
           $name=$_POST['username'];

           $pass=$_POST['password'];

           $sql="select * from user where username='".$name."' AND password='".$pass."' ";

           $result=mysqli_query($conn,$sql); ///for checking actual match 

           $row=mysqli_fetch_array($result);

           if($row["usertype"]=="admin") {
            //session_start()
            //$_SESSION['username']=$name;
            //$_SESSION['usertype']="admin";

            header("location:adminhome.php");
           }
         

           elseif($row["usertype"]=="student") {
            
             //session_start()
            //  $_SESSION['username']=$name;
            //  $_SESSION['usertype']="student";

             header("location:studenthome.php");
           }

          
          else{
             session_start();
             $message= "username or password do not match";
             $_SESSION['loginMessage']=$message; //store string inside 
             header("location:login.php"); ///sending string
          }

        }

    ?>
